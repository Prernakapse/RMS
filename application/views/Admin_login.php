<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // You should validate and sanitize input data here
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Example of login check (this is just a simple check for illustration)
    // In real-world applications, you should fetch this from a database and compare hashed passwords
    if ($username == "admin" && $password == "admin123") {
        // Redirect to the admin page if login is successful
        header("Location: Adminnew.html");
        exit();
    } else {
        $error_message = "Invalid username or password.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>


<style>
    *{
	margin:0;
	padding:0;
}

.right h1{
	color:orange;
	margin:10% 0 0 15%;
	font-size:70px;
}

.right span{
	color:red;
}

.right p{
	font-size:20px;
	margin:30px 0 0 24%;
	color:red;
}

.right img{
	width:160px;
	margin:15px 0 0 90px;
	border-radius:90px;
}

.vertical-line {
  width:2px;    
  height:300px;
  background-color: orange;
	margin:5% 0 0 10%;

}

.title{
	margin:50px 0 0 80px;
	font-size:25px;
}

.title span{
	color:red;

}

.name input{
		margin-top:20px;
		border-radius:10px;
		height:5vh;
		width:70%;
		 border:1px solid red;
		 padding-left:10px;
		 margin:12% 0 0 90px;
}


.pass input{
		margin-top:20px;
		border-radius:10px;
		height:5vh;
		width:70%;
		 border:1px solid red;
		 padding-left:10px;
		 margin:10% 0 0 90px;	 
}

.container{
	display:flex;
	margin:10% 0 0 20%;
	box-shadow: 0 0 10px orange;
	height:60%;
	width:55%;
	padding:30px;
}

.btn{
	margin:10% 20% 0 52%;
	width:65px;
	padding:8px;
	border-radius:10px;
	border:1px solid red;
	background:transparent;
}

.btn:hover{
	background-color:	#FF0000;
	color:white;
}
</style>
</head>
<body>

<div class="container">
    <div class="right">
        <h1>Wel<span>come!</span></h1>
        <p>For Continue, Login Here...</p>
        <img src="https://www.foodiesfeed.com/wp-content/uploads/2023/06/pouring-honey-on-pancakes.jpg" alt="Image">
    </div>

    <div class="vertical-line"></div>

    <div class="form">
        <div class="title">
            <h1>Admin <span>Login</span></h1>
        </div>

<form method="POST" action="<?php echo base_url('Booking/index');?>">
    <div class="name">
        <input type="text" name="username" placeholder="Username" required>
    </div>

    <div class="pass">
        <input type="password" name="password" placeholder="Password" required>
    </div>

    <button type="submit" class="btn">Login</button>
</form>

    </div>
</div>

</body>
</html>