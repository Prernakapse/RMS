<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
<<<<<<< HEAD

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
        $data['book_table'] = $this->Book_model->get_all_pending_bookings();
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
} 
?>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
