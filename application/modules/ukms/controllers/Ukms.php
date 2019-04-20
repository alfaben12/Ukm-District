<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Ukms extends MX_Controller {
    public function __construct() {
		parent::__construct();
		$this->load->model('ukm');
    }
    
	public function index(){
		$this->template->write_view('index');
    }
    
    public function ukmDetailProfile(){
		$this->template->write_view('detail');
    }
    
    public function getUkmDataDetailProfile(){
        $ukmName = $this->input->get('ukmName');

        $profileUkm = $this->ukm->fetch_table('*','ukm','name = "'.$ukmName.'"','','','','',TRUE);
        if (count($profileUkm) == 0) {
            $response = array(
                'code' => 204,
                'message' => 'Ukm tidak ada'
            );
            echo json_encode($response, JSON_PRETTY_PRINT);
            die();
        }

        $value = array(
            'views' => $profileUkm[0]['views'] + 1
        );
        $update = $this->ukm->update_table('ukm', $value, 'id', $profileUkm[0]['id']);

        $productUkm = $this->ukm->fetch_table('*','ukm_product','ukm_id = "'.$profileUkm[0]['id'].'"','sold_count','desc','',5,TRUE);
        $commentUkm = $this->ukm->fetch_table('*','ukm_comment','ukm_id = "'.$profileUkm[0]['id'].'"','','','','',TRUE);

        $response = array(
            'code' => 200,
            'message' => 'Ukm ditemukan',
            'data' => array(
                'profile' => $profileUkm,
                'product' => $productUkm,
                'comment' => $commentUkm,
            )
        );
        echo json_encode($response, JSON_PRETTY_PRINT);
        die();
    }

    function processAddComent(){
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
        $profileUkm = $this->ukm->fetch_table('*','ukm','name = "'.$ukmName.'"','','','','',TRUE);

        $value = array(
            'ukm_id' => $profileUkm[0]['id'],
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'subject' => $this->input->post('subject'),
            'message' => $this->input->post('message')
        );

        $this->ukm->insert_table('ukm_comment', $value);

        $response = array(
            'code' => 200,
            'message' => 'Komen ditambahkan',
        );
        echo json_encode($response, JSON_PRETTY_PRINT);
        die();
    }

}
?>