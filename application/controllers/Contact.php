<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Contact_model');
    }

    // Display list of contacts
    public function index() {
        $data['contacts'] = $this->Contact_model->get_contacts(); // Fetch all contacts
        $this->load->view('contact_list', $data); // Pass data to view
    }

    // Handle contact form submission
    public function contact() {
        
    // Set validation rules
    $this->form_validation->set_rules('name', 'name', 'required');
    $this->form_validation->set_rules('phone', 'Phone', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
    $this->form_validation->set_rules('message', 'Message', 'required');


        // Load contact form view initially or after validation errors
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('contact');
        } else {
            // Prepare sanitized data for insertion
            $data = array(
                'name' => $this->input->post('name', TRUE),
                'phone'    => $this->input->post('phone', TRUE),
                'email'    => $this->input->post('email', TRUE),
                'message'  => $this->input->post('message', TRUE),
            );

            // Insert data into the database
            if ($this->Contact_model->contact($data)) {
                $this->session->set_flashdata('success', 'Message sent successfully!');
                $this->load->view('thankyou');
            } else {
                $this->session->set_flashdata('error', 'Failed to send message. Please try again.');
                redirect('Contact/contact');
            }
        }
    }

    public function contactList() {
        $data['contacts'] = $this->Contact_model->get_contacts();
        $this->load->view('contact_list', $data);
    }
}
