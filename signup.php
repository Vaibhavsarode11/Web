<?php
require 'config.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["repass"];
   $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email' ");
   if(mysqli_num_rows($duplicate) > 0){
     echo
     "<script> alert('Username or Email Has Already Taken'); </script>";
   }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user(name,email,password) VALUES ('$name','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  
}}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="signup.css">

</head>
<body> 
    <section>
    <div class="logo">
        <img src="https://m.media-amazon.com/images/G/01/digital/video/avod/AV_Logo_150._CB430404026_.png">
    </div>

    <div class="innerbox">
        <h1 class="a">Create account</h1>
    <div class="form">
        <form action="" method="post">
        <p>
        <label class="a1" for="name">Your name</label>
        <input type="text" maxlength="50" id="customer name" name="name" autocomplete="on" placeholder="First and last name">
        </p>
        <p>
        <label class="a2" for="email">Email</label>
        <input type="text" maxlength="50" id="customer email" name="email" autocomplete="on">
        </p>

        <p>
        <label class="a3" for="password"> Password</label>
        <input type="password" maxlength="50" id="customer password" autocomplete="on" name="password" placeholder="At least 6 characters">
        </p>

        <!-- <i class="a4" ></i>
        <div class="a4">Passwords must be at least 6 characters.</div> -->

        <p>
        <label class="a5" for="repass">Re-enter password</label>
        <input type="password" maxlength="50" id="customer email" name="repass">
        </p>

        <button type="submit" style="height: 30px;" name="submit">Create your Amazon account</button> </form>
        <p>By creating an account, you agree to Amazon</p>
        <a href="a" class="icon">Conditions of Use and Privacy Notice.</a>
       
    </div>
        <p>Already have a account? <a href="login.php">Login &#129170</a></p>
    </div>
</section>
</body>
</html>