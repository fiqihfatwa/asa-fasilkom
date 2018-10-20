<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct()
 	{
 		parent::__construct();
 		// Your own constructor code
		$this->load->model('Admin_model','dbObject');
		if($this->session->userdata('group_id')!='3'&&$this->session->userdata('loggedIn')!=TRUE){
			redirect(base_url("auth/logout"));
		}
	}

	public function index()
	{
		if($this->session->userdata('loggedIn')==TRUE){
		$data['title'] = "Dashboard";

		$this->load->view('templates_mahasiswa/header',$data);
    $this->load->view('templates_mahasiswa/navbar');
		$this->load->view('templates_mahasiswa/sidebar');
		$this->load->view('mahasiswa/dashboard/index',$data);
    $this->load->view('templates_mahasiswa/footer');
		}else {
			redirect(base_url());
		}
	}
}
