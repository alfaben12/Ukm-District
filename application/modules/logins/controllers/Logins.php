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
	
	public function register(){
		$data['region'] = $this->login->fetch_table('*','ukm_region','','name','asc','','',TRUE);
		$this->template->write_view('register'. $this->_version, $data);
	}

	public function processLogin(){
		$this->form_validation->set_rules('username', 'Username',  'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

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

			$login = $this->db->get_where('ukm_member', $dataarr);
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

	function processRegister(){
		$this->form_validation->set_rules('fullname', 'Nama Lengkap', 'trim|required|xss_clean');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('region_id', 'Area', 'trim|required|xss_clean');
		$this->form_validation->set_rules('phone', 'No WhatsApp', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

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

		$dataarr = array(
			'username' => $this->input->post('username'),
			'role_id' => 2
		);

		$register = $this->db->get_where('ukm_member', $dataarr);
		if($register->num_rows() > 0){
			$response =  array(
				'code' => 401,
				'message' => 'Username tidak tersedia.'
			);
			echo json_encode($response, JSON_PRETTY_PRINT);
			die();
		}

		$value = array(
			'full_name' => $this->input->post('fullname'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'region_id' => $this->input->post('region_id'),
			'phone' => $this->input->post('phone'),
			'password' => $this->input->post('password'),
			'role_id' => 2
		);

		$this->login->insert_table('ukm_member', $value);

		$response =  array(
			'code' => 201,
			'message' => 'Berhasil daftar, silakan login.',
			'redirect' => site_url('logins')
		);
		echo json_encode($response, JSON_PRETTY_PRINT);
		die();
	}

	function tes(){
		echo 'sd';
	}
}
?>