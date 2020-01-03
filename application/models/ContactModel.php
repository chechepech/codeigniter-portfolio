<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//declare(strict_types=1);
class ContactModel extends CI_Model{

	//properties
	// private int $Id;
	// private string $Name;
	// private string $Email;
	// private string $Message;

	public function __construct(){
		parent::__construct();
		 $this->load->database();
	}
 
	// public _get{}
	// public _set{}

	public function SaveContact($data = null) {

		$fields = array(
			'Name' => $data['name'],
			'Email' => $data['email'],
			'Message' => $data['message']
		);
		$this->db->trans_start();
		$this->db->insert('Contact',$fields);
		$this->db->trans_complete();			
		return !$this->db->trans_status() ? false : true;
	}
}