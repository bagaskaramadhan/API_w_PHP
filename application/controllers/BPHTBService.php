<?php

class BPHTBService extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_BPHTBService');
	}

	public function index()
	{
		json_output(403, "Say the magic word");

	}
}
