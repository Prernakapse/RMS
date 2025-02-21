<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        // Load database or other necessary libraries
        $this->load->database();
    }

    // Validate admin credentials
    public function validate_admin($username, $password)
    {
        // Assuming you have a table called 'admins' with 'username' and 'password' columns
        $this->db->where('username', $username);
        $query = $this->db->get('admin_login');

        if ($query->num_rows() == 1) {
            // Check if the password matches (make sure passwords are hashed in the database)
            $db_password = $query->row()->password;
            if (password_verify($password, $db_password)) {
                return TRUE;  // Credentials are valids
            }
        }
        return FALSE;  // Invalid credentials
    }

    
}
?>