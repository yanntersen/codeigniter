<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends MY_Controller {
  function __construct() {
		parent::__construct();

//		$this->data['menu'] = $this->db->get('pages')->result_array();

	}
	function index()	{

		$this->data['arr'] = $this->db->get('pages')->result_array();

		$this->load->view('welcome_message',$this->data);
	}
	function page() {

		echo 'this is page';

	}
}