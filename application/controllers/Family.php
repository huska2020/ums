<?php


class Family extends CI_Controller {
    public function __construct()
    {
        //call CodeIgniter's default Constructor
        parent::__construct();

        //load database libray manually
        $this->load->database();

        //load Model
        $this->load->model('fm');

        //load session library
        //session_start();
        $this->load->library('session');

        $this->load->helper(array('form', 'url'));
    }
	
	public function akagoroba(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('akagoroba');
			$this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}

	public function amaduka(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('amaduka');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function abashyitsi(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $results = $this->fm->getGuestsByLeaderId($this->session->userdata('leader_id'));
            if ($results != null){
                $data['selected'] = $results->result();
            } else{
                $data['selected'] = null;
            }
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('abashyitsi', $data);
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
    public function dismiss($gid = null){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $dismissDate = $this->fm->getCurrentUnixDate();
            $dismissed = $this->fm->dismissGuestById($gid, $dismissDate);
            if ($dismissed){
                ?>
                <script>
                    window.alert('Wemeje ko umushyitsi yatashye!');
                    window.location = '<?=base_url();?>Family/abashyitsi';
                </script>
                <?php
            } else{
                ?>
                <script>
                    window.alert('Kwemeza ko umushyitsi yatashye ntibyakunze!');
                    window.location = '<?=base_url();?>Family/abashyitsi';
                </script>
                <?php
            }
        }else {
            redirect(base_url() . 'Login');
        }
    }
	public function amabanki(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('amabanki');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function amashuri(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('amashuri');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function amasoko(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('amasoko');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function amatangazo(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $results = $this->fm->getAmatangazo($this->session->userdata('isibo'));
            if ($results != null){
                $data['selected'] = $results->result();
                $this->load->view('header');
                $this->load->view('sidebar');
                $this->load->view('amatangazo', $data);
                $this->load->view('footer');
            } else{
                $data['selected'] = null;
                $this->load->view('header');
                $this->load->view('sidebar');
                $this->load->view('amatangazo', $data);
                $this->load->view('footer');
            }
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function amavuriro(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('amavuriro');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function guhiga(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('guhiga');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function guhindura_umwirondoro(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('guhindura_umwirondoro');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function hoteli(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('hoteli');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function ibarura(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('ibarura');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function ibyaranzwe(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $results = $this->fm->getAnnouncements();
            $data['selected'] = $results;
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('ibyaranzwe', $data);
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function ibyibwe(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('ibyibwe');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function igiceri(){
        $sessionData=$this->session->userdata('userid');
        $leader_id = $this->session->userdata('leader_id');
        $data['selected'] = $this->fm->getIgiceriByLeaderId($leader_id);
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('igiceri', $data);
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
    public function ejoheza(){
        $sessionData=$this->session->userdata('userid');
        $leader_id = $this->session->userdata('leader_id');
        $data['selected'] = $this->fm->getEjohezaByLeaderId($leader_id);
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('ejoheza', $data);
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
    }
	public function imihigo(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('imihigo');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function inganda(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('inganda');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function insengero(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('insengero');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function isuku(){
        $sessionData=$this->session->userdata('userid');
        $leader_id = $this->session->userdata('leader_id');
        $data['selected'] = $this->fm->getIsukuByLeaderId($leader_id);
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('isuku', $data);
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function kuranga(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            if ($this->input->post('savefile')){
                $leader_id = $this->session->userdata('leader_id');
                $title = $this->input->post('title');
                $body = $this->input->post('body');
                $regDate = $this->fm->getCurrentUnixDate();

                $newName = 'anno_'.$this->fm->getCurrentUnixDate().'.'.pathinfo($_FILES['ifoto']['name'], PATHINFO_EXTENSION);
                $config['file_name'] = $newName;
                $config['upload_path'] = './assets/uploads/announcements/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 0;
                $config['file_ext_tolower'] = TRUE;

                $this->load->library('upload', $config);
                $this->upload->set_allowed_types('*');

                if ( ! $this->upload->do_upload('ifoto'))
                {
                    $pic = "./assets/uploads/announcements/no_foto.png";
                    $saved = $this->fm->saveAnnouncement($leader_id, $title,$body, $pic, $regDate);

                    if ($saved){
                        ?>
                        <script>
                            window.alert('Byoherejwe ariko ifoto ntibashije kubikwa!');
                            window.location = '';
                        </script>
                        <?php
                    } else {
                        ?>
                        <script>
                            window.alert('Ntabwo byakunze, musubiremo!');
                        </script>
                        <?php
                    }
                }
                else
                {
                    $pic = "./assets/uploads/announcements/".$newName;
                    $saved = $this->fm->saveAnnouncement($leader_id, $title,$body, $pic, $regDate);

                    if ($saved){
                        ?>
                        <script>
                            window.alert('Kurangisha Byoherejwe neza!');
                            window.location = '';
                        </script>
                        <?php
                    } else {
                        ?>
                        <script>
                            window.alert('Kurangisha Ntabwo byakunze, musubiremo!');
                        </script>
                        <?php
                    }
                }
            }
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('kuranga');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function kwandika_umushyitsi(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            if ($this->input->post('register')){
                $leader_id = $this->session->userdata('leader_id');
                $firstname = $this->input->post('firstname');
                $lastname = $this->input->post('lastname');
                $phone = $this->input->post('phone');
                $nid = $this->input->post('nid');
                $address = $this->input->post('address');
                $regDate = $this->fm->getCurrentUnixDate();

                $saved = $this->fm->registerGuest($leader_id, $firstname, $lastname, $phone, $nid, $address,$regDate);
                if ($saved){
                    ?>
                    <script>
                        window.alert('Umushyitsi Yanditwe Neza!');
                        window.location = 'Abashyitsi';
                    </script>
                    <?php
                } else{
                    ?>
                    <script>
                        window.alert('Kwandika Umushyitsi Ntibyakunze, Ongera Ugerageze!');
                    </script>
                    <?php
                }
            }
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('kwandika_umushyitsi');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function my_issues(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('my_issues');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function pharmacy(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('pharmacy');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function restaurant(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('restaurant');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function salon_de_coiffure(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('salon_de_coiffure');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function umuganda(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $results = $this->fm->getUmugandaReport($this->session->userdata('isibo'));
            if ($results != null){
                $data['selected'] = $results->result();
            } else{
                $data['selected'] = null;
            }
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('umuganda', $data);
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function umuryango(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $leader_id = $this->session->userdata('leader_id');
            $results = $this->fm->getFamilyMembers($leader_id);
            $data['results'] = $results;

            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('umuryango', $data);
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function umutekano(){
        $sessionData=$this->session->userdata('userid');
        $leader_id = $this->session->userdata('leader_id');
        $data['selected'] = $this->fm->getUmutekanoByLeaderId($leader_id);
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('umutekano', $data);
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function umwirondoro(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('umwirondoro');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function utubari(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('utubari');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function chat(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('chat');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function amafoto(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('amafoto');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function invoice($table = '', $transaction = ''){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $leader_id=$this->session->userdata('leader_id');
            if ($table != '' && $transaction != '') {
                $data['table'] = $table;
                $data['selected'] = $this->fm->getInvoice($table, $transaction);
                $data['address'] = $this->fm->getAddressByLeaderId($leader_id);
                $this->load->view('header');
                $this->load->view('sidebar');
                $this->load->view('invoice', $data);
                $this->load->view('footer');
            } else{
                redirect(base_url());
            }
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function kwandika_ibyibwe(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('kwandika_ibyibwe');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function umuhigo(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('umuhigo');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function ibikorwaremezo(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('ibikorwaremezo');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function kwishyura(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('kwishyura');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function pay(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('pay');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}

    //Function for Payment (Umutekano, Isuku, EjoHeza, Igiceri)
    function payService(){
        if ($this->input->post('pay')){
            $amezi = $this->input->post('amezi');
            $title = $this->input->post('title');
            $amt = $this->input->post('amount');
            $table = 'ums_'.$this->input->post('table');
            $amount =intval($amezi)*$amt;
        }

        $email = "huskajafar@gmail.com";
        if ($this->input->post('nber')){
            $amezi = $this->input->post('amezi');
            $transaction_reference = 'TRX'.time();
            $leader_id = $this->session->userdata('leader_id');
            $amount =$this->input->post('amt');
            $table =$this->input->post('table');
            $regDate = $this->fm->getCurrentUnixDate();
            $save_transaction = $this->fm->saveTransaction($transaction_reference, $leader_id, $table,$amezi, $amount, $regDate);
            if ($save_transaction){
                $request = [
                    'tx_ref' => $transaction_reference,
                    'amount' => $amount,
                    'currency' => 'RWF',
                    'payment_options' => 'mobilemoneyrwanda',
                    'redirect_url' => base_url().'Family/process',
                    'customer' => [
                        'email' => $email,
                        'name' => 'huska'
                    ],
                    'meta' => [
                        'price' => $amount
                    ],
                    'customizations' => [
                        'title' => 'Ishyura '.$title,
                        'description' => 'UMS',
                        'logo'=> 'http://localhost/pay/sano.png'
                    ]
                ];

                //* Ca;; f;iterwave emdpoint
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://api.flutterwave.com/v3/payments',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => json_encode($request),
                    CURLOPT_HTTPHEADER => array(
                        'Authorization: Bearer FLWSECK-5dae7c688c6095601109b400679c4e3e-X',
                        'Content-Type: application/json'
                    ),
                ));

                $response = curl_exec($curl);

                curl_close($curl);

                $res = json_decode($response);
                if($res->status == 'success')
                {
                    $link = $res->data->link;
                    header('Location: '.$link);
                }
                else
                {
                    echo 'We can not process your payment';
                }
            } else{
                ?>
                <script>
                    window.alert('Kwishyura ntabwo bikunze, Ongera ugerageze!');
                    window.location = '<?=base_url();?>Family/kwishyura';
                </script>
                <?php
            }
        }
        $result['total']=$amount;
        $result['title'] = 'Kwishyura '.$title;
        $result['table'] = $title;
        $result['amount'] = $amt;
        $result['amezi'] = $amezi;
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('pay',$result);
    }

    function process(){
        $status = $this->input->get('status', TRUE);
        //* check payment status
        if($status == 'cancelled') {
            // echo 'YOu cancel the payment';
            $this->fm->updateTransaction($this->input->get('tx_ref', TRUE), $status);
            ?>
            <script>
                window.alert('Wahagaritse Kwishyura!');
                window.location = '<?=base_url();?>Family/kwishyura';
            </script>
            <?php
        }
        elseif($status == 'successful') {
            $txid = $this->input->get('transaction_id', TRUE);
            $this->fm->updateTransaction($this->input->get('tx_ref', TRUE), 'success');
            $leader_id = $this->session->userdata('leader_id');
            $trans_id = $this->input->get('tx_ref', TRUE);
            $query = $this->fm->getTransactionById($trans_id);
            $trans = $query->row();
            $monthCount = $trans->trs_months_count;
            if ($trans->trs_title == 'Umutekano'){
                $saved = $this->fm->saveUmutekanoTrans($leader_id, $trans_id, $monthCount);
            } elseif($trans->trs_title == 'Isuku'){
                $saved = $this->fm->saveIsukuTrans($leader_id, $trans_id, $monthCount);
            } elseif($trans->trs_title == 'Igiceri'){
                $saved = $this->fm->saveIgiceriTrans($leader_id, $trans_id, $monthCount);
            } elseif($trans->trs_title == 'Ejo Heza'){
                $saved = $this->fm->saveEjohezaTrans($leader_id, $trans_id, $monthCount);
            }
            ?>
            <script>
                window.alert('Kwishyura Byagenze neza!');
                window.location = '<?=base_url();?>Family/kwishyura';
            </script>
            <?php
        } elseif($status == 'failed'){
            $this->fm->updateTransaction($this->input->get('tx_ref', TRUE), $status);
            ?>
            <script>
                window.alert('Transaction failed!');
                window.location = '<?=base_url();?>Family/kwishyura';
            </script>
            <?php
        }
    }
}