<?php
class CustomerModel extends CI_Model {


    public function accept_customer() {
        $bookingId = $this->input->post('id');

        if ($bookingId) {
            $this->load->model('CustomerModel');
            $result = $this->CustomerModel->moveBookingToCustomers($bookingId);
            if ($result) {
                echo json_encode(['status' => 'success']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Insert failed']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'No booking ID provided']);
        }
    }

    public function customers() {
        $this->load->model('CustomerModel');
        $data['customers'] = $this->CustomerModel->getAllCustomers();
        $this->load->view('customers', $data);
    }

    function fetchD(){
        $this->db->where('status','accepted');
        return $this->db->get('book_table')->result();
    }

public function change_status_accepted($id) {
    // Update the status to 'accepted'
    //  $this->db->where('id', $id)->update('book_table', ['status' => 'accepted']);
        // Update the status to 'accepted'
        $this->db->where('id', $id);
        $this->db->update('book_table', ['status' => 'accepted']);
    
        // Return true if update was successful, false otherwise
        return ($this->db->affected_rows() > 0);
    
}

}
?>
