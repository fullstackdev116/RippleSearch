<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ripples extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->database();
		$this->load->model('model');
		$this->load->library('session');
		$this->load->helper('url');
		if (session_status() === PHP_SESSION_NONE) {
		    session_start();
		}
    }

	public function index()
	{
		$this->ripples();
	}



	function ripples()
	{
		$ref_code = "";
		$input_params=$this->input->get();
		if (count($input_params)>0) {
			$ref_code = $input_params['ref'];
		}
		$this->load->view('header', array('active' => 'ripples'));
		$this->load->view('ripples', array('ref_code' => $ref_code));
		$this->load->view('footer');
	}


}
