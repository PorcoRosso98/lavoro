<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_utente extends CI_controller {
	 public function __construct(){
        parent::__construct();
        $this->load->model('admin/utente_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
	 }
	public function index(){
		$data['utente']=$this->utente_model->lista_utente();
		$data['username']=$_SERVER['PHP_AUTH_USER'];
		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/tabella_utente',$data);
		$this->load->view('admin/template/footer');
	}

	

}
