<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//declare(strict_types=1);
class SubscriberModel extends CI_Model{

	//Properties
	//private int $Id;
	//private string $Email;

	public function __construct(){
		parent::__construct();
		 $this->load->database();
	}
 
	// public _get{}
	// public _set{}

	public function SaveSubscriber($data = null) {

		$fields = array(
			'Email' => $data['email-subs'],
		);
		
		//$this->db->insert('Subscriber',$fields);			
		//return !$this->db->trans_status() ? false : true;
	}
}