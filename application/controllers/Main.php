<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->login();
	}
	public function login()
	{
		$this->load->view('login');
		
	}
	public function logmein(){
		$uname=$this->input->post('uname');
		$pass=$this->input->post('pass');
		$this->load->model('Users_model');
		$userdatas=$this->Users_model->verify($uname,$pass);
		$sesdata=array();
		if (!empty($userdatas)) {
			foreach ($userdatas as $data) {
				$sesdata= $arrayName = array('Id' => $data->Id, 'name' => $data->isim , 'nick' => $data->nick , 'mail' => $data->mail );
				$this->session->set_userdata('loggedin',$sesdata);
				redirect(base_url().'home');
			}
			
			
		}
		else{
			echo "Oops";
		}

	}
	public function register(){
		$data['isim']=$this->input->post('name');
		$data['mail']=$this->input->post('mail');
		$data['nick']=$this->input->post('uname');
		$pass=$this->input->post('pass');
		$pass1=$this->input->post('pass1');
		$this->load->model('Users_model');

		if($pass=== $pass1){
			$data['pass']=$pass;
			$this->Users_model->register($data);
			redirect(base_url());
		}

	}
}
