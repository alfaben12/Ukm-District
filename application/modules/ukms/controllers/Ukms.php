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

}
?>