<?php 
class Home extends CI_Controller
{
	function __construct()
	  {
	    parent::__construct(); // construct the Model class
	  }
	
	public function index(){
		if ($this->session->userdata('loggedin')) {
			# Get session data  
			
			# Get news
			$this->load->model('News_model');

			$d['news']=$this->News_model->getNews();
			$this->sesHeader();
			$this->load->view('leftbar');
			$this->load->view('contHome',$d);
			$this->load->view('footHome');
		}
		else{
			redirect(base_url());
		}
	}
	public function sesHeader(){
		$sesdata=$this->session->userdata('loggedin');
			$data['id']=$sesdata['Id'];
			$data['name']=$sesdata['name'];
			$data['nick']=$sesdata['nick'];
			$data['mail']=$sesdata['mail'];
		$this->load->view('headHome',$data);
	}
	public function logout(){
		# Logout
		$this->session->unset_userdata('loggedin');
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function haberOku(){
		# Read all
		$id=$this->input->get('id');
		if (isset($id)){
		$this->load->model('News_model');
		$data['new']=$this->News_model->getIdNews($id);
		$this->sesHeader();
		$this->load->view('leftbar');
		$this->load->view('contHbr',$data);
		$this->load->view('footHome');
		}
		else{
			#  Hata Sayfası Ekle!
			redirect('home');
		}

	}
	public function profil() {
		if ($this->session->userdata('loggedin')) {
		$sesdata=$this->session->userdata('loggedin');
			$data['id']=$sesdata['Id'];
			$data['name']=$sesdata['name'];
			$data['nick']=$sesdata['nick'];
			$data['mail']=$sesdata['mail'];
		$this->load->view('headProfil',$data);
		$this->load->view('contProfil');

		}
		else{
			redirect(base_url());
		}
	}

	public function sources(){
		if ($this->session->userdata('loggedin')) {
			$this->sesHeader();
			$this->load->view('leftbar');
			$this->load->view('contSource');
			$this->load->view('footHome');
		}
	}

	public function arms(){
		if ($this->session->userdata('loggedin')) {
			$this->sesHeader();
			$this->load->view('leftbar');
			$this->load->view('contArms');
			$this->load->view('footHome');
		}
	}
	public function defance(){
		if ($this->session->userdata('loggedin')) {
			$this->sesHeader();
			$this->load->view('leftbar');
			$this->load->view('contDef');
			$this->load->view('footHome');
		}
		
	}
	public function guns(){
		if ($this->session->userdata('loggedin')) {
			$this->sesHeader();
			$this->load->view('leftbar');
			$this->load->view('contGuns');
			$this->load->view('footHome');
		}
	}
	public function train(){
		if ($this->session->userdata('loggedin')) {
			$this->sesHeader();
			$this->load->view('leftbar');
			$this->load->view('contTrain');
			$this->load->view('footHome');
		}
	}

	public function story(){
		if ($this->session->userdata('loggedin')) {
			$this->sesHeader();
			$this->load->view('leftbar');
			$this->load->view('contStory');
			$this->load->view('footHome');
		}
	}


}