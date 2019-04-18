<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Carts extends MX_Controller {
	public function __construct() {
		parent::__construct();
        $this->load->model('mcart');
	}
	
	public function index(){
		$this->template->write_view('index');
    }

    public function proccessAdd(){
        $productID = $this->input->get('productID');
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

        $data = array(
            'id'      => $productUkm[0]['id'],
            'category'    => $productUkm[0]['category_name'],
            'name'    => $productUkm[0]['name'],
            'qty'     => 1,
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
    }

    public function getAllCart(){
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
    
}