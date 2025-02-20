<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<style>
    /* body {
        background-color: #f8f9fa;
    }
    .container {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        color: #007bff;
        font-weight: bold;
        margin-bottom: 20px;
    }
    table {
        background: white;
    }
    thead {
        background-color: #007bff;
        color: white;
    }
    th, td {
        text-align: center;
        vertical-align: middle;
    }
    tr:hover {
        background-color: #f1f1f1;
    } */

     body {
    background-color: #f8f9fa;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.15);
    max-width: 90%;
    margin: 30px auto;
}

h2 {
    color: #007bff;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    overflow: hidden;
    border-radius: 10px;
}

thead {
    background-color: #007bff;
    color: white;
}

th, td {
    text-align: center;
    vertical-align: middle;
    padding: 12px;
    border: 1px solid #dee2e6;
}

tr:nth-child(even) {
    background-color: #f8f9fa;
}

@media (max-width: 768px) {
    .container {
        padding: 20px;
    }

    th, td {
        padding: 10px;
        font-size: 14px;
    }
}

@media (max-width: 480px) {
    th, td {
        padding: 8px;
        font-size: 12px;
    }

    h2 {
        font-size: 18px;
    }
}

</style>

<body>

<div class="container mt-5">
    <h2 class="text-center">Contact List</h2>
    <table class="table table-border">
        <thead>
            <tr>
                <th><i class="fas fa-phone"></i> Username</th>
                <th><i class="fas fa-users"></i> Email</th>
                <th><i class="fas fa-phone"></i> Phone</th>
                <th><i class="fas fa-comments"></i>Description</th>
                <th><i class="fas fa-trash"></i>Action</th>
              
            </tr>
        </thead>
        <tbody>
            <?php foreach($contacts as $contact){ ?>
            <tr>
                <td><i class="fas fa-Username"></i> <?= $contact['name']; ?></td>
                <td><i class="fas fa-email"></i> <?= $contact['email']; ?></td>
                <td><i class="fas fa-phone"></i> <?= $contact['phone']; ?></td>
                <td><i class="fas fa-description"></i> <?= $contact['message']; ?></td>
                
                <td>
                <a href="<?php echo base_url().'Contact/delete/'.$contact['id']; ?>" 
                    class="btn btn-sm btn-danger fw-bold ps-2" 
                    onclick="return confirm('Are you sure you want to delete this enquiry?');">
                    <i class="fas fa-trash-alt"></i> 
                </a>
               </td>
            </tr>
            
          <?php }; ?>
        </tbody>
    </table>
</div>

</body>
</html>
