<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load any necessary helpers, libraries, etc.
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Admin_model');  // Assuming you have a model for admin authentication
    }

	// public function admin_dash(){
	// 	$this->load->view('Admin');
	// }

	public function admin(){
		$this->load->view('admin');
	}

    // Method to display the login form
    public function admin_login()
    {
        $this->load->view('Admin_login');  // This is your login view
    }
    
    // Method to process the login
    public function authenticate()
    {
        // Set validation rules for form inputs
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, reload the login page with error messages
            $this->load->view('Admin_login');
        } else {
            // Get the login data from the form
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Validate the admin credentials
            if ($this->Admin_model->validate_admin($username, $password)) {
                // Successful login, redirect to the admin dashboard
                redirect('Admin');  // Assuming you have a route for the admin dashboard
            } else {
                // Invalid credentials, show an error message
                $this->session->set_flashdata('login_error', 'Invalid username or password');
                $this->load->view('Admin_login');
            }
        }
    }

    public function logout(){
        $this->session->sess_destroy(); // Destroy all session data
        redirect('Welcome/admin_login'); // Redirect to the login page
    }

    public function accept_customer() {
        $customerId = $this->input->post('id');

        if ($customerId) {
            $this->load->model('Admin_Model');
            $this->Admin_Model->updateCustomerStatus($customerId, 'accepted');
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }
    }

    public function reject_customer() {
        $customerId = $this->input->post('id');

        if ($customerId) {
            $this->load->model('Admin_Model');
            $this->Admin_Model->updateCustomerStatus($customerId, 'rejected');
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }
    }

    public function customers() {
        $this->load->model('Admin_Model');
        $data['customers'] = $this->Admin_Model->getAllCustomers();
        $this->load->view('customers', $data);
    }
}


