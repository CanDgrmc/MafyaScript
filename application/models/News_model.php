<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News_model extends CI_Model
{	
	

	function getNews(){
		$this->db->from('news');
		$query=$this->db->get();
		return $query->result();;
		}
	function getIdNews($id){
		$this->db->from('news');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->result();;
		}
	

	
}