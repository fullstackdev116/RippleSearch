<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->database();
		$this->load->model('model');
		$this->load->library('session');
		$this->load->helper('url');
		if (session_status() == PHP_SESSION_NONE) {
			
			session_id(SITE);
		    session_start();
		}
    }

	public function index()
	{
		$this->search();
	}

	function getUserID() {
		if ($this->session->userdata(SITE)) {
			return $this->session->userdata(SITE)['id'];
		}
		return -1;
	}

	function search()
	{

		$total_cnt = $this->model->get_total_cnt();
		$individual_cnt = -1;
		if ($this->getUserID() > 0) {
			$individual_cnt = $this->model->get_individual_cnt($this->getUserID());
		}
		$this->load->view('header', array('active' => 'search'));
		$this->load->view('search', array('total_cnt' => $total_cnt, 'individual_cnt' => $individual_cnt));
		$this->load->view('footer');
	}

	function ripples()
	{
		$this->load->view('header', array('active' => 'ripples'));
		$this->load->view('ripples', array('ref_code' => ''));
		$this->load->view('footer');
	}

	function privacy()
	{
		$this->load->view('header', array('active' => 'privacy'));
		$this->load->view('privacy');
		$this->load->view('footer');
	}

	function thankyou()
	{
		$usercode = $this->model->get_last_usercode();
		$this->load->view('header', array('active' => ''));
		$this->load->view('thankyou', array('usercode' => $usercode));
		$this->load->view('footer');
	}

	function contact()
	{
		$this->load->view('header', array('active' => 'contact'));
		$this->load->view('contact');
		$this->load->view('footer');
	}

	function randomString() {
		$length = 8;
		$string= "0123456789abcdefghijklmnopqrstuvwxyz!@#$%&*()";
	    return substr(str_shuffle( $string), 0, $length);
	}

	function do_signup() {
		$email = $_POST['email'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$password = $_POST['password'];
		$ref_code = $_POST['ref_code'];
		$usercode = $this->randomString();
		// if ($this->do_post($email, $firstname, $lastname, $usercode)) {
			$result = $this->model->signup($email, $firstname, $lastname, $password, $usercode, $ref_code, $data_array);
			if ($result == 200) {
				$this->session->set_userdata(SITE, $data_array['data']);
			}
			echo $result;
		// } else {
			// echo 400;
		// }
	}

	function do_post($email, $firstname, $lastname, $usercode)
	{
	  $ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'https://emailoctopus.com/api/1.6/lists/a1413e24-ec09-11ec-9258-0241b9615763/contacts');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"api_key\":\"ae74f7af-b97a-4504-8e6c-e2a50b24d067\",\"email_address\":\"".$email."\",\"fields\":{\"FirstName\":\"".$firstname."\",\"LastName\":\"".$lastname."\",\"Usercode\":\"".$usercode."\"},\"tags\":[\"prelaunch\"],\"status\":\"SUBSCRIBED\"}");

		$headers = array();
		$headers[] = 'Content-Type: application/json';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
		    echo 'Error:' . curl_error($ch);
		}
		curl_close($ch);
		$res_arr = json_decode($result,true);
		if (isset($res_arr['error'])) {
			return false;
		}
		return true;
	}

	function do_login() {
		$result = $this->model->login($_POST['email'], $_POST['password'], $data_array);
		if ($result == 200) {
			$this->session->set_userdata(SITE, $data_array['data']);
		}
		echo $result;
	}

	function logout() {
		$this->session->set_userdata(SITE);
		$this->session->sess_destroy();
		redirect(base_url().'home/search');
	}

	function search_cnt() {
		$result = $this->model->search_cnt($this->getUserID());
		echo 200;
	}
}
