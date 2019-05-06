<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Paymentz extends MX_Controller {
	public $flag = true;
    public $_version = '';

	public function __construct() {
		parent::__construct();
        $this->load->model('payment');

        if ($this->flag) {
			$this->_version = '_v2.php';
		}else{
			$this->_version = '';
		}
	}
	
	public function index(){
		$join = array(
            array(
                'table' => 'ukm_order',
                'condition' => 'ukm_order_payment.order_id = ukm_order.id',
                'jointype' => ''
            )
        );

        $data['payment'] = $this->payment->fetch_joins('ukm_order_payment','ukm_order_payment.*, ukm_order.invoice, ukm_order.status AS status_order, ukm_order.city AS destination',$join,'',TRUE);
		$this->template->write_view('index'. $this->_version, $data);
	}

	public function kurir(){
		$join = array(
            array(
                'table' => 'ukm_order',
                'condition' => 'ukm_order.id = ukm_shipping_payment.order_id',
                'jointype' => ''
			),
			array(
                'table' => 'ukm_order_payment',
                'condition' => 'ukm_order_payment.id = ukm_shipping_payment.order_payment_id',
                'jointype' => ''
			),
			array(
                'table' => 'ukm_pos_indonesia',
                'condition' => 'ukm_pos_indonesia.id = ukm_shipping_payment.pos_indonesia_id',
                'jointype' => ''
            ),
			array(
                'table' => 'ukm_region',
                'condition' => 'ukm_region.id = ukm_pos_indonesia.region_id',
                'jointype' => ''
            )
        );

        $data['payment'] = $this->payment->fetch_joins('ukm_shipping_payment','ukm_shipping_payment.*, ukm_order.invoice, ukm_order_payment.status AS payment_status, ukm_pos_indonesia.name AS kurir_name, ukm_region.name AS region_name',$join,'',TRUE);
		$this->template->write_view('kurir'. $this->_version, $data);
	}
	
	function processChangeStatus(){
		$this->form_validation->set_rules('payment_status', 'Status Pembayaran',  'trim|required');
		$this->form_validation->set_rules('payment_id', 'Pembayaran',  'trim|required');
		if ($this->input->post('payment_status') == 'TERBAYAR') {
			$this->form_validation->set_rules('kurir_id', 'Kurir', 'trim|required');
		}

		if($this->form_validation->run() == FALSE){
			$form_error = $this->form_validation->error_array();
			$response =  array(
				'result' => FALSE,
				'message' => 'Gagal',
				'error' => $form_error
			);
			echo json_encode($response, JSON_PRETTY_PRINT);
			die();
		}

		$this->db->trans_start();
		$payment_id = $this->input->post('payment_id');
		$kurir_id = $this->input->post('kurir_id');
		$payment_status = $this->input->post('payment_status');
		$data_payment = $this->payment->fetch_table('*','ukm_order_payment','id = '.$payment_id,'','','','',TRUE);
		$data_order = $this->payment->fetch_table('*','ukm_order','id = '.$data_payment[0]['order_id'],'','','','',TRUE);
		
		$value_payment = array(
			'status' => $payment_status
		);
		$this->payment->update_table('ukm_order_payment', $value_payment, 'id', $payment_id);

		if ($payment_status == 'TERBAYAR') {
			$value_payment_kurir = array(
				'order_payment_id' => $payment_id,
				'order_id' => $data_payment[0]['order_id'],
				'pos_indonesia_id' => $kurir_id,
				'dropoff_region' => strtoupper($data_order[0]['city']),
				'price' => $data_order[0]['price_shipping']
			);
	
			$this->payment->insert_table('ukm_shipping_payment', $value_payment_kurir);
		}else{
			$this->payment->delete_table("ukm_shipping_payment","order_payment_id", $payment_id);
		}

		$this->db->trans_complete();

		$response =  array(
			'code' => 200,
			'message' => 'Berhasil diupdate',
			'redirect' => ''
		);
		echo json_encode($response, JSON_PRETTY_PRINT);
		die();
	}

	function getDataChangeStatus(){
		$payment_id = $this->input->get('id');
		$data['payment'] = $this->payment->fetch_table('*','ukm_order_payment','id = '.$payment_id,'','','','',TRUE);
		$data['order'] = $this->payment->fetch_table('*','ukm_order','id = '.$data['payment'][0]['order_id'],'','','','',TRUE);
		$join = array(
            array(
                'table' => 'ukm_region',
                'condition' => 'ukm_region.id = ukm_pos_indonesia.region_id',
                'jointype' => ''
            )
        );

        $data['kurir'] = $this->payment->fetch_joins('ukm_pos_indonesia','ukm_pos_indonesia.*, ukm_region.name AS region_name',$join,'',TRUE);
		$response =  array(
			'code' => 200,
			'message' => 'Berhasil ambil data',
			'redirect' => '',
			'data' => $data
		);
		echo json_encode($response, JSON_PRETTY_PRINT);
		die();
	}

    function processDelete(){
		$this->payment->delete_table("ukm_order_payment","id", $this->input->get('id'));
		redirect('paymentz');
	}
}