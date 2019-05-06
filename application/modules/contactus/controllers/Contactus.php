<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Contactus extends MX_Controller {

	public $flag = true;
    public $_version = '';

	public function __construct() {
		parent::__construct();
        $this->load->model('contactus_s');

        if ($this->flag) {
			$this->_version = '_v2.php';
		}else{
			$this->_version = '';
		}
	}

	public function index(){
		$this->template->write_view('index'. $this->_version);
    }
    
    public function maps(){
		$this->load->view('maps');
    }
    
    function processSend(){
        $this->form_validation->set_rules('name', 'Nama is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email Date is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('subject', 'Subject Date is required', 'trim|required|xss_clean');
		$this->form_validation->set_rules('message', 'Message Date is required', 'trim|required|xss_clean');

		/* CONDITION FORM STATMENT */
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

        $ukmName = $this->input->post('ukmName');

        $value = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'subject' => $this->input->post('subject'),
            'message' => $this->input->post('message')
        );

        $this->contactus_s->insert_table('ukm_contact', $value);

        $response = array(
            'code' => 200,
            'message' => 'Pesan berhasil dikirim',
        );
        echo json_encode($response, JSON_PRETTY_PRINT);
        die();
    }
}
?>