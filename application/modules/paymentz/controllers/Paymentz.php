<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Paymentz extends MX_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('payment');
	}
	
	public function index(){
		$join = array(
            array(
                'table' => 'ukm_order',
                'condition' => 'ukm_order_payment.order_id = ukm_order.id',
                'jointype' => 'LEFT'
            )
        );

        $data['payment'] = $this->payment->fetch_joins('ukm_order_payment','ukm_order_payment.*, ukm_order.invoice, ukm_order.status',$join,'',TRUE);
		$this->template->write_view('index', $data);
	}
	
	function processChangeStatus(){
		$id = $this->input->get('id');
		$status = $this->input->get('status');
		if ($status == 'MENUNGGU') {
			$status = 'KONFIRMASI';
		}else{
			$status = 'MENUNGGU';
		}

		$value = array(
			'status' => $status
		);

		$this->payment->update_table('ukm_order', $value, 'id', $id);
		redirect('paymentz');
	}

    function processDelete(){
		$this->payment->delete_table("ukm_order_payment","id", $this->input->get('id'));
		redirect('paymentz');
	}
}