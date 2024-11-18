<?php
    session_start();

    include("dpp.php");

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $destination =$_POST['destination'];
        $startdate =$_POST['start'];
        $enddate =$_POST['end'];
        $name=$_POST['name'];
        $email =$_POST['email'];
        $phone=$_POST['phone'];

        if(!empty($email) && !empty($phone) && !is_numeric($email))
        {
            $query ="insert into bookingg(destination,start,end,name,email,phone) values('$destination','$startdate','$enddate','$name', '$email','$phone')";

            mysqli_query($con,$query);

            echo"<script type='text/javascript'> alert('successfully register')</script>";
            
        }
        else{
            echo"<script type='text/javascript'> alert('please enter valid information')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Booking System</title>
    <link rel="stylesheet" href="booking.css">
    <link rel="icon" href="imgg.png">
</head>
<body>
    <div class="booking-container">
        <h1>Travel Booking System</h1>
        <form action="#" method="POST" class="booking-form">
            <div class="form-group">
                <label for="destination">Destination:</label>
                <select id="destination" name="destination" required>
                    <option value="">Select a destination</option>
                    <ul>
                    <option value="korea">korea</option>
                         <li>busan</li>
                </ul>
                    <option value="india">india</option>
                    <option value="paris">Paris</option>
                    <option value="new_york">New York</option>
                    <option value="tokyo">Tokyo</option>
                    <option value="sydney">Sydney</option>

                </select>
            </div>
            
            <div class="form-group">
                <label for="start-date">Start Date:</label>
                <input type="date" id="start-date" name="start" required>
            </div>

            <div class="form-group">
                <label for="end-date">End Date:</label>
                <input type="date" id="end-date" name="end" required>
            </div>

            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="Your full name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Your email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Your phone number" required>
            </div>

            <div class="form-group">
                <button type="submit">Book Now</button>
            </div>
        </form>
    </div>
</body>
</html>
