<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users_model extends CI_Model
{	
	function __construct()
	  {
	    parent::__construct(); // construct the Model class
	  }

	function verify($uname,$pass){
		$this->db->select('Id , isim , nick , mail');
		$this->db->from('Users');
		$this->db->where('nick',$uname);
		$this->db->where('pass',$pass);
		
		$data=$this->db->get();
		
		if ($data->num_rows()==1) {
			return $data->result();
		}
		else {
			return false;
		}

	}

	function register($data){
		$this->db->insert('Users',$data);
	}
}