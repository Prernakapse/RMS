<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
<<<<<<< HEAD

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
=======
    public function __construct() {
        parent::__construct();
        $this->load->model('Book_model'); // Load the model
       $this->load->model('CustomerModel');
        $this->load->helper(array('form', 'url')); // Load form helper
        $this->load->library('form_validation'); // Load form validation library
    }

    public function submit() {
        // Collect form data
        $formData = $this->input->post();

        // Insert data into the database
        if ($this->Book_model->insert_booking($formData)) {
            $this->session->set_flashdata('success', 'Booking successfully submitted!');
            redirect('Contact/success'); // Redirect to a success page
        } else {
            $this->session->set_flashdata('error', 'Failed to submit booking. Try again.');
            redirect('Home/Contact'); // Reload form
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
                redirect('contact/index');
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
            }
        }
    }

<<<<<<< HEAD
    public function contactList() {
        $data['contacts'] = $this->Contact_model->get_contacts();
        $this->load->view('contact_list', $data);
    }
}
=======
    public function send() {
        $this->load->view('contact'); // Load the booking form view
    }

    public function success1() {
        $this->load->view('feedback'); // Load the booking form view
    }
    
    public function index() {
        $data['contact'] = $this->Book_model->get_all_pending_bookings();
        $this->load->view('Admin', $data);
    }

    public function customer(){
        $data ['all'] = $this->CustomerModel->fetchD();
        $this->load->view('customers',$data);
    }

    public function order(){
        $this->load->view('orders');
    }

    public function inquiry(){
        $this->load->model('Contact_model'); // Load the model
        $data['contact'] = $this->Contact_model->get_contacts(); // Fetch data from model
        $this->load->view('Contact_list', $data); // Pass data to view
    }
    
    public function privacy(){
        $this->load->view('privacy');
    }


    public function success() {
        $this->load->model('Contact_model');
        // Set validation rules
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() == FALSE) {
            // If validation fails, reload the form with errors
            $this->load->view('contact_form');
        } else {
            // If validation passes, save data
            $data = array(
                'name'    => $this->input->post('name'),
                'email'   => $this->input->post('email'),
                'phone'   => $this->input->post('phone'),
                'message' => $this->input->post('message'),
            );

            // Save data to database
            $this->Contact_model->saveC($data);

            // Redirect with success message
            $this->session->set_flashdata('success', 'Message sent successfully!');
            redirect(base_url('Contact/success1'));
        }
    }


} 
?>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
