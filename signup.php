<?php
    session_start();

    include("dp.php");

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $firstname =$_POST['fname'];
        $lastname =$_POST['lname'];
        $email =$_POST['eemail'];
        $password=$_POST['pass'];
        $cpassword =$_POST['cpass'];

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query ="insert into travel(fname,lname,eemail,pass,cpass) values('$firstname','$lastname',' $email','$password',' $cpassword')";

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
    <title>sign up</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="icon" href="imgg.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script>
    function form1(){
        var names=document.getElementById("name").value;
        var lnames=document.getElementById("lname").value;
        var emails=document.getElementById("email").value;
        var passwords=document.getElementById("password").value;
        var cpasswords=document.getElementById("cpassword").value;

        if(names==="")
    {
        alert("enter the first name");
        return false;
    }
    if(lnames==="")
    {
        alert("enter the last name");
        return false;
    }
    if(emails==="")
    {
        alert("enter the email");
        return false;
    }
    if(password=="")
    {
        alert("enter password");
        return false;
    }
    if(cpasswords==="")
    {
        alert("enter confirm password");
        return false;
    }
    

    }
   </script>
</head>
<body>
    <section class="id1">
        
        <div clsss="id2">
           <h1> SIGN UP</h1>
        </div>
        <form method="post">
        <div class="id">
        <lable>First Name:</lable>
        <input type="text" placeholder="enter first name" id="name" name="fname" required><br><br>
        </div>
        
        <div class="id">
            <label>last Name:</label>
            <input type="text" placeholder="enter last name" id="lname" name="lname" required><br><br>
        </div>

        <div class="id">
            <label>Email:</label>
            <input type="email" placeholder="enter email" id="email" name="eemail" required><br><br>
        </div>

        <div class="id">
            <label>password:</label>
            <input type="password" placeholder="enter password 8 char" id="password" name="pass" required><br><br>
        </div>

        <div class="id">
            <label>confirm password:</label>
            <input type="password" placeholder="enter password" id="cpassword" name="cpass" required><br>
        </div>
        <br>

        <div class="id">
            <button type="submit" onclick="form1()" >create account</button>
            <p> If you have account? <a href="login.php">login</a></p>
        </div>
        <p style="font-size: 20px;"> or</p>

        <div class="id7">
           <a href="https://accounts.google.com/b/0/AddMailService"> <i class="fa-brands fa-google fa-2x"></i></a>
            <a href="#"><i class="fa-brands fa-apple fa-2x"></i></a>

           <a href="#"> <i class="fa-brands fa-facebook fa-2x"></i></a>

        </div>
        <br>
    </form>

    </section>
</body>
</html>