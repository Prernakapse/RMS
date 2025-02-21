<!DOCTYPE html>
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fetch/3.6.2/fetch.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fetch/3.6.2/fetch.min.js"></script> -->

  <title>Admin Dashboard</title>
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
  margin-left:0%;
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
    <form action="<?= base_url('Welcome/logout'); ?>" method="post">
        <button type="submit">Log Out</button>
    </form>
</div>


  </div>
</section>

<section id="two">

  <h1>Dashboard Overview</h1>

   <div class="cards">

     <div class="card">
         <h4>Total Customers</h4>
         <p>4</p>
     </div>

     <div class="card">
         <h4>Total Orders</h4>
         <p>4</p>
     </div>

     <div class="card">
         <h4>Total Inquiry</h4>
         <p>4</p>
     </div>

</div>
</section>

<section id="three">
 <table>
 
  <thead>
       <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Phone</th>
          <th>No. of Persons</th>
          <th>Date</th>
          <th>Time</th>
          <th>Message</th>
          <th>Action</th>
       </tr>
</thead>

<tbody>
            <?php if (!empty($book_table)) : ?>
                <?php $i = 1; foreach ($book_table as $booking) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <!-- <td><?= htmlspecialchars($booking['id']); ?></td> -->
                        <td><?= htmlspecialchars($booking['name']); ?></td>
                         <td><?= htmlspecialchars($booking['phone']); ?></td>
                         <td><?= htmlspecialchars($booking['person']); ?></td>
                        <td><?= htmlspecialchars($booking['date']); ?></td>
                        <td><?= htmlspecialchars($booking['time']); ?></td>
                        <td><?= htmlspecialchars($booking['message']); ?></td>
                      <!-- Inside your table row for each booking -->
<td>
<button type="button" class="accept-btn btn btn-success" data-id="<?= $booking['id'] ?>" onclick="processRequest(this)">Accept</button>
<button type="button" class="reject-btn btn btn-danger" data-id="<?= $booking['id'] ?>">Reject</button>
                </td>

                      </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="8">No records found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
</table>

</section>


<script>
  // Select all accept buttons
  function processRequest(element) {
      // Get the ID from the button's data-id attribute
      const bookingId = element.getAttribute('data-id');

      const formData = new FormData();
            formData.append('id', bookingId);

            const url = '<?= base_url('AdminController/fetchData') ?>';
            console.log(url);

            fetch(url, {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status == "success") {
                        Swal.fire({
                            title: 'Success!',
                            text: data.message,
                            icon: 'success',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Assuming there's a function to handle the deletion
                                location.reload();
                            }
                        });
                    } else {
                        Swal.fire(
                            'Error!',
                            data.message,
                            'error'
                        )
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });

      // try {
      //   const response = await fetch('<?= base_url('AdminController/fetchData') ?>', {
      //     method: 'POST', 
      //     headers: { 'Content-Type': 'application/json' },
      //    body: JSON.stringify({ id: bookingId }) 
      //   });

      //   const data = await response.json();
      //   console.log('Success:', data);
      // } catch (error) {
      //   console.error('Error:', error);
      // }
    }
</script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>
</html>
