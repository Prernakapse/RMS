<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Find a Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #1a1a1a;
            background-image:url('https://handluggageonly.co.uk/wp-content/uploads/2015/10/Paris-Restaurants-with-cool-views-7.jpg');
            background-repeat:no-repeat;
            background-size:cover;
            color: white;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 14%;
        }
        .thank-you-box {
            background:rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(255, 140, 0, 0.3);
        }
        .btn-book {
            background-color:#e5612f; 
            border: none;
            padding: 12px 20px;
            font-size: 18px;
            color: white;
            border-radius: 5px;
            transition: 0.3s;
        }
        .btn-book:hover {
            color:black;
            background-color:white;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="thank-you-box">
            <h1>Thank You for Checking Availability!</h1>
            <p>We found a table for you on **[Selected Date] at [Selected Time]** for **[Number of Guests]**.</p>
            <p>Click below to confirm your reservation.</p>
            <a href="book-a-table.html" class="btn btn-book">Book Your Table Now</a>
        </div>
    </div>

</body>
</html>
