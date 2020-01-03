<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portfolio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load library
        $this->load->library('form_validation'); 
        //load Contact Model
        $this->load->model('ContactModel');
        //Load Subscriber Model
        $this->load->model('SubscriberModel');
    }

    public function index()
    {
        //load view
        $this->load->view('Chechepech');
    }

    public function subscribe()
    {
        $this->form_validation->set_rules('email-subs', 'Email', 'trim|required|valid_email ');
        $data['email-subs'] = trim(strip_tags(addslashes($this->input->post('email-subs',TRUE))));
        $this->SubscriberModel->SaveSubscriber($data);
    }

    public function contact()
    {	
    	//Check post
        //if ($this->input->server['REQUEST_METHOD'] == 'POST') {           
            $this->validateFields();
            if ($this->form_validation->run()) {
                //Get data post and sanitize y validation
                $data['name'] = trim(strip_tags(addslashes($this->input->post('name', TRUE))));
            	$data['email'] = trim(strip_tags(addslashes($this->input->post('email', TRUE))));
            	$data['message'] = trim(strip_tags(addslashes($this->input->post('message', TRUE))));
            	//Save data
                $this->output($data);
            }
        //}
            $this->load->view('Chechepech.php','refresh');
    }

    private function output($data = null)
    {
        $this->ContactModel->SaveContact($data);
        redirect('/Portfolio');
    }

    private function validateFields()
    {
        //set rules validation
        $this->form_validation->set_rules('name', 'Name', 'trim|required|alpha_numeric_spaces');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|alpha_numeric_spaces');
    }
}
