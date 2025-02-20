<!DOCTYPE html>
<head>
  <title>Customers</title>
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
  margin: 10px 0 0 770px;
  width: 10 0px;
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
    <li class="active"><a href="<?php echo base_url().'Booking/index';?>">Dashboard</a></li>
      <li class="active"><a href="<?php echo base_url().'Booking/customer';?>">Customers</a></li>
      <li class="active"><a href="<?php echo base_url().'Booking/order';?>">Orders</a></li>
      <li class="active"><a href="<?php echo base_url().'Booking/user';?>">Users</a></li>
      <li class="active"><a href="<?php echo base_url().'Booking/privacy';?>">Privacy Policy</a></li>
    </ul>
  </div>


<section id="one">

    <div class="welcome">

       <div class="heading">
          <h1>Welcome to the Admin Panel</h1>
       </div>

       <div class="btn">
          <button>Log Out</button>
       </div>

  </div>
</section>

<section id="two">

  <h1>Customers</h1>

</section>

<section id="three">
 <table>
   <thead>
       <tr>
          <th>Sr.No</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Address</th>  
        </tr>
</thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Payal</td>
        <td>9975812064</td>
        <td>payal@gmail.com</td>
        <td>Pandit Colony, Nashik</td>   
    </tr>
      
    <tr>
        <td>2</td>
        <td>Prerna</td>
        <td>9156943109</td>
        <td>prerna@gmail.com</td>
        <td>Pune</td>   
    </tr>

    <tr>
        <td>3</td>
        <td>Ritesh</td>
        <td>1234567890</td>
        <td>ritesh@gmail.com</td>
        <td>Nashik</td>   
    </tr>

    <tr>
        <td>4</td>
        <td>Bhumi</td>
        <td>9975812064</td>
        <td>bhumi@gmail.com</td>
        <td>Pandit Colony, Nashik</td>   
    </tr>

    <tr>
        <td>5</td>
        <td>Vaibhavi</td>
        <td>1234567890</td>
        <td>vaibhavi@gmail.com</td>
        <td>Wagholi</td>   
    </tr>

    <tr>
        <td>6</td>
        <td>prerna</td>
        <td>9975812064</td>
        <td>prerna@gmail.com</td>
        <td>Pune</td>   
    </tr>

    <tr>
        <td>7</td>
        <td>Pauravi</td>
        <td>9876543210</td>
        <td>pauravi@gmail.com</td>
        <td>Pandit Colony, Nashik</td>   
    </tr>

    <tr>
        <td>8</td>
        <td>Dhanu</td>
        <td>1234567890</td>
        <td>dhanu@gmail.com</td>
        <td>Nashik</td>   
    </tr>

    <tr>
        <td>9</td>
        <td>payal</td>
        <td>9975812064</td>
        <td>payal@gmail.com</td>
        <td>Pandit Colony, Nashik</td>   
    </tr>

    <tr>
        <td>10</td>
        <td>Bhumi</td>
        <td>9975812064</td>
        <td>bhumi@gmail.com</td>
        <td> Nashik</td>   
    </tr>


    </tbody>
</table>

</section>
<!-- Bootstrap 4/5 JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>
