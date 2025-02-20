<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Book_model'); // Load the model
       
        $this->load->helper(array('form', 'url')); // Load form helper
        $this->load->library('form_validation'); // Load form validation library
    }

    public function submit() {
        // Collect form data
        $formData = $this->input->post();

        // Insert data into the database
        if ($this->Book_model->insert_booking($formData)) {
            $this->session->set_flashdata('success', 'Booking successfully submitted!');
            redirect('Booking/success'); // Redirect to a success page
        } else {
            $this->session->set_flashdata('error', 'Failed to submit booking. Try again.');
            redirect('Home/Reservation'); // Reload form
        }
    }


    public function login_process() {
        // Set validation rules
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed - reload login form with errors
            $this->load->view('Admin_login');
        } else {
            // Validation passed - process login (you can add authentication logic here)
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Example authentication (Replace this with actual authentication logic)
            if ($username === 'admin' && $password === 'admin') {
                $this->session->set_userdata('username', $username);
                redirect('dashboard'); // Redirect to a dashboard page after successful login
            } else {
                $this->session->set_flashdata('error', 'Invalid Username or Password');
                redirect('booking/index');
            }
        }
    }

    public function booktable() {
        $this->load->view('booktable'); // Load the booking form view
    }

    public function success() {
        $this->load->view('thankyou'); // Load the booking form view
    }
    
    public function index() {
        $data['book_table'] = $this->Book_model->get_all_bookings();
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
