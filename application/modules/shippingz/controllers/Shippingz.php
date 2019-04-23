<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Shippingz extends MX_Controller {
	public $flag = true;
    public $_version = '';

	public function __construct() {
		parent::__construct();
        $this->load->model('shipping');

        if ($this->flag) {
			$this->_version = '_v2.php';
		}else{
			$this->_version = '';
		}
	}
	
	public function index(){
        $join = array(
            array(
                'table' => 'ukm_shipping_method',
                'condition' => 'ukm_shipping_method.id = ukm_shipping_region.shipping_method_id',
                'jointype' => 'LEFT'
            )
        );
        
        $data['data']= $this->shipping->fetch_joins('ukm_shipping_region','ukm_shipping_region.*, ukm_shipping_method.name AS method_name',$join,'',TRUE);

		$this->template->write_view('route_index'. $this->_version, $data);
	}

	function add(){
		$data['method'] = $this->shipping->fetch_table('*','ukm_shipping_method','','name','asc','','',TRUE);
		$this->template->write_view('route_add'. $this->_version, $data);
	}

	function proccessAdd(){
		$this->form_validation->set_rules('method_id', 'Jenis is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('name', 'Tujuan is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('price', 'Harga HP is required', 'trim|required|xss_clean');
		
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
			'shipping_method_id' => $this->input->post('method_id'),
			'name' => strtoupper($this->input->post('name')),
			'price' => $this->input->post('price')
		);

		$this->shipping->insert_table('ukm_shipping_region', $value);

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
		$data['method'] = $this->shipping->fetch_table('*','ukm_shipping_method','','name','asc','','',TRUE);
		$data['route'] = $this->shipping->fetch_table('*','ukm_shipping_region','id = '. $id, 'id','desc','','',TRUE);
		$this->template->write_view('route_modify'. $this->_version, $data);
	}

	function processModify(){
		$this->form_validation->set_rules('method_id', 'Jenis is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('name', 'Tujuan is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('price', 'Harga HP is required', 'trim|required|xss_clean');
		
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
			'shipping_method_id' => $this->input->post('method_id'),
			'name' => strtoupper($this->input->post('name')),
			'price' => $this->input->post('price')
		);

		$this->shipping->update_table('ukm_shipping_region', $value, 'id', $id);
		
		$response =  array(
			'code' => 200,
			'message' => 'Berhasil diupdate',
			'redirect' => site_url($this->uri->segment(1))
		);
		echo json_encode($response, JSON_PRETTY_PRINT);
		die();
	}

	function processDelete(){
		$this->shipping->delete_table("ukm_pos_indonesia","id", $this->input->get('id'));
		redirect('kurirz');
	}
}