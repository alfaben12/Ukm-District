<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Shops extends MX_Controller {
    public function __construct() {
		parent::__construct();
		$this->load->model('shop');
    }
    
	public function index(){
		$this->template->write_view('index');
    }

    public function getCategoryProduct(){
        $productCategory = $this->shop->fetch_table('*','ukm_category_product','','','','','',TRUE);
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
        $rowperpage = 9;
    
        // Row position
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        }
     
        // All records count
        $allcount = $this->shop->getRecordCount($category_id,$price_from,$price_to);

        // Get records
        $users_record = $this->shop->getData($rowno,$rowperpage,$category_id,$price_from,$price_to);
     
        // Pagination Configuration
        $config['next_tag_open'] = '<li class="next-arrow">';
        $config['next_link'] = '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="next-arrow">';
        $config['prev_link'] = '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<a href="" class="active">';
        $config['cur_tag_close'] = '</a>';
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
}