<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Carts extends MX_Controller {
    
    public $flag = true;
    public $_version = '';

	public function __construct() {
		parent::__construct();
        $this->load->model('mcart');

        if ($this->flag) {
			$this->_version = '_v2.php';
		}else{
			$this->_version = '';
		}
	}
	
	public function index(){
        date_default_timezone_set("Asia/Jakarta");
        $time = time();
        $hour = date("G",$time);

        if ($hour>=0 && $hour<=11){
            $greeting = "Selamat Pagi";
        }elseif ($hour >=12 && $hour<=15){
            $greeting = "Selamat Siang";
        }elseif ($hour >=16 && $hour<=18){
            $greeting = "Selamat Sore";
        }elseif ($hour >=19 && $hour<=23){
            $greeting = "Selamat Malam ";
        }else{
            $greeting = "Selamat Pagi";
        }
        $data['greeting'] = $greeting;
        if($this->cart->total() > 0){
            $this->template->write_view('index'. $this->_version, $data);
        }else{
            redirect(site_url('shops'));
        }
    }

    public function proccessAdd(){
        $this->form_validation->set_rules('qty', 'Kuantitas', 'trim|required');

		if($this->form_validation->run() == FALSE){
			$form_error = $this->form_validation->error_array();
			$response =  array(
				'code' => 401,
				'message' => 'Formulir tidak lengkap.',
				'error' => $form_error,
			);
			echo json_encode($response, JSON_PRETTY_PRINT);
			die();
        }

        $productID = $this->input->post('productID');
        $qty = $this->input->post('qty');

        if ($qty <= 0 || $qty == '') {
            $response = array(
                'code' => 204,
                'message' => 'Kuantitas tidak boleh 0.'
            );
            echo json_encode($response, JSON_PRETTY_PRINT);
            die();
        }

        $join = array(
            array(
                'table' => 'ukm_category_product',
                'condition' => 'ukm_category_product.id = ukm_product.ukm_category_product_id',
                'jointype' => 'LEFT'
            )
        );
        
        $productUkm = $this->mcart->fetch_joins('ukm_product','ukm_product.*, ukm_category_product.name AS category_name',$join,'ukm_product.id = "'.$productID.'"',TRUE);

        if (count($productUkm) == 0) {
            $response = array(
                'code' => 204,
                'message' => 'Produk tidak ada'
            );
            echo json_encode($response, JSON_PRETTY_PRINT);
            die();
        }

        if ($qty > $productUkm[0]['stock']) {
            $response = array(
                'code' => 204,
                'message' => 'Kuantitas tidak boleh belebihi stok '. $productUkm[0]['stock'] .'.'
            );
            echo json_encode($response, JSON_PRETTY_PRINT);
            die();
        }

        $data = array(
            'id'      => $productUkm[0]['id'],
            'category'    => $productUkm[0]['category_name'],
            'name'    => $productUkm[0]['name'],
            'qty'     => $qty,
            'image'     => base_url().'files/product/'.$productUkm[0]['image'],
            'price'   => $productUkm[0]['is_diskon'] == 1 ? $productUkm[0]['final_price'] : $productUkm[0]['price']
        );
        
        $this->cart->insert($data);

        $response = array(
            'code' => 200,
            'message' => 'Produk ditambahkan',
            'data' => array(
                'cart' => $this->cart->contents(),
                'totalCart' => $this->cart->total_items()
            )
        );

        echo json_encode($response, JSON_PRETTY_PRINT);
    }

    public function processClear(){
        $this->cart->destroy();
        $response = array(
            'code' => 200,
            'message' => 'Cart berhasil dikosongkan.',
            'base_url' => site_url('shops')
        );

        echo json_encode($response, JSON_PRETTY_PRINT);
    }

    public function processDeleteCart() {
        $rowid = $this->input->post('rowid'); 
        $data = array(
            'rowid'   => $rowid,
            'qty'     => 0
        );

        $this->cart->update($data);
        $response = array(
            'code' => 200,
            'message' => 'Produk berhasil dihapus.'
        );

        echo json_encode($response, JSON_PRETTY_PRINT);
    }

    public function getAllCart(){
        $response = array(
            'code' => 200,
            'message' => 'Cart berhasil diambil',
            'data' => array(
                'cart' => $this->cart->contents(),
                'totalAmount' => $this->cart->total(),
                'totalCart' => $this->cart->total_items()
            )
        );

        echo json_encode($response, JSON_PRETTY_PRINT);
    }

    function proccessUpdate(){
        $arrayResponse = array();
		foreach ($_POST['rowID'] as $key => $val) {
            $ukmProduct = $this->mcart->fetch_table('*','ukm_product','id = "'.$_POST['productID'][$key].'"','','','','',TRUE);
            if ($ukmProduct[0]['stock'] >= $_POST['qty'][$key]) {
               $data = array(
                'rowid' => $_POST['rowID'][$key],
                'qty'   => $_POST['qty'][$key]
                );
                
                $this->cart->update($data);
                $response = array(
                    'message' => 'Produk '. $ukmProduct[0]['name'] .' berhasil diupdate.'
                );
            }else{
                $response = array(
                    'message' => 'Produk '. $ukmProduct[0]['name'] .' Stok tidak mencukupi, sisa stok '. $ukmProduct[0]['stock'] .'.'
                );
            }

            array_push($arrayResponse, $response);
        }

        $response = array(
            'code' => 200,
            'message' => $arrayResponse,
            'data' => array(
                'cart' => $this->cart->contents(),
                'totalAmount' => $this->cart->total(),
                'totalCart' => $this->cart->total_items(),
            )
        );

        echo json_encode($response, JSON_PRETTY_PRINT);
    }

    public function proccessGetCoupon(){
        $response = array(
            'code' => 200,
            'message' => 'Maaf coupon belum tersedia saat ini.'
        );

        echo json_encode($response, JSON_PRETTY_PRINT);
    }
}