<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chat extends Clients_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
		$this->load->database();
	}	

	public function index()
	{
		
		$sql= ("SELECT co.counsellor_name counsellor,co.counsellor_id id, c.client_code code, c.name FROM counsellors co
		INNER JOIN clients c
		ON co.counsellor_id = c.counsellor_id
		WHERE c.client_code = '".$_SESSION['username']."'"); //if Client Code or unique code is username
		$query = $this->db->query($sql,null);
		$id = "";
		$counsellor = "";
	   
		foreach ($query->result() as $row){
			$whatsapp = ("https://wa.me/{{phone_number3}}?text=I'm%20interested%20in%20discussing%20more%20about%20your%20service%20$row->name%20and%20client_code%20is%20$row->code");
			$id = $row->id;
			$counsellor = $row->counsellor;
			if ($id=='give id') {
			   $whatsapp = ("https://wa.me/{{phone_number3}}?text=I'm%20interested%20in%20discussing%20more%20about%20your%20service%20$row->name%20and%20client_code%20is%20$row->code");
			} elseif ($id=='give id') {
			   $whatsapp = ("https://wa.me/{{phone_number3}}?text=I'm%20interested%20in%20discussing%20more%20about%20your%20service%20$row->name%20and%20client_code%20is%20$row->code");
			   }else {
				   $whatsapp;
			   }
	   
		}
		$this->mViewData['data'] = array("whatsapp" => $whatsapp,"counsellor"=>$counsellor,"id"=>$id);
        $this->mPageTitle == "Chat with Counsellor";
		$this->render('chat_with_counsellor');
	}
}