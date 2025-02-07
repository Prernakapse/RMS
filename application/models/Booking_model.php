<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_booking($data) {
        $this->db->insert('bookings', $data);
        
        // Ensure insertion worked
        if ($this->db->affected_rows() > 0) {
            return true; // Success
        } else {
            log_message('error', 'Database Insert Error: ' . $this->db->error()['message']);
            return false; // Failure
        }
    }

    public function get_all_bookings() {
        $query = $this->db->get('bookings'); // Fetch all records from 'bookings' table
        return $query->result_array(); // Return as an array
    }

    public function get_bookings() {
        return $this->db->get('bookings')->result_array();
    }

    function get($id){
        $this->db->where('id', $id);
        return $this->db->get('bookings')->row_array();
    }

    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('bookings');
    }

}
