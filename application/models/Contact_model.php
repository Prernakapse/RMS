<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_contact() {
        $query = $this->db->get('contact'); // Replace 'bookings' with your actual table name
        return $query->result_array();
    } 

    public function get_contact() {
        return $this->db->get('contact')->result_array();
    }

    public function get($id){
        $this->db->where('id', $id);
        return $this->db->get('contact')->row_array();
    }
    
     public function delete_contact($id) {
        return $this->db->delete('contact', array('id' => $id)); // Ensure 'bookings' is your actual table name
    }


    public function insert_contact($data) {
        return $this->db->insert('contact', $data); // Insert data to 'book_table'
    }
    public function saveC($data) {
        return $this->db->insert('contact', $data);
    }
    // Fetch all contacts from the database
    public function get_contacts() {
        $query = $this->db->get('contact'); // Fetch data from the `contact` table
        return $query->result_array(); // Return result as an array
    }



}

?>

