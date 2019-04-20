<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Ukmz extends MX_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('ukm');
	}
	
	public function index(){
			$data['ukm'] = $this->ukm->fetch_table('*','ukm','','id','desc','','',TRUE);

			$this->template->write_view('index', $data);
		}

	function add(){
		echo 'Belum tersedia.';
	}

	function proccessAdd(){
		$this->form_validation->set_rules('name', 'name is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('ukm_category_product_id', 'ukm_category_product_id is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('price', 'price is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('stock', 'stock is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('description', 'description is required', 'trim|required|xss_clean');
		
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
					"message" => array('head'=> 'Failed', 'body'=> $this->upload->display_errors('', '')),
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
			'name' => $this->input->post('name'),
			'ukm_category_product_id' => $this->input->post('ukm_category_product_id'),
			'price' => $this->input->post('price'),
			'stock' => $this->input->post('stock'),
			'sold_count' => $this->input->post('sold_count'),
			'is_diskon' => $this->input->post('is_diskon'),
			'final_price' => $this->input->post('final_price'),
			'description' => $this->input->post('description')
		);

		$this->product->insert_table('ukm_product', $value);

		$response =  array(
			'code' => 200,
			'message' => 'Berhasil ditambahkan',
			'redirect' => site_url('productz')
		);
		echo json_encode($response, JSON_PRETTY_PRINT);
		die();
	}

	function modify(){
		$id = $this->input->get('id');
		$data['ukm'] = $this->ukm->fetch_table('*','ukm','id = '. $id,'id','desc','','',TRUE);
		$this->template->write_view('modify', $data);
	}

	function processModify(){
		$this->form_validation->set_rules('name', 'name is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('founder', 'ukm_category_product_id is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('quotes', 'price is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('description', 'description is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('province','province is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('region','region is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('address','address is required', 'trim|required|xss_clean');
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
			'founder' => $this->input->post('founder'),
			'quotes' => $this->input->post('quotes'),
			'description' => $this->input->post('description'),
			'province' => $this->input->post('province'),
			'region' => $this->input->post('region'),
			'address' => $this->input->post('address')
		);

		$this->ukm->update_table('ukm', $value, 'id', $id);
		
		$response =  array(
			'code' => 200,
			'message' => 'Berhasil diupdate',
			'redirect' => site_url('ukmz')
		);
		echo json_encode($response, JSON_PRETTY_PRINT);
		die();
	}

	function processDelete(){
		if ($this->input->get('id') == 1) {
			redirect('ukmz');
		}else{
			$this->ukm->delete_table("ukm","id", $this->input->get('id'));
			redirect('ukmz');
		}
	}
}