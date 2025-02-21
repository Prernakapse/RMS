<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // public function insert_booking($data) {
    //     $this->db->insert('book_table', $data);
        
    //     // Ensure insertion worked
    //     if ($this->db->affected_rows() > 0) {
    //         return true; // Success
    //     } else {
    //         log_message('error', 'Database Insert Error: ' . $this->db->error()['message']);
    //         return false; // Failure
    //     }
    // }

    

    public function get_all_bookings() {
        $query = $this->db->get('book_table'); // Replace 'bookings' with your actual table name
        return $query->result_array();
    } 

    public function get_bookings() {
        return $this->db->get('book_table')->result_array();
    }

    public function get($id){
        $this->db->where('id', $id);
        return $this->db->get('book_table')->row_array();
    }
    
     public function delete_booking($id) {
        return $this->db->delete('book_table', array('id' => $id)); // Ensure 'bookings' is your actual table name
    }


    public function insert_booking($data) {
        return $this->db->insert('book_table', $data); // Insert data to 'book_table'
    }


    public function get_all_pending_bookings() {
        $this->db->where('status', 'pending'); // Add WHERE condition
        $query = $this->db->get('book_table'); // Get records from 'bookings' table
        return $query->result_array(); // Return result as an array
    }
    
}

?>

