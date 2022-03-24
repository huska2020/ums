<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Isibo extends CI_Controller { 

	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();

		//load database libray manually
		$this->load->database();

		//load Model
		$this->load->model('Mod_Isibo');

		//load session library
		$this->load->library('session');

		$this->load->helper(array('form', 'url'));
	}

	public function index(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/index');
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}

	public function abashyitsi(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->abashyitsi();
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/abashyitsi',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function ibyibwe(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/ibyibwe');
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function umuganda(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->umuganda();
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/umuganda',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function umutekano(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/umutekano');
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function ibikorwa(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/ibikorwaBishya');
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function invoice(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/invoice');
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function ayaleta(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['amatangazo'] = $this->Mod_Isibo->amatangazoAll();
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/ayaleta',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function soma($id){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['amatangazo'] = $this->Mod_Isibo->amatangazoAll();
			$result['data'] = $this->Mod_Isibo->amatangazoOne($id);
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/somamatangazo',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}

	public function do_upload_ikira(){
        $config['upload_path']          = './assets/uploads/amatangazo/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 0;
     
        $this->load->library('upload', $config);
     
        if ( ! $this->upload->do_upload('ufile'))
        {
			$sessionData=$this->session->userdata('userid');
			$result = $this->Mod_Isibo->selectForAnn($sessionData);
			$row = $result->row();
			$isibo = $row->isibo_code;
			$owner = $sessionData;
			$title = $this->input->post('title');
			$body = $this->input->post('myTextarea');
			$pic = "";
			$this->Mod_Isibo->itangazo($title, $body, $pic, $isibo, $owner);

			redirect('Isibo/ibyaranzwe');
        }
        elseif ($this->upload->do_upload('ufile'))
        {
			$sessionData=$this->session->userdata('userid');
			$result = $this->Mod_Isibo->selectForAnn($sessionData);
			$row = $result->row();
			$isibo = $row->isibo_code;
			$owner = $sessionData;
            $datav = $this->upload->data();
			$title = $this->input->post('title');
			$body = $this->input->post('myTextarea');
			$pic = "assets/uploads/amatangazo/".$datav['file_name'];
			$this->Mod_Isibo->itangazo($title, $body, $pic, $isibo, $owner);

			redirect('Isibo/ibyaranzwe');
        }
    }

	public function do_upload_ibi(){
		$name = $this->input->post('name');
		$vill=$this->session->userdata('umudugudu');
		$cont = $this->input->post('contact');
		$desc = $this->input->post('myTextarea');
		$cat = $this->input->post('category');
		$owner = $this->input->post('owner');
		$this->Mod_Isibo->saveIgikorwa($name, $vill, $cont, $desc, $cat, $owner);
		$id = $this->Mod_Isibo->DBNAME;
		$number_of_files_uploaded = count($_FILES['files']['name']);
		$imagePath = realpath(APPPATH . '../assets/uploads/ibikorwa/');
		for ($i = 0; $i < $number_of_files_uploaded; $i++) {
			$_FILES['userfile']['name'] = $_FILES['files']['name'][$i];
			$_FILES['userfile']['type'] = $_FILES['files']['type'][$i];
			$_FILES['userfile']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
			$_FILES['userfile']['error'] = $_FILES['files']['error'][$i];
			$_FILES['userfile']['size'] = $_FILES['files']['size'][$i];

			$config = array(
				'file_name' => time().uniqid(),
				'allowed_types' => 'jpg|jpeg|png|gif',
				'max_size' => 0,
				'overwrite' => FALSE,
				'upload_path'
				=>$imagePath
				);
				$this->load->library('upload', $config);;
				if ($this->upload->do_upload())
				{
				    $datav = $this->upload->data();
					$pic = 'assets/uploads/ibikorwa/'.$datav['file_name'];
					$this->Mod_Isibo->saveFile($id, $pic);
				}
		}
		
		
		redirect('Isibo/'.$cat);

        // $config['upload_path']          = './assets/uploads/amatangazo/';
        // $config['allowed_types']        = 'pdf';
        // $config['max_size']             = 0;
     
        // $this->load->library('upload', $config);
     
        // if ( ! $this->upload->do_upload('ufile'))
        // {
		// 	$sessionData=$this->session->userdata('userid');
		// 	$result = $this->Mod_Isibo->selectForAnn($sessionData);
		// 	$row = $result->row();
		// 	$isibo = $row->isibo_code;
		// 	$owner = $sessionData;
		// 	$title = $this->input->post('title');
		// 	$body = $this->input->post('myTextarea');
		// 	$pic = "";
		// 	$this->Mod_Isibo->itangazo($title, $body, $pic, $isibo, $owner);

		// 	redirect('Isibo/ibyaranzwe');
        // }
    }


	public function amafoto(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/amafoto');
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function amatangazo(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['amatangazo'] = $this->Mod_Isibo->amatangazoAll();
			$result['data'] = $this->Mod_Isibo->selectAmatangazo();
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/amatangazo',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function ibyaranzwe(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$sessionData=$this->session->userdata('userid');
			$result1 = $this->Mod_Isibo->selectForAnn($sessionData);
			$row = $result1->row();
			$isibo = $row->isibo_code;

			$result['amatangazo'] = $this->Mod_Isibo->amatangazoAll();
			$result['data'] = $this->Mod_Isibo->selectIbyaranzwe($isibo);
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/ibyaranzwe',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function ongeramo_umuryango(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->selectCategory();
			$result['insurance'] = $this->Mod_Isibo->selectInsurance();
			$res = $this->Mod_Isibo->isibo($sessionData);
			$row = $res->row();
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/ongeramo_umuryango',$result);
			if ($this->input->post('save')){
				$fname = $this->input->post('fname');
				$lname = $this->input->post('lname');
				$BOD = $this->input->post('birthday');
				$id = $this->input->post('id');
				$sex = $this->input->post('sex');
				$ubudehe = $this->input->post('ubudehe');
				$isano = $this->input->post('isano');
				$insurance = $this->input->post('insurance');
				$phone = $this->input->post('tel');
				$houseNumber = $this->input->post('houseNumber');
				$uname = $this->input->post('uname');
				$password = $this->input->post('password');
				$email = $this->input->post('email');
				$isibo = $row->isibo_code; 
				$this->Mod_Isibo->registerHeader($fname, $lname, $BOD, $id,$sex,$ubudehe, $isano, $insurance, $phone, $houseNumber, $uname, $password, $isibo, $email);

				redirect('Isibo/index');
			}
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function imiryango(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->selectFamily();
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/imiryango',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function abagabo($a="male"){	
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {	
			$result['data'] = $this->Mod_Isibo->selectPeaple($a);
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/abagabo',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function urubyiruko(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->selectChild();
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/urubyiruko',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function abana(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->selectChild();
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/abana',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function abagore($a="female"){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->selectPeaple($a);
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/abagore',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function akagoroba(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/akagoroba');
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function chat(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/chat');
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function igiceri(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/igiceri');
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function imihigo(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/imihigo');
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function abaturage(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->abaturage();
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/abaturage',$result);
		}else {
			redirect(base_url() . 'Login');
		}
	}

	public function ubudehe(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->ubudehe();
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/ubudehe',$result);			
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}

	public function ubwishingizi(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->ubwishingizi();
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/ubwishingizi',$result);			
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}

	public function kureba_umuryango($userId){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['family'] = $this->Mod_Isibo->selectFamily1($userId);
			$result['data'] = $this->Mod_Isibo->selectFamilyDetails($userId);
			$result['insurance'] = $this->Mod_Isibo->selectInsurance();
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/kureba_umuryango',$result);
			$this->load->view('isibo/footer');
			
			if ($this->input->post('save')){
				$fname = $this->input->post('fname');
				$lname = $this->input->post('lname');
				$tel = $this->input->post('tel');
				$nid = $this->input->post('nid');
				$email = $this->input->post('email');
				$dob = $this->input->post('dob');
				$ins = $this->input->post('ins');
				$isano = $this->input->post('isano');
				$sex = $this->input->post('sex');
				$id = $this->input->post('id');
				$this->Mod_Isibo->registerMember($fname, $lname, $tel, $nid,$email,$dob, $isano, $sex, $id,$ins);

				redirect("isibo/kureba_umuryango/".$id);
			}
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function kuzuza_umuganda(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar'); 
			$this->load->view('isibo/kuzuza_umuganda');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function amaduka(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->amashuri($this->session->userdata('umudugudu'),'amaduka');
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/amaduka',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function ibikorwaremezo($id){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->igikorwa($id);
			$result['pic'] = $this->Mod_Isibo->igikorwapic($id);
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/ibikorwaremezo',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function guhindura_umwirondoro(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/guhindura_umwirondoro');
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function umwirondoro(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/umwirondoro');
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function amashuri(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->amashuri($this->session->userdata('umudugudu'),'amashuri');
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/amashuri',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function amavuriro(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->amashuri($this->session->userdata('umudugudu'),'amavuriro');
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/amavuriro',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function pharmacy(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->amashuri($this->session->userdata('umudugudu'),'pharmacy');
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/pharmacy',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function restaurent(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->amashuri($this->session->userdata('umudugudu'),'restaurent');
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/restaurent',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function utubari(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->amashuri($this->session->userdata('umudugudu'),'utubari');
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/utubari',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function inganda(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->amashuri($this->session->userdata('umudugudu'),'inganda');
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/inganda', $result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function amasoko(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->amashuri($this->session->userdata('umudugudu'),'amasoko');
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/amasoko',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function cooperative(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->amashuri($this->session->userdata('umudugudu'),'cooperative');
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/cooperative',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function salon_de_coiffure(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->amashuri($this->session->userdata('umudugudu'),'salon');
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/salon_de_coiffure',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function amabanki(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->amashuri($this->session->userdata('umudugudu'),'amabanki');
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/amabanki',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function insengero(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->amashuri($this->session->userdata('umudugudu'),'amabanki');
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/insengero',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function hoteli(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->amashuri($this->session->userdata('umudugudu'),'hoteli');
			$this->load->view('isibo/header');
			$this->load->view('isibo/sidebar');
			$this->load->view('isibo/hoteli',$result);
			$this->load->view('isibo/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function read($a){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result = $this->Mod_Isibo->soma($a);
			$row = $result->row();
			$results['data'] = $row->ama_file;
			$this->load->view('isibo/soma',$results);
		}else {
			redirect(base_url() . 'Login');
		}
	}
}
