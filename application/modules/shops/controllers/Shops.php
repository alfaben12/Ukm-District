<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Shops extends MX_Controller {

    public $flag = true;
    public $_version = '';
    
    public function __construct() {
		parent::__construct();
        $this->load->model('shop');
        
        if ($this->flag) {
			$this->_version = '_v2.php';
		}else{
			$this->_version = '';
		}
    }
    
	public function index(){
		$this->template->write_view('index'. $this->_version);
    }

    public function getRenderedContent(){
        $productCategory = $this->shop->fetch_table('*','ukm_category_product','','','','','',TRUE);
        $productUkm = $this->shop->fetch_table('*','ukm_product','','sold_count','desc','',6,TRUE);

        if (count($productCategory) == 0) {
            $response = array(
                'code' => 204,
                'message' => 'Kategori tidak ada'
            );
            echo json_encode($response, JSON_PRETTY_PRINT);
            die();
        }

        $response = array(
            'code' => 200,
            'message' => 'Kategori ditemukan',
            'data' => array(
                'category' => $productCategory,
                'product' => $productUkm
            )
        );
        echo json_encode($response, JSON_PRETTY_PRINT);
        die();
    }

    public function getUkmDataProduct(){
        $rowno = $this->input->get('pageno');
        if (count($this->input->get('ukm_category_product_id')) == 0 || $this->input->get('ukm_category_product_id') == 1) {
            $category_id = '';
        }else{
            $category_id = $this->input->get('ukm_category_product_id');
        }
        $price_from = $this->input->get('price_from');
        $price_to = $this->input->get('price_to');

        // Row per page
        $rowperpage = 12;
    
        // Row position
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        }
     
        // All records count
        $allcount = $this->shop->getRecordCount($category_id,$price_from,$price_to);

        // Get records
        $users_record = $this->shop->getData($rowno,$rowperpage,$category_id,$price_from,$price_to);
     
        // Pagination Configuration
        $config['next_link'] = 'Berikutnya';
        $config['prev_link'] = 'Sebelumnya';
        $config['base_url'] = base_url().'shops/getUkmDataProduct';
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;
    
        // Initialize
        $this->pagination->initialize($config);
    
        // Initialize $data Array
        $data['pagination'] = $this->pagination->create_links();
        $data['result'] = $users_record;
        $data['row'] = $rowno;
        if ($allcount == 0) {
            $response = array(
                'code' => 204,
                'message' => 'Product tidak ada'
            );
            echo json_encode($response, JSON_PRETTY_PRINT);
            die();
        }

        $response = array(
            'code' => 200,
            'message' => 'Product ditemukan',
            'data' => array(
                'product' => $data,
            )
        );
        echo json_encode($response, JSON_PRETTY_PRINT);
        die();
    }

    public function showProduct(){
        $productName = $this->input->get('productName');

        $data['product'] = $this->shop->fetch_table('*','ukm_product','name = "'.$productName.'"','','','','',TRUE);
		$this->template->write_view('detail'. $this->_version, $data);
    }

    public function getUkmDataDetailProduk(){
        $productName = $this->input->get('productName');

        $join = array(
                array(
                    'table' => 'ukm_category_product',
                    'condition' => 'ukm_category_product.id = ukm_product.ukm_category_product_id',
                    'jointype' => 'LEFT'
                ),
                array(
                    'table' => 'ukm_region',
                    'condition' => 'ukm_region.id = ukm_product.region_id',
                    'jointype' => 'LEFT'
                )
            );

		$product = $this->shop->fetch_joins('ukm_product','ukm_product.*, ukm_category_product.name AS category_name, ukm_region.name AS region_name',$join,'ukm_product.name = "'.$productName.'"',TRUE);

        if (count($product) == 0) {
            $response = array(
                'code' => 204,
                'message' => 'Produk tidak ada'
            );
            echo json_encode($response, JSON_PRETTY_PRINT);
            die();
        }

        $value = array(
            'views' => $product[0]['views'] + 1
        );
        $update = $this->shop->update_table('ukm_product', $value, 'id', $product[0]['id']);

        $response = array(
            'code' => 200,
            'message' => 'Produk ditemukan',
            'data' => array(
                'product' => $product
            )
        );
        echo json_encode($response, JSON_PRETTY_PRINT);
        die();
    }
}