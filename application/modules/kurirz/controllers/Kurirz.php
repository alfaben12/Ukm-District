<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Kurirz extends MX_Controller {
	public $flag = true;
    public $_version = '';

	public function __construct() {
		parent::__construct();
        $this->load->model('kurir');

        if ($this->flag) {
			$this->_version = '_v2.php';
		}else{
			$this->_version = '';
		}
	}
	
	public function index(){
        $join = array(
            array(
                'table' => 'ukm_region',
                'condition' => 'ukm_region.id = ukm_pos_indonesia.region_id',
                'jointype' => 'LEFT'
            )
        );
        
        $data['kurir']= $this->kurir->fetch_joins('ukm_pos_indonesia','ukm_pos_indonesia.*, ukm_region.name AS reg_name',$join,'',TRUE);

		$this->template->write_view('index'. $this->_version, $data);
	}

	function add(){
		$data['region'] = $this->kurir->fetch_table('*','ukm_region','','name','asc','','',TRUE);
		$this->template->write_view('add'. $this->_version, $data);
	}

	function proccessAdd(){
		$this->form_validation->set_rules('region_id', 'Area is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('name', 'Nama is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('phone', 'Nomor HP is required', 'trim|required|xss_clean');
		
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
		
		$value = array(
			'region_id' => $this->input->post('region_id'),
			'name' => $this->input->post('name'),
			'phone' => $this->input->post('phone')
		);

		$this->kurir->insert_table('ukm_pos_indonesia', $value);

		$response =  array(
			'code' => 200,
			'message' => 'Berhasil ditambahkan',
			'redirect' => site_url('kurirz')
		);
		echo json_encode($response, JSON_PRETTY_PRINT);
		die();
	}

	function modify(){
		$id = $this->input->get('id');
		$data['region'] = $this->kurir->fetch_table('*','ukm_region','','name','asc','','',TRUE);
		$data['kurir'] = $this->kurir->fetch_table('*','ukm_pos_indonesia','id = '. $id, 'id','desc','','',TRUE);
		$this->template->write_view('modify'. $this->_version, $data);
	}

	function processModify(){
		$this->form_validation->set_rules('region_id', 'Area is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('name', 'Nama is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('phone', 'Nomor HP is required', 'trim|required|xss_clean');
		
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
			'region_id' => $this->input->post('region_id'),
			'name' => $this->input->post('name'),
			'phone' => $this->input->post('phone')
		);

		$this->kurir->update_table('ukm_pos_indonesia', $value, 'id', $id);
		
		$response =  array(
			'code' => 200,
			'message' => 'Berhasil diupdate',
			'redirect' => site_url('kurirz')
		);
		echo json_encode($response, JSON_PRETTY_PRINT);
		die();
	}

	function processDelete(){
		$this->kurir->delete_table("ukm_pos_indonesia","id", $this->input->get('id'));
		redirect('kurirz');
	}
}