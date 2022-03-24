<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Akagari extends CI_Controller { 

	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();

		//load database libray manually
		$this->load->database();

		//load Model
		$this->load->model('Mod_Akagari');
		//load session library
		$this->load->library('session');

		$this->load->helper(array('form', 'url'));
	}
	
	public function index(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/index');
			$this->load->view('akagari/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}

	public function abashyitsi(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/abashyitsi');
		$this->load->view('akagari/footer');
	}
	public function isuku(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/isuku');
		$this->load->view('akagari/footer');
	}
	public function ibyibwe(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/ibyibwe');
		$this->load->view('akagari/footer');
	}
	public function abaturage(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/abaturage');
	}
	public function citizen(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/citizen');
	}
	public function umuganda(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/umuganda');
		$this->load->view('akagari/footer');
	}
	public function umutekano(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/umutekano');
		$this->load->view('akagari/footer');
	}
	public function invoice(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/invoice');
		$this->load->view('akagari/footer');
	}
	public function ayaleta(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/ayaleta');
		$this->load->view('akagari/footer');
	}
	public function amafoto(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/amafoto');
		$this->load->view('akagari/footer');
	}
	public function amatangazo(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/amatangazo');
		$this->load->view('akagari/footer');
	}
	public function ibyaranzwe(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/ibyaranzwe');
		$this->load->view('akagari/footer');
	}
	public function ongeramo_umuryango(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/ongeramo_umuryango');
	}
	public function imiryango(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/imiryango');
		$this->load->view('akagari/footer');
	}
	public function abagabo(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/abagabo');
		$this->load->view('akagari/footer');
	}
	public function urubyiruko(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/urubyiruko');
		$this->load->view('akagari/footer');
	}
	public function ibicanwa(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/ibicanwa');
	}
	public function abanyeshuri(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/abanyeshuri');
	}
	public function abakozi(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/abakozi');
	}
	public function kwandika_umuyobozi(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/kwandika_umuyobozi');
	}
	public function kongeramo_isibo(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/kongeramo_isibo');
	}
	public function agatanda(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/agatanda');
	}
	public function akarima(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/akarima');
	}
	public function abana(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/abana');
		$this->load->view('akagari/footer');
	}
	public function girinka(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/girinka');
	}
	public function abagore(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/abagore');
		$this->load->view('akagari/footer');
	}
	public function akagoroba(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/akagoroba');
		$this->load->view('akagari/footer');
	}
	public function chat(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/chat');
		$this->load->view('akagari/footer');
	}
	public function igiceri(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/igiceri');
		$this->load->view('akagari/footer');
	}
	public function imihigo(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/imihigo');
		$this->load->view('akagari/footer');
	}
	public function kureba_umuryango(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/kureba_umuryango');
		$this->load->view('akagari/footer');
	}
	public function kuzuza_umuganda(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/kuzuza_umuganda');
	}
	public function amaduka(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/amaduka');
		$this->load->view('akagari/footer');
	}
	public function ibikorwaremezo(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/ibikorwaremezo');
		$this->load->view('akagari/footer');
	}
	public function guhindura_umwirondoro(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/guhindura_umwirondoro');
		$this->load->view('akagari/footer');
	}
	public function umwirondoro(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/umwirondoro');
		$this->load->view('akagari/footer');
	}
	public function amashuri(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/amashuri');
		$this->load->view('akagari/footer');
	}
	public function amavuriro(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/amavuriro');
		$this->load->view('akagari/footer');
	}
	public function pharmacy(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/pharmacy');
		$this->load->view('akagari/footer');
	}
	public function restaurent(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/restaurent');
		$this->load->view('akagari/footer');
	}
	public function utubari(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/utubari');
		$this->load->view('akagari/footer');
	}
	public function inganda(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/inganda');
		$this->load->view('akagari/footer');
	}
	public function amasoko(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/amasoko');
		$this->load->view('akagari/footer');
	}
	public function cooperative(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/cooperative');
		$this->load->view('akagari/footer');
	}
	public function salon_de_coiffure(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/salon_de_coiffure');
		$this->load->view('akagari/footer');
	}
	public function amabanki(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/amabanki');
		$this->load->view('akagari/footer');
	}
	public function insengero(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/insengero');
		$this->load->view('akagari/footer');
	}
	public function hoteli(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/hoteli');
		$this->load->view('akagari/footer');
	}
	public function abagize_komite(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/abagize_komite');
		$this->load->view('akagari/footer');
	}
	public function ongeramo_umuyobozi(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/ongeramo_umuyobozi');
		$this->load->view('akagari/footer');
	}
	public function ongeramo_isibo(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/ongeramo_isibo');
		$this->load->view('akagari/footer');
	}
}
