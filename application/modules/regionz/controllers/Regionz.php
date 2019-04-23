<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Regionz extends MX_Controller {
	public $flag = true;
    public $_version = '';

	public function __construct() {
		parent::__construct();
        $this->load->model('region');

        if ($this->flag) {
			$this->_version = '_v2.php';
		}else{
			$this->_version = '';
		}
	}
	
	public function index(){
		$data['region'] = $this->region->fetch_table('*','ukm_region','', 'name','asc','','',TRUE);

		$this->template->write_view('index'. $this->_version, $data);
	}

	function add(){
		$data['region'] = $this->region->fetch_table('*','ukm_region','','name','asc','','',TRUE);
		$this->template->write_view('add'. $this->_version, $data);
	}

	function proccessAdd(){
		$this->form_validation->set_rules('name', 'Nama is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('city', 'Kota atau kabupaten HP is required', 'trim|required|xss_clean');
		
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
        
		$check = $this->region->fetch_table('*','ukm_region','name = "'. $this->input->post('name') .'" and city = "'. $this->input->post('city') .'"', 'id','desc','','',TRUE);
        if(count($check) > 0){
			$response =  array(
				'code' => 401,
				'message' => 'Data sudah ada',
			);
			echo json_encode($response, JSON_PRETTY_PRINT);
			die();
		}

        $value = array(
			'name' => $this->input->post('name'),
			'city' => strtoupper($this->input->post('city'))
		);

		$this->region->insert_table('ukm_region', $value);

		$response =  array(
			'code' => 200,
			'message' => 'Berhasil ditambahkan',
			'redirect' => site_url($this->uri->segment(1))
		);
		echo json_encode($response, JSON_PRETTY_PRINT);
		die();
	}

	function modify(){
		$id = $this->input->get('id');
		$data['region'] = $this->region->fetch_table('*','ukm_region','id = '. $id, 'id','desc','','',TRUE);
		$this->template->write_view('modify'. $this->_version, $data);
	}

	function processModify(){
		$this->form_validation->set_rules('name', 'Nama is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('city', 'Kota atau kabupaten HP is required', 'trim|required|xss_clean');
		
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
        
		$check = $this->region->fetch_table('*','ukm_region','name = "'. $this->input->post('name') .'" and city = "'. $this->input->post('city') .'"', 'id','desc','','',TRUE);
        if(count($check) > 0){
			$response =  array(
				'code' => 401,
				'message' => 'Data sudah ada',
			);
			echo json_encode($response, JSON_PRETTY_PRINT);
			die();
		}

		$id = $this->input->get('id');

        $value = array(
			'name' => $this->input->post('name'),
			'city' => strtoupper($this->input->post('city'))
		);
        
		$this->region->update_table('ukm_region', $value, 'id', $id);
		
		$response =  array(
			'code' => 200,
			'message' => 'Berhasil diupdate',
			'redirect' => site_url($this->uri->segment(1))
		);
		echo json_encode($response, JSON_PRETTY_PRINT);
		die();
	}

	function processDelete(){
		$this->region->delete_table("ukm_region","id", $this->input->get('id'));
		redirect($this->uri->segment(1));
	}
}