<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Contact_model'); // Load the model
        $this->load->helper(array('form', 'url')); // Load form helper
        $this->load->library('form_validation'); // Load form validation library
    }

    public function submitContact() {
        // Collect form data
        $formData = $this->input->post();

        // Insert data into the database
        if ($this->Contact_model->contact($formData)) {
            $this->session->set_flashdata('success', 'Contact successfully submitted!');
            redirect('Contact/success'); // Redirect to a success page
        } else {
            $this->session->set_flashdata('error', 'Failed to submit booking. Try again.');
            redirect('Home/Contact'); // Reload form
        }
    }

    public function submit() {
        $this->load->view('contact_list'); // Load the booking form view
    }

    public function success() {
        $this->load->view('thankyou'); // Load the booking form view
    }
    
    
    public function index() {
        $data['contact'] = $this->Contact_model->get_contacts();
        $this->load->view('Admin', $data);
    }

    public function customer(){
        $this->load->view('customers');
    }

    public function order(){
        $this->load->view('orders');
    }

    public function user(){
        $this->load->view('users');
    }

    public function privacy(){
        $this->load->view('privacy');
    }
} 
?>
