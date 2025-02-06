<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Booking_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index() {
        $data['bookings'] = $this->Booking_model->get_all_bookings(); // Fetch bookings
        $this->load->view('booking_list', $data); // Pass data to view
    }

   public function submit() {
    $this->load->model('Booking_model');
    $this->load->library('form_validation');
    $this->load->library('session');
 

    // Set validation rules
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('phone', 'Phone', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('created_at', 'Date', 'required');
    $this->form_validation->set_rules('person', 'Number of Persons', 'required|numeric');
    $this->form_validation->set_rules('time', 'Time', 'required');

    if ($this->form_validation->run() == FALSE) {
        $this->load->view('reservation');
} 
 else {
        // Prepare sanitized data for insertion
        $data = array(
            'username' => $this->input->post('username', TRUE),
            'phone' => $this->input->post('phone', TRUE),
            'email' => $this->input->post('email', TRUE),
            'created_at' => $this->input->post('created_at', TRUE),
            'person' => $this->input->post('person', TRUE),
            'time' => $this->input->post('time', TRUE),
            'message' => $this->input->post('message', TRUE)
    );

      

        if ($this->Booking_model->insert_booking($data)) {
            $this->session->set_flashdata('success', 'Booking successful!');
            //redirect('Booking/bookingList'); 
            $this->load->view('thankyou');
        } else {
            echo "Database Insert Failed"; // Show error message
            exit(); // Stop execution
        }
    }
}
    public function bookingList() {
        $data['bookings'] = $this->Booking_model->get_bookings();
        $this->load->view('booking_list', $data);
    }
    
}
