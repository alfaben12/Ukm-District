<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Productz extends MX_Controller {
	public $flag = true;
    public $_version = '';

	public function __construct() {
		parent::__construct();
        $this->load->model('product');

        if ($this->flag) {
			$this->_version = '_v2.php';
		}else{
			$this->_version = '';
		}
	}
	
	public function index(){
		if (getMemberInfo($this->session->userdata('id'))->role_id == 1) {
			$data['productUkm'] = $this->product->fetch_table('*','ukm_product','','id','desc','','',TRUE);
		}else{
			$data['productUkm'] = $this->product->fetch_table('*','ukm_product','member_id = '. $this->session->userdata('id'),'id','desc','','',TRUE);
		}

		$this->template->write_view('index'. $this->_version, $data);
	}

	function add(){
		$data['region'] = $this->product->fetch_table('*','ukm_region','','name','asc','','',TRUE);
		$data['category'] = $this->product->fetch_table('*','ukm_category_product','','name','asc','','',TRUE);
		$this->template->write_view('add'. $this->_version, $data);
	}

	function proccessAdd(){
		$this->form_validation->set_rules('name', 'Nama', 'trim|required|xss_clean');
		$this->form_validation->set_rules('ukm_category_product_id', 'Kategori', 'trim|required|xss_clean');
		$this->form_validation->set_rules('price', 'Harga', 'trim|required|xss_clean');
		$this->form_validation->set_rules('stock', 'Stok', 'trim|required|xss_clean');
		$this->form_validation->set_rules('ukm_region_id', 'Area', 'trim|required|xss_clean');
		$this->form_validation->set_rules('description', 'Description', 'trim|required|xss_clean');
		
		if($this->form_validation->run() == FALSE){
			$form_error = $this->form_validation->error_array();
			$response =  array(
				'code' => 401,
				'message' => 'Form tidak lengkap',
				'error' => $form_error,
			);
			echo json_encode($response, JSON_PRETTY_PRINT);
			die();
		}
		
		if (isset($_FILES['file']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
			/*-------------setting attachment upload -------------*/
			$config['upload_path'] = './files/product/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = 1024 * 8;
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file')){
				$data['file_name'] = null;
				$json_data =  array(
					"result" => 401 ,
					"message" => array('Gambar harus ada.'),
					"form_error" => 'gambar'
				);
				print json_encode($json_data);
				die();
			}else{
				$data = $this->upload->data();
			}
		}else{
			$data['file_name'] = null;
		}

		if($data['file_name'] == null){
			$response =  array(
				'code' => 401,
				'message' => 'Gambar harus ada',
			);
			echo json_encode($response, JSON_PRETTY_PRINT);
			die();
		}

		$value = array(
			'image' => $data['file_name'],
			'ukm_id' => 1,
			'member_id' => $this->session->userdata('id'),
			'name' => $this->input->post('name'),
			'ukm_category_product_id' => $this->input->post('ukm_category_product_id'),
			'price' => $this->input->post('price'),
			'stock' => $this->input->post('stock'),
			'sold_count' => $this->input->post('sold_count'),
			'is_diskon' => 0,
			'final_price' => 0,
			'description' => $this->input->post('description'),
			'region_id' => $this->input->post('ukm_region_id'),
			'rating' => $this->input->post('rating')
		);

		$this->product->insert_table('ukm_product', $value);

		$response =  array(
			'code' => 201,
			'message' => 'Berhasil ditambahkan',
			'redirect' => site_url('productz')
		);
		echo json_encode($response, JSON_PRETTY_PRINT);
		die();
	}

	function modify(){
		$id = $this->input->get('id');
		$data['region'] = $this->product->fetch_table('*','ukm_region','','name','asc','','',TRUE);
		$data['category'] = $this->product->fetch_table('*','ukm_category_product','','name','asc','','',TRUE);
		$data['productUkm'] = $this->product->fetch_table('*','ukm_product','id = '. $id,'id','desc','','',TRUE);
		
		$this->template->write_view('modify'. $this->_version, $data);
	}

	function processModify(){
		$this->form_validation->set_rules('name', 'Nama', 'trim|required|xss_clean');
		$this->form_validation->set_rules('ukm_category_product_id', 'Kategori', 'trim|required|xss_clean');
		$this->form_validation->set_rules('price', 'Harga', 'trim|required|xss_clean');
		$this->form_validation->set_rules('stock', 'Stok', 'trim|required|xss_clean');
		$this->form_validation->set_rules('ukm_region_id', 'Area', 'trim|required|xss_clean');
		$this->form_validation->set_rules('description', 'Description', 'trim|required|xss_clean');
		
		if($this->form_validation->run() == FALSE){
			$form_error = $this->form_validation->error_array();
			$response =  array(
				'code' => 401,
				'message' => 'Form tidak lengkap',
				'error' => $form_error,
			);
			echo json_encode($response, JSON_PRETTY_PRINT);
			die();
		}

		$id = $this->input->get('id');

		$value = array(
			'ukm_id' => 1,
			'name' => $this->input->post('name'),
			'ukm_category_product_id' => $this->input->post('ukm_category_product_id'),
			'price' => $this->input->post('price'),
			'stock' => $this->input->post('stock'),
			'sold_count' => $this->input->post('sold_count'),
			'is_diskon' => 0,
			'final_price' => 0,
			'description' => $this->input->post('description'),
			'region_id' => $this->input->post('ukm_region_id'),
			'rating' => $this->input->post('rating')
		);

		$this->product->update_table('ukm_product', $value, 'id', $id);
		
		$response =  array(
			'code' => 200,
			'message' => 'Berhasil diupdate',
			'redirect' => site_url('productz')
		);
		echo json_encode($response, JSON_PRETTY_PRINT);
		die();
	}

	function processDelete(){
		$this->product->delete_table("ukm_product","id", $this->input->get('id'));
		redirect('productz');
	}

	function modifyCategory(){
		$id = $this->input->get('id');
		$data['category'] = $this->product->fetch_table('*','ukm_category_product','id = '. $id,'id','desc','','',TRUE);
		$this->template->write_view('modify_category', $data);
	}

	function processModifyCategory(){
		$this->form_validation->set_rules('name', 'name is required', 'trim|required|xss_clean');
		
		if($this->form_validation->run() == FALSE){
			$form_error = $this->form_validation->error_array();
			$response =  array(
				'code' => 401,
				'message' => 'Form tidak lengkap',
				'error' => $form_error,
			);
			echo json_encode($response, JSON_PRETTY_PRINT);
			die();
		}

		$id = $this->input->get('id');

		$value = array(
			'name' => $this->input->post('name'),
		);

		$this->product->update_table('ukm_category_product', $value, 'id', $id);
		
		$response =  array(
			'code' => 200,
			'message' => 'Berhasil diupdate',
			'redirect' => site_url('productz/category')
		);
		echo json_encode($response, JSON_PRETTY_PRINT);
		die();
	}
}