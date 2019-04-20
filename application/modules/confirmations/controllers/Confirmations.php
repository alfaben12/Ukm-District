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
				'code' => 401,
				'message' => 'Formulir tidak lengkap.',
				'error' => $form_error,
			);
			echo json_encode($response, JSON_PRETTY_PRINT);
			die();
        }

        $this->db->trans_start();

        $payment_id = $this->input->post('paymentID');
        $invoice = generateInvoiceNumber();
        $full_name = $this->input->post('firstName') . ' '. $this->input->post('lastName');
        $company = $this->input->post('company');
        $phone_wa = $this->input->post('phoneNumber');
        $email = $this->input->post('email');
        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $district = $this->input->post('district');
        $zip = $this->input->post('zip');
        $note = $this->input->post('note');
        $total = $this->cart->total();
        $total_item = $this->cart->total_items();
        
        $order_data = array(
            'payment_id' => $payment_id,
            'invoice' => $invoice,
            'full_name' => $full_name,
            'company' => $company,
            'phone_wa' => $phone_wa,
            'email' => $email,
            'address' => $address,
            'city' => $city,
            'district' => $district,
            'zip' => $zip,
            'note' => $note,
            'total' => $total,
            'total_item' => $total_item
        );

		$this->confirmation->insert_table('ukm_order', $order_data);
        $order_id = $this->db->insert_id();

        if ($this->cart->contents()){
            foreach ($this->cart->contents() as $item){
                $data_detail = array(
                    'order_id' =>$order_id,
                    'product_id' => $item['id'],
                    'price' => $item['price'],
                    'qty' => $item['qty'],
                    'subtotal' => $item['subtotal']
                );
                $this->confirmation->insert_table('ukm_order_detail', $data_detail);
            }
        }

        if ($order_id != 0) {
            $this->db->trans_complete();
            $this->cart->destroy();
            $response = array(
                'code' => 201,
                'message' => 'Sukses checkout, invoice '. $invoice . '.',
                'base_url' => site_url('confirmation/payment?inv='. $invoice .'&orderID='. $order_id .'&totalCost=' .$total .'totalItem=' .$total_item .'&contact='. $phone_wa)
            );
            echo json_encode($response, JSON_PRETTY_PRINT);
            die();
        }else{
            $response = array(
                'code' => 401,
                'message' => 'Gagal checkout.'
            );
            echo json_encode($response, JSON_PRETTY_PRINT);
            die();
        }
        
    }
}