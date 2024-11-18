<?php
    session_start();

    include("dp.php");

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $email =$_POST['eemail'];
        $password=$_POST['pass'];

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query ="select * from travel where eemail='$email' limit 1";
            $result=mysqli_query($con,$query);

            if($result)
            {
                if($result && mysqli_num_rows($result)>0)
                {
                    $user_data=mysqli_fetch_assoc($result);
                    if($user_data['pass']==$password)
                    {
                        header("Location: home_dynamic.html");
                        die;
                    }
                }
            }
            echo"<script type='text/javascript'> alert('wrong username or password')</script>";
        }
        else
        {
            echo"<script type='text/javascript'> alert('wrong username or password')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="imgg.png">
</head>
<body>
    
    <div id="super">
        
        <form method="post">
            <br><br>
            <h2 class="id">Login</h2><br><br>
            <br>
            <div class="login">
        <input type="text" placeholder="Username or Email" name="eemail" required>
        </div>
        <br><br>
        <div class="login">
        <input type="password" placeholder="Password" name="pass" required>
    </div>

        <br><br>
        <div class="logins">
        <input type="submit" placeholder="sign up" style="background-color: white;">
    </div>
    <div class="poo">
       <a href="forgot password" style="text-decoration: none;"> <h6>forget password?</h6></a>
    </div>
        
        </form>
    </div>
    
</body>
</html>