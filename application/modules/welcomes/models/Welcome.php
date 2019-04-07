<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Model{

	private $last_login_browser;
	private $last_login_ip;
	private $last_login_os;
	private $last_login_at;
	private $last_update_at;

	function getLastLoginBrowser(){return $this->last_login_browser;}
	function setLastLoginBrowser($last_login_browser){$this->last_login_browser = $last_login_browser;}
	function getLastLoginIP(){return $this->last_login_ip;}
	function setLastLoginIP($last_login_ip){$this->last_login_ip = $last_login_ip;}
	function getLastLoginOS(){return $this->last_login_os;}
	function setLastLoginOS($last_login_os){$this->last_login_os = $last_login_os;}
}