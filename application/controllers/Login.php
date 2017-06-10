<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function _construct()
	{
		parent::_construct();
		//$this->load->model('Usuario_model');
		//$this->load->database('default');
	}
	public function index()
	{
		$this->load->view('login');
		if ($this->session->userdata('user')) {

			redirect('home');
		}
		//$password= $this->input->POST('password');
		//$username=$this->input->POST('username');
		if (isset($_POST['password']))
		{
			$this->load->model('Usuario_model');
			//$this->Usuario_model->Login();
			if($this->Usuario_model->login($_POST['username'],$_POST['password'],$_POST['tipo']))
			{
				//echo "string";
				$this->session->set_userdata('user',$_POST['username']);
				$this->session->set_userdata('password',$_POST['password']);
				$this->session->set_userdata('tipo',$_POST['tipo']);
				$this->session->set_userdata('log','true');
				$this->session->set_userdata('log2','true');
				redirect("home");
			}else {
				redirect("login");
			}

		}
	}
	public function log()
	{
		//$this->load->session();
	//	$this->load->library(array('session'));

		$this->load->view('login');
		if ($this->session->userdata('user')) {

			redirect('home');
		}
		//$password= $this->input->POST('password');
		//$username=$this->input->POST('username');
		if (isset($_POST['password']))
		{
			$this->load->model('Usuario_model');
			//$this->Usuario_model->Login();
			if($this->Usuario_model->login($_POST['username'],$_POST['password'],$_POST['tipo']))
			{
				//echo "string";
				$this->session->set_userdata('user',$_POST['username']);
				$this->session->set_userdata('password',$_POST['password']);
				$this->session->set_userdata('tipo',$_POST['tipo']);
				$this->session->set_userdata('log','0');
				redirect("home");
			}else {
				redirect("login");
			}

		}



	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}

}
