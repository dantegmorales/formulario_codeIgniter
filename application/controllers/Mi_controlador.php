<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mi_controlador extends CI_Controller {

	function __construct (){
		parent::__construct();

	}

	public function index()
	{
		$this->load->view('mi_primer_vista');
	}
}