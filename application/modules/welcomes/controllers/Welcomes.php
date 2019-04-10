<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Welcomes extends MX_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('welcome');
	}
	public function index(){
		$data['ukm'] = $this->welcome->fetch_table('*','ukm','id = 1','id','desc','','',TRUE);

		redirect('ukms/ukmDetailProfile?ukmName='. $data['ukm'][0]['name']);
	}

}
?>