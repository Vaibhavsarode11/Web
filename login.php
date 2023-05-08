<?php
@include 'config.php'; 
  
// session_start(); 
 
if(isset($_POST['submit'])){ 
                    $error = ""; 
                    $user = $_POST['email']; 
                    $pass = $_POST['password']; 
                    
                    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$user' "); 
                    if($result->num_rows>0) 
                    {  
                    //   session_start(); 
                      $data = $result->fetch_assoc(); 
                      $_SESSION['Id']=$data['id']; 
                      $_SESSION['user'] = $data; 
                      header('location:web.php'); 
                     } 
                    else 
                    { 
                      $error = "<div class='alert alert-warning text-center rounded-0'>Username or password wrong try again!</div>"; 
                        header("location:login.php");
                    } 
                 
 
}; 
// if(isset($_POST['forget']))header('location: forget.php'); 
// if(isset($_POST['admin']))header('location: bank/login.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=-]., initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <section>
        <div class="logo">
            <img src="https://m.media-amazon.com/images/G/01/digital/video/avod/AV_Logo_150._CB430404026_.png">
        </div>
        
            <div class="innerbox">
                <h1 class="a">Sign in</h1>
                <div class="form">
                    <form action="" method="post">
                        <p>
                            <label for="email" class="a1">Email or mobile phone number</label>
                            <input type="text" maxlength="50" id="email" name="email" autocomplete="on" required>
                        </p>

                        <p>
                            <label for="password" class="a3">Password </label> <a href="#" class="password">Forgot your
                                password?</a>
                            <input type="text" maxlength="50" id="password" name="password" autocomplete="on" required>
                        </p>


                        <button type="submit" class="btn1" id="submit" name="submit">Sign in</button>
                    </form>
                    <p>By continuing, you agree to Amazon
                        <a href="#" class="icon">Conditions of Use and Privacy Notice.</a>
                    </p>
                </div>

                <!-- <div class="s">
                    <label><input type="checkbox"><span>Keep me signed in.
                            <a href="#" class="s1">Details</a>
                        </span></label> -->


                    <p class="new">New to Amazon?</p>
                    <button class="btn2"><a class="n" href="signup.php"
                            style="text-decoration: none; color: black;">Create your Amazon account</a></button>
                </div>
            </div>
            <br>
            <div class="last">
                <a href="#">Terms and Privacy Notice </a> &#160 &#160
                <a href="#">Send us feedback </a> &#160 &#160
                <a href="#">Help</a> <br> <br>
                <span class="last1">© 1996-2023, Amazon.com, Inc. or its affiliates</span>
            </div>
    </section>
    
</body>

</html>