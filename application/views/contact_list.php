<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<style>
    body {
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
    }
</style>

<body>

<div class="container mt-5">
    <h2 class="text-center"></h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th><i class="fas fa-phone"></i> Username</th>
                <th><i class="fas fa-users"></i> Email</th>
                <th><i class="fas fa-phone"></i> Phone</th>
                <th><i class="fas fa-message"></i>Description</th>
              
            </tr>
        </thead>
        <tbody>
            <?php foreach($contacts as $contact){ ?>
            <tr>
                <td><i class="fas fa-Username"></i> <?= $contact['name']; ?></td>
                <td><i class="fas fa-email"></i> <?= $contact['email']; ?></td>
                <td><i class="fas fa-phone"></i> <?= $contact['phone']; ?></td>
                <td><i class="fas fa-description"></i> <?= $contact['message']; ?></td>
                <td><a href="<?php echo base_url().'Contact/delete/'.$contact['id'];?>" class="btn btn-sm btn-danger fw-bold ps-2"><i class="fas fa-trash-alt"></i> </a></td>
            </tr>
            <?php }; ?>
        </tbody>
    </table>
</div>
=======
<head>
  <title>Orders</title>
  <style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #F5F5F5;
  padding-bottom: 40px;
}

.sidebar {
  width: 220px;
  height: 100%;
  background-color: black;
  color: white;
  position: fixed;
  padding: 20px;
}

.sidebar h2 {
  font-size: 30px;
  text-align: center;
  margin-bottom: 30px;
  color: white;
}

.sidebar ul {
  list-style: none;
  padding:0;
}

.sidebar ul li {
  margin: 15px 0 0 20px;
  font-size:20px;
}

.sidebar ul li a {
  text-decoration: none;
  color: orange;
  padding: 10px;
  display: block;
  border-radius: 5px;
  transition: 0.3s;
}

.sidebar ul li a:hover {
  background-color: orange;
  color: white;
}

#dashboard a:active {
  color: red;
}

.welcome {
  display: flex;
  margin-left: 250px;
  background-color: orange;
  height: 4vh;
  width: 83%;
  padding: 10px 0 40px 10px;
  border-radius: 6px;
}

.heading h1 {
  font-size: 24px;
  color: black;
  margin-left: 30px;
}
.btn button {
  margin: 10px 0 0 890%;
  width: 100px;
  height: 5vh;
  background-color: black;
  border: 1px solid black;
  color: white;
  border-radius: 10px;
  transition: all 0.3s ease-in-out;
  position: relative;
  overflow: hidden;
}

/* Adding a glowing effect and a slight scale on hover */
.btn button:hover {
  background-color: white;
  border: 1px solid orange;
  color: black;
  box-shadow: 0px 0px 10px rgba(255, 165, 0, 0.8);
  transform: scale(1.05);
}

/* Adding an animated shine effect */
.btn button::before {
  content: "";
  position: absolute;
  top: 50%;
  left: -100%;
  width: 100%;
  height: 300%;
  background: rgba(255, 255, 255, 0.3);
  transform: rotate(25deg);
  transition: left 0.4s ease-in-out;
}

.btn button:hover::before {
  left: 120%;
}

.cards {
  display: flex;
  justify-content: center;
  gap: 30px;
  margin: 30px;
  margin-left: 290px;
}

#two {
  background-color: #F5F5F5;
}
 
.card {
  border: 1px solid black;
  border-radius: 8px;
  box-shadow: 1px 1px 5px grey;
  text-align: center;
  width: 240px;
  height: auto;
  padding: 20px;
  background-color: white;
}

#two h1 {
  text-align: center;
  margin-left:10%;
}

.card h2 {
  font-size: 25px;
  color: black;
}

.card p {
  font-size: 20px;
  color: orange;
}

#three h1 {
  text-align: center;
  margin-top: 40px;
  color: black;
}

table {
  border-collapse: collapse;
  margin-left: 320px;
  width: 75%;
  text-align: center;
  box-shadow: 0 0 5px grey;
}

table th {
  background-color: orange;
  padding: 10px 0;
  color: black;
}

table th, td {
  border: 2px solid black;
  padding: 9px;
}

.para {
  max-width: 400px;
}

/* General button styles */
button {
    padding: 10px 15px;
    font-size: 14px;
    font-weight: bold;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    margin: 5px;
    transition: all 0.3s ease-in-out;
    margin:10px 0 0 750%;
    width:100px;
}

/* Accept button (Green) */
.accept-btn {
    background-color: #28a745; /* Green */
    color: white;
}

.accept-btn:hover {
    background-color: #218838; /* Darker Green */
    transform: scale(1.05);
}

/* Reject button (Red) */
.reject-btn {
    background-color: #dc3545; /* Red */
    color: white;
}

.reject-btn:hover {
    background-color: #c82333; /* Darker Red */
    transform: scale(1.05);
}

/* Adding slight shadow effect */
button:focus {
    outline: none;
    box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.2);
}
  

  </style>

</head>

<body>

  <div class="sidebar">
    <h2>Admin Panel</h2>
    <ul>
    <li class="active"><a href="<?php echo base_url().'Contact/index';?>">Dashboard</a></li>
      <li class="active"><a href="<?php echo base_url().'Contact/customer';?>">Customers</a></li>
      <li class="active"><a href="<?php echo base_url().'Contact/order';?>">Orders</a></li>
      <li class="active"><a href="<?php echo base_url().'Contact/inquiry';?>">Inquiry</a></li>
      <li class="active"><a href="<?php echo base_url().'Contact/privacy';?>">Privacy Policy</a></li>
    </ul>
  </div>


<section id="one">

    <div class="welcome">

       <div class="heading">
          <h1>Welcome to the Admin Panel</h1>
       </div>


       <div class="btn">
          <button stype="submit">Log Out</button>
       </div>
  </div>
</section>

<section id="two">

  <h1>Inquiry</h1>
  <h2 class="mb-4">Contact List</h2>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($contact)) { 
                    $sr_no = 1;
                    foreach ($contact as $c) { ?>
                        <tr>
                            <td><?= $sr_no++; ?></td>
                            <td><?= htmlspecialchars($c['name']); ?></td>
                            <td><?= htmlspecialchars($c['email']); ?></td>
                            <td><?= htmlspecialchars($c['phone']); ?></td>
                            <td><?= htmlspecialchars($c['message']); ?></td>
                        </tr>
                <?php } } else { ?>
                    <tr>
                        <td colspan="5" class="text-center">No records found</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>

<!-- Bootstrap 4/5 JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0

</body>
</html>
