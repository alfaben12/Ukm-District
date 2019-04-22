<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Logins extends MX_Controller {
	public $flag = true;
    public $_version = '';

	public function __construct() {
		parent::__construct();
        $this->load->model('login');

        if ($this->flag) {
			$this->_version = '_v2.php';
		}else{
			$this->_version = '';
		}
	}
	
	public function index(){
		$this->template->write_view('index'. $this->_version);
	}

	public function processLogin(){
		$this->form_validation->set_rules('username', 'Username is required',  'trim|required');
		$this->form_validation->set_rules('password', 'Password is required', 'trim|required');

		if($this->form_validation->run() == FALSE){
			$form_error = $this->form_validation->error_array();
			$response =  array(
				'result' => FALSE,
				'message' => 'Gagal',
				'error' => $form_error,
			);
			echo json_encode($response, JSON_PRETTY_PRINT);
			die();
		}else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$dataarr = array(
				'username' => $username,
				'password' => $password
			);

			$login = $this->db->get_where('admin', $dataarr);
			if($login->num_rows() > 0){
					$sess = $login->row_array();
					$data = array(
						'id' => $sess['id']
					);

					$this->session->set_userdata($data);

					$response =  array(
						'code' => 200,
						'message' => 'Data valid, akses diberikan.',
						'redirect' => site_url('productz')
					);
					echo json_encode($response, JSON_PRETTY_PRINT);
					die();
			}else{
				$response =  array(
					'code' => 401,
					'message' => 'Data tidak valid.'
				);
				echo json_encode($response, JSON_PRETTY_PRINT);
				die();
			}
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('logins'));
	}
}
?>