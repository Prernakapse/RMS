<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    // Insert contact data into the database
    public function contact($data) {
        $this->db->insert('contact', $data);

    }
    
    // Fetch all contacts
    public function get_contacts() {
        $query = $this->db->get('contact'); // Fetch all records from 'contact' table
        return $query->result_array(); // Return as  array
    }

    // Fetch a single contact by ID
    public function get($id) {
        $this->db->where('id', $id);
        return $this->db->get('contact')->row_array();
    }

    // Delete a contact by ID
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('contact');
        
        // Check if delete was successful
        return $this->db->affected_rows() > 0;
    }

     public function delete_contact($id) {
        return $this->db->delete('contact', array('id' => $id)); // Ensure 'bookings' is your actual table name
    }
}
