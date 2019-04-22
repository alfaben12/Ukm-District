<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Confirmations extends MX_Controller {
    
    public $flag = true;
    public $_version = '';

	public function __construct() {
		parent::__construct();
        $this->load->model('confirmation');

        if ($this->flag) {
			$this->_version = '_v2.php';
		}else{
			$this->_version = '';
		}
	}
	
	
	public function index(){
        date_default_timezone_set("Asia/Jakarta");
        $time = time();
        $hour = date("G",$time);

        if ($hour>=0 && $hour<=11){
            $greeting = "Selamat Pagi";
        }elseif ($hour >=12 && $hour<=15){
            $greeting = "Selamat Siang";
        }elseif ($hour >=16 && $hour<=18){
            $greeting = "Selamat Sore";
        }elseif ($hour >=19 && $hour<=23){
            $greeting = "Selamat Malam ";
        }else{
            $greeting = "Selamat Pagi";
        }
        $data['greeting'] = $greeting;

        if($this->cart->total() > 0){
            $this->template->write_view('index'. $this->_version, $data);
        }else{
            redirect(site_url('shops'));
        }
    }

    public function getShipping(){
        $data['shippingMethod'] = $this->confirmation->fetch_table('*','ukm_shipping_method','','','','','',TRUE);
        $response = array(
            'code' => 200,
            'message' => 'Pengiriman ditemukan',
            'data' => array(
                'shippingMethod' => $data['shippingMethod']
            )
        );
        echo json_encode($response, JSON_PRETTY_PRINT);
        die();
    }

    public function getPayment(){
        $data['payment'] = $this->confirmation->fetch_table('*','ukm_payment','','','','','',TRUE);
        $response = array(
            'code' => 200,
            'message' => 'Pembayaran ditemukan',
            'data' => array(
                'payment' => $data['payment']
            )
        );
        echo json_encode($response, JSON_PRETTY_PRINT);
        die();
    }

    public function processCheckOut(){
        $this->form_validation->set_rules('firstName', 'Nama Depan dibutuhkan',  'trim|required');
		$this->form_validation->set_rules('lastName', 'Nama Belakang dibutuhkan', 'trim|required');
		$this->form_validation->set_rules('phoneNumber', 'No WA dibutuhkan', 'trim|required');
		$this->form_validation->set_rules('email', 'Email dibutuhkan', 'trim|required');
		$this->form_validation->set_rules('address', 'Alamat dibutuhkan', 'trim|required');
		$this->form_validation->set_rules('city', 'Kota/Kabupaten dibutuhkan', 'trim|required');
		$this->form_validation->set_rules('district', 'Desa dibutuhkan', 'trim|required');
		$this->form_validation->set_rules('paymentID', 'Pembayaran dibutuhkan', 'trim|required');
		$this->form_validation->set_rules('shippingMethodID', 'Pengiriman dibutuhkan', 'trim|required');

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

        $paymentID = $this->input->post('paymentID');
        $shippingMethodID = $this->input->post('shippingMethodID');
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
        $shippingPrice = $this->input->post('shippingPrice');
        $subtotal = $this->cart->total();
        $total = $this->cart->total() + $shippingPrice;
        $status = 'PENDING';
        $total_item = $this->cart->total_items();
        
        $order_data = array(
            'payment_id' => $paymentID,
            'shipping_method_id' => $shippingMethodID,
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
            'subtotal' => $subtotal,
            'total' => $total,
            'total_item' => $total_item,
            'status' => $status,
            'price_shipping' => $shippingPrice
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
                'base_url' => site_url('confirmations/payment?inv='. $invoice .'&orderID='. $order_id .'&totalCost=' .$total .'&totalItem=' .$total_item .'&contact='. $phone_wa)
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

    function payment(){
        $inv = $this->input->get('inv');
        $orderID = $this->input->get('orderID');
        $totalCost = $this->input->get('totalCost');
        $totalItem = $this->input->get('totalItem');
        $contact = $this->input->get('contact');

        $join = array(
            array(
                'table' => 'ukm_payment',
                'condition' => 'ukm_payment.id = ukm_order.payment_id',
                'jointype' => 'LEFT'
            )
        );

        $where = 'invoice = "'. $inv .'" and ukm_order.id = "'. $orderID .'" and total = "'. $totalCost .'" and total_item = "'. $totalItem .'" and phone_wa = "'. $contact .'"';
        $order = $this->confirmation->fetch_joins('ukm_order','ukm_order.*, ukm_payment.name AS bank_name, ukm_payment.bank AS bank, ukm_payment.rekening AS bank_rekening',$join,$where,TRUE);

        $join_product = array(
            array(
                'table' => 'ukm_product',
                'condition' => 'ukm_product.id = ukm_order_detail.product_id',
                'jointype' => ''
            )
        );
        $order_item = $this->confirmation->fetch_joins('ukm_order_detail','ukm_order_detail.*, ukm_product.name AS product_name',$join_product,'order_id = '. $orderID,TRUE);

        date_default_timezone_set("Asia/Jakarta");
        $time = time();
        $hour = date("G",$time);

        if ($hour>=0 && $hour<=11){
            $greeting = "Selamat Pagi";
        }elseif ($hour >=12 && $hour<=15){
            $greeting = "Selamat Siang";
        }elseif ($hour >=16 && $hour<=18){
            $greeting = "Selamat Sore";
        }elseif ($hour >=19 && $hour<=23){
            $greeting = "Selamat Malam ";
        }else{
            $greeting = "Selamat Pagi";
        }
        $data['greeting'] = $greeting;

        if (count($order_item > 0)) {
            $this->template->write_view('payment'. $this->_version, $data);
        }else{
            redirect(site_url('shops'));
        }
    }

    function getInfoOrder(){
        $inv = $this->input->get('inv');
        $orderID = $this->input->get('orderID');
        $totalCost = $this->input->get('totalCost');
        $totalItem = $this->input->get('totalItem');
        $contact = $this->input->get('contact');

        $join = array(
            array(
                'table' => 'ukm_payment',
                'condition' => 'ukm_payment.id = ukm_order.payment_id',
                'jointype' => 'LEFT'
            ),
            array(
                'table' => 'ukm_shipping_method',
                'condition' => 'ukm_shipping_method.id = ukm_order.shipping_method_id',
                'jointype' => 'LEFT'
            )
        );

        $where = 'invoice = "'. $inv .'" and ukm_order.id = "'. $orderID .'" and total = "'. $totalCost .'" and total_item = "'. $totalItem .'" and phone_wa = "'. $contact .'"';
        $order = $this->confirmation->fetch_joins('ukm_order','ukm_order.*, ukm_payment.name AS bank_name, ukm_payment.bank AS bank, ukm_payment.rekening AS bank_rekening, ukm_shipping_method.name AS shipping_method',$join,$where,TRUE);

        $join_product = array(
            array(
                'table' => 'ukm_product',
                'condition' => 'ukm_product.id = ukm_order_detail.product_id',
                'jointype' => ''
            )
        );
        $order_item = $this->confirmation->fetch_joins('ukm_order_detail','ukm_order_detail.*, ukm_product.name AS product_name, ukm_product.image AS product_image',$join_product,'order_id = '. $orderID,TRUE);

        $response = array(
            'code' => 200,
            'message' => 'Berhasil ambil data order.',
            'data' => array(
                'detail' => $order,
                'item' =>$order_item
            )
        );
        echo json_encode($response, JSON_PRETTY_PRINT);
    }


    function processPayment(){
        $inv = $this->input->get('inv');
        $orderID = $this->input->get('orderID');
        $totalCost = $this->input->get('totalCost');
        $totalItem = $this->input->get('totalItem');
        $contact = $this->input->get('contact');

        $this->db->trans_start();
        $join = array(
            array(
                'table' => 'ukm_payment',
                'condition' => 'ukm_payment.id = ukm_order.payment_id',
                'jointype' => 'LEFT'
            )
        );
        $where = 'invoice = "'. $inv .'" and ukm_order.id = "'. $orderID .'" and total = "'. $totalCost .'" and total_item = "'. $totalItem .'" and phone_wa = "'. $contact .'" and status = "PENDING"';

        $order = $this->confirmation->fetch_joins('ukm_order','ukm_order.*, ukm_payment.name AS bank_name, ukm_payment.bank AS bank, ukm_payment.rekening AS bank_rekening',$join,$where,TRUE);

        if (count($order) == 1) {
            $order_id = $order[0]['id'];
            if (isset($_FILES['file']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
                /*-------------setting attachment upload -------------*/
                $config['upload_path'] = './files/payment/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = 1024 * 8;
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('file')){
                    $data['file_name'] = null;
                    $json_data =  array(
                        "result" => 401 ,
                        "message" => array('head'=> 'Failed', 'body'=> $this->upload->display_errors('', '')),
                        "form_error" => 'gambar'
                    );
                    print json_encode($json_data);
                    die();
                }else{
                    $data = $this->upload->data();
                }
            }else{
                $data['file_name'] = null;
            }

            if($data['file_name'] == null){
                $response =  array(
                    'code' => 401,
                    'message' => 'Gambar harus ada',
                );
                echo json_encode($response, JSON_PRETTY_PRINT);
                die();
            }

            $phoneWa = $this->input->post('phoneWa');
            $bank = $this->input->post('bank');
            $bankName = $this->input->post('bankName');

            
            if($phoneWa == ''){
                $response = array(
                    'code' => 401,
                    'message' => 'Gagal nomor WA tidak boleh kosong.'
                );
                echo json_encode($response, JSON_PRETTY_PRINT);
                die();
            }
            
            if($bank == ''){
                $response = array(
                    'code' => 401,
                    'message' => 'Gagal bank tidak boleh kosong.'
                );
                echo json_encode($response, JSON_PRETTY_PRINT);
                die();
            }
            
            if($bankName == ''){
                $response = array(
                    'code' => 401,
                    'message' => 'Gagal nama rekening tidak boleh kosong.'
                );
                echo json_encode($response, JSON_PRETTY_PRINT);
                die();
            }

            $data_payment = array(
                'payment_wa' => $phoneWa,
                'bank' => $bank,
                'bank_name' => $bankName,
                'order_id' => $order_id,
                'file' => $data['file_name']
            );

            $this->confirmation->insert_table('ukm_order_payment', $data_payment);
            
            $data_order = array(
                'status' => 'MENUNGGU'
            );
            $update_order = $this->confirmation->update_table('ukm_order', $data_order, 'id', $order_id);

            if ($update_order) {
                $this->db->trans_complete();
                $response = array(
                    'code' => 201,
                    'message' => 'Sukses konfirmasi, invoice '. $inv . '.',
                    'base_url' => site_url('confirmations/thank_you?inv='. $inv .'&orderID='. $order_id .'&totalCost=' .$totalCost .'&totalItem=' .$totalItem .'&contact='. $contact)
                );
                echo json_encode($response, JSON_PRETTY_PRINT);
                die();
            }else{
                $response = array(
                    'code' => 401,
                    'message' => 'Gagal konfirmasi.'
                );
                echo json_encode($response, JSON_PRETTY_PRINT);
                die();
            }
        }else{
            $response = array(
                'code' => 401,
                'message' => 'Gagal konfirmasi, data tidak ada.'
            );
            echo json_encode($response, JSON_PRETTY_PRINT);
            die();
        }
    }

    function processCheckRegionShipping(){
        $total = strtoupper($this->input->get('total'));
        $destination = strtoupper($this->input->get('destination'));
        $shippingMethodID = $this->input->get('shippingMethodID');

        $data['shippingRegion'] = $this->confirmation->fetch_table('*','ukm_shipping_region','shipping_method_id = '. $shippingMethodID .' and name = "'. $destination.'"','','','','',TRUE);

        if (count($data['shippingRegion'])  > 0) {
            $response = array(
                'code' => 200,
                'message' => 'Region pengiriman tersedia, ongkir '. $data['shippingRegion'][0]['price'] .'. Total = '. $total .'+'.$data['shippingRegion'][0]['price'] .' ingin melanjutkan?',
                'data' => $data['shippingRegion'][0]['price']
            );
            echo json_encode($response, JSON_PRETTY_PRINT);
            die();
        }else{
            $response = array(
                'code' => 401,
                'message' => 'Region pengiriman belum tersedia.'
            );
            echo json_encode($response, JSON_PRETTY_PRINT);
            die();
        }
    }

    function thank_you(){
        $inv = $this->input->get('inv');
        $orderID = $this->input->get('orderID');
        $totalCost = $this->input->get('totalCost');
        $totalItem = $this->input->get('totalItem');
        $contact = $this->input->get('contact');

        $join = array(
            array(
                'table' => 'ukm_payment',
                'condition' => 'ukm_payment.id = ukm_order.payment_id',
                'jointype' => 'LEFT'
            )
        );

        $where = 'invoice = "'. $inv .'" and ukm_order.id = "'. $orderID .'" and total = "'. $totalCost .'" and total_item = "'. $totalItem .'" and phone_wa = "'. $contact .'"';
        $data['order'] = $this->confirmation->fetch_joins('ukm_order','ukm_order.*, ukm_payment.name AS bank_name, ukm_payment.bank AS bank, ukm_payment.rekening AS bank_rekening',$join,$where,TRUE);

        date_default_timezone_set("Asia/Jakarta");
        $time = time();
        $hour = date("G",$time);

        if ($hour>=0 && $hour<=11){
            $greeting = "Selamat Pagi";
        }elseif ($hour >=12 && $hour<=15){
            $greeting = "Selamat Siang";
        }elseif ($hour >=16 && $hour<=18){
            $greeting = "Selamat Sore";
        }elseif ($hour >=19 && $hour<=23){
            $greeting = "Selamat Malam ";
        }else{
            $greeting = "Selamat Pagi";
        }
        $message_send_to_wa = $greeting .' kak, saya mau konfirmasi pembayaran. 
Nama : '. $data['order'][0]['full_name'] .' 
Invoice : '. $data['order'][0]['invoice']  .' 
Total : '. $data['order'][0]['total']  .'
Terima kasih. 🍬🥤';

$message = $greeting .' kak, saya mau konfirmasi pembayaran. <br/>
Nama : '. $data['order'][0]['full_name'] .'<br/> 
Invoice : '. $data['order'][0]['invoice']  .'<br/>
Total : '. $data['order'][0]['total']  .'<br/>
Terima kasih. 🍬🥤';
        $data['send_to_wa'] = 'https://wa.me/6281249898867?text='.urlencode($message_send_to_wa);
        $data['message'] = $message;
        $data['wa'] = '081249898867';
        $this->load->view('thank_you'. $this->_version, $data);
    }
}