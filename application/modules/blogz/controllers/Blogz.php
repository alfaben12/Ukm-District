<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Blogz extends MX_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('blog');
	}
	
	public function index(){
		$this->template->write_view('index');
    }
}