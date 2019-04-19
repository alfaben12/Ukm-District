<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Confirmations extends MX_Controller {
	public function __construct() {
		parent::__construct();
        $this->load->model('confirmation');
	}
	
	public function index(){
        if($this->cart->total() > 0){
            $this->template->write_view('index');
        }else{
            redirect(site_url('shops'));
        }
    }

    public function getPayment(){
        $data['payment'] = $this->confirmation->fetch_table('*','ukm_payment','','','','','',TRUE);
        $response = array(
            'code' => 200,
            'message' => 'Payment ditemukan',
            'data' => array(
                'payment' => $data['payment']
            )
        );
        echo json_encode($response, JSON_PRETTY_PRINT);
        die();
    }

    public function processCheckOut(){
        $this->form_validation->set_rules('firstName', 'Nama Depan is required',  'trim|required');
		$this->form_validation->set_rules('lastName', 'Nama Belakang is required', 'trim|required');
		$this->form_validation->set_rules('phoneNumber', 'No WA is required', 'trim|required');
		$this->form_validation->set_rules('email', 'Email is required', 'trim|required');
		$this->form_validation->set_rules('address', 'Alamat is required', 'trim|required');
		$this->form_validation->set_rules('city', 'Kota/Kabupaten is required', 'trim|required');
		$this->form_validation->set_rules('district', 'Desa is required', 'trim|required');
		$this->form_validation->set_rules('paymentID', 'Pembayaran is required', 'trim|required');

		if($this->form_validation->run() == FALSE){
			$form_error = $this->form_validation->error_array();
			$response =  array(
				'result' => FALSE,
				'message' => 'Formulir tidak lengkap.',
				'error' => $form_error,
			);
			echo json_encode($response, JSON_PRETTY_PRINT);
			die();
		}
    }
}