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
  margin: 10px 0 0 890%;
  width: 100px;;
  height: 5vh;
  background-color: black;
  border: 1px solid black;
  color: white;
  border-radius: 10px;
  transition: all 0.3s ease-in-out;
  position: relative;
  overflow: hidden;
  font-size:15px;
  font-weight:bold;
}

/* Adding a glowing effect and a slight scale on hover */
.btn button:hover {
    background-color: white;
  border: 1px solid orange;
  color: black;
  box-shadow: 0px 0px 10px rgba(255, 165, 0, 0.8);
  transform: scale(1.05)
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


#two h1 {
  text-align: center;
  margin-left:10%;
  font-size:30px;
}

.info{
margin-left:18%;
}

.info h1{
    color:red;
}

header {
  display: flex;
  justify-content: space-between;
  padding: 10px 20px;
  background-color: #ffc107;
  color: #343a40;
  border-radius: 5px;
}

.first h1{
	font-size:25px;
	color:red;
	margin:10px 0 0 10px;
}

.first p{
	margin:0 0 0 10px;
	justify-content:justify;
}

.second h2{
	font-size:25px;
	margin:10px 0 0 0;
	color:red;
}

.second p{
	margin:0 0 0 0;
	justify-content:justify;
}

.third h2{
	font-size:25px;
	color:red;
	margin:10px 0 0 0;
}

.third p{
	margin:0 0 0 0;
	justify-content:justify;
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
      <li class="active"><a href="<?php echo base_url().'Booking/inquiry';?>">Inquiry</a></li>
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


<h1>Privacy Policy</h1>

</section>

<div class="info">
    
<h1>Privacy Policy</h1>
<p>This privacy policy sets out how FoodApp.in uses and protects any information that you give us, when you use this website.
FoodApp.in is committed to ensuring that your privacy is protected. Should we ask you to provide certain information by which you can be identified when using this website, then you can be assured that it will only be used in accordance with this privacy statement.
FoodApp.in may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes. This policy is effective from August 01, 2020.</p>


<div class="second">
<h2>What we collect ?</h2><br>
<p>We may collect the following information :<br>
*  name and job title<br>
*  contact information including phone number and email address.<br>
*  demographic information such as postcode, preferences and interests.<br>
*  address for food delivery</p>
</div>

<div class="third">
<h2>What we do with the information we gather ?</h2>
<p>We require this information to understand your needs and provide you with a better service, and in particular for the following reasons:</p>

<h2>Delivery of Food</h2>
<p>We use the Information to deliver Food at your Home/ office.</p>



<h2>Internal record keeping</h2>
<p>We may use the information to improve our products and services. We may periodically send promotional emails about new products, special offers or other information which we think you may find interesting using the email address which you have provided.</p>


<p>From time to time, we may also use your information to contact you for market research purposes. We may contact you by email, phone, fax or mail. We may use the information to customise the website according to your interests.</p>

<h2>Security</h2>
<p>We are committed to ensuring that your information is secure. In order to prevent unauthorised access or disclosure we have put in place suitable physical, electronic and managerial procedures to safeguard and secure the information we collect online.</p>
</div>

</div>

</section>
</body>
</html>