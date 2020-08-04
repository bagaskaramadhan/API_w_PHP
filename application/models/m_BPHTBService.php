<?php

class m_BPHTBService extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_BPHTB()
	{
		$query = $this->db->select('*')
			->from('v_api_getbphtbservice');
//			->where('NOP' );
		return $query->get()->result();
	}
}
