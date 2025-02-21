<?php
class AdminController extends CI_Controller {

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

//     public function fetchData() {
//         // Get the raw POST data
//         $postData = json_decode(file_get_contents('php://input'), true);
//         print_r($postData);die;

//         // Check if 'id' is set in the request
//         if(isset($postData['id'])) {
//             $id = $postData['id'];

//             // You can process the ID here (fetch data from database, etc.)
//             // Example: Fetching product details from database
//             $this->load->model('CustomerModel');
//             $product = $this->CustomerModel->change_status_accepted($id);

//             if ($product) {
//                 echo json_encode(['status' => 'success', 'product' => $product]);
//             } else {
//                 echo json_encode(['status' => 'error', 'message' => 'Product not found']);
//             }
//         } else {
//             echo json_encode(['status' => 'error', 'message' => 'ID not provided']);
//         }
//     }
// }


// public function fetchData() {
//     // Set JSON response header
//     header('Content-Type: application/json');

//     // Get the raw POST data
//     $postData = json_decode(file_get_contents('php://input'), true);

//     // Check if 'id' is set in the request
//     if(isset($postData['id'])) {
//         $id = $postData['id'];

//         // Call model function to change status
//         $result = $this->CustomerModel->change_status_accepted($id);

//         if ($result) {
//             echo json_encode(['status' => 'success', 'message' => 'Status updated successfully', 'data' => $result]);
//         } else {
//             echo json_encode(['status' => 'error', 'message' => 'Failed to update status']);
//         }
//     } else {
//         echo json_encode(['status' => 'error', 'message' => 'ID not provided']);
//     }
// }


public function fetchData() {
    // Set JSON response header
    header('Content-Type: application/json');

    // Get the raw POST data
    // $postData = json_decode(file_get_contents('php://input'), true);
    // $postData = json_decode(file_get_contents('php://input'), true);
    $postData = $this->input->post();

    // print_r($postData);die;
    // Debug: Check if sJSON data is received
    if (empty($postData)) {
        echo json_encode(['status' => 'error', 'message' => 'No data received']);
        exit;
    }

    // Check if 'id' is set in the request
    if (isset($postData['id'])) {
        $id = $postData['id'];
        // Load model if not loaded
        $this->load->model('CustomerModel');

        // Call model function to change status
        $result = $this->CustomerModel->change_status_accepted($id);

        if ($result) {
            echo json_encode(['status' => 'success', 'message' => 'Status updated successfully', 'data' => $result]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update status']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'ID not provided']);
    }

    // Stop script execution after JSON response
    exit;
}



}
?>