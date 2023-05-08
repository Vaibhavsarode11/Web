<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Prime Video</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/x-icon" href="play button.png">
  

 
</head>

<body>

  <div class="navbar">
    <ul>
      <li>
        <a href="#">
          <span class="span-logo">
            <img src="images/image3.png" />
          </span>
        </a>
      </li>
      <li><a href="#Home">Home</a></li>
      <li><a href="#Store">Store</a></li>
      <li><a href="channel.html">Channels</a></li>
      <li><a href="Categories.html">Categories</a></li>
      <li><a href="My Stuff">My Stuff</a></li>
      <button class="button">Try for free</button>
    </ul>
  </div>

  <div id="box1">
    <div class="header1">
      <h1>Welcome to Prime Video</h1>
      <p>Watch the latest movies, TV shows, and award-winning Amazon Originals</p>
      <!-- <button class="button1" type="submit">
        <div>
          <span>Sign in to join Prime</span>
        </div>
      </button> -->
    </div>
  </div>

  <div id="box2">
    <div class="header2">
      <h1>Movie rentals on Prime Video</h1>
      <p>Early Access to new movies, before digital subscription</p>
      <button class="button2" type="submit">
        <div>
          <span>Rent Now</span>
        </div>
      </button>
    </div>
  </div>

  <div class="flex-container">
    <div id="box3">
      <div class="header3">
        <h1>Your favorite channels all in one place</h1>
        <p>With Prime Video Channels, find shows and movies from your favorite channels all in one place. Enjoy with an
          add-on subscription to Channels of your choice</p>
      </div>
    </div>

    <div id="box4">
      <div class="header4">
        <img src="https://m.media-amazon.com/images/G/31/AmazonVideo/2021/Channels/MLP/LionsgatePlay-426X2946_V1.jpg"
          alt="LionsgatePlay">
        <img src="https://m.media-amazon.com/images/G/31/AmazonVideo/2021/Channels/MLP/426x294_Discovery.jpg"
          alt="Discovery">
        <img src="https://m.media-amazon.com/images/G/31/AmazonVideo/2021/Channels/MLP/Erosnow-426X2948_V1.jpg"
          alt="Erosnow">
        <img src="https://m.media-amazon.com/images/G/31/AmazonVideo/2021/Channels/MLP/426x294_MANORAMAMAX.jpg"
          alt="MANORAMAMAX">
        <img src="https://m.media-amazon.com/images/G/31/AmazonVideo/2021/Channels/MLP/hoichoi-426X2946_V1.jpg"
          alt="hoichoi">
        <img src="https://m.media-amazon.com/images/G/31/AmazonVideo/2021/X-site/MLP/Channels/Vrott.png" alt="Vrott">
        <img src="https://m.media-amazon.com/images/G/31/AmazonVideo/2021/X-site/MLP/Channels/Amc.png" alt="Amc">
        <img src="https://m.media-amazon.com/images/G/31/AmazonVideo/2021/Channels/MLP/Docubay-426X2947_V1.jpg"
          alt="TV Docubay">
        <img src="https://m.media-amazon.com/images/G/31/AmazonVideo/2021/Channels/MLP/Mubi-426X2946_V1.jpg" alt="Mubi">
        <img src="https://m.media-amazon.com/images/G/31/AmazonVideo/2021/X-site/MLP/Channels/iWonder.png"
          alt="iWonder">
        <img src="https://m.media-amazon.com/images/G/31/AmazonVideo/2021/X-site/MLP/Channels/Stingray.png"
          alt="Stingray">
        <img
          src="https://m.media-amazon.com/images/G/31/AmazonVideo/2021/X-site/MLP/Channels/426x294_CuriosityStream.png"
          alt="CuriosityStream">
      </div>
    </div>
  </div>


  <div id="box5">
    <div class="header5">
      <h1>Even better with Fire TV Stick</h1>
      <p>The biggest movies and TV shows are always better on a big screen. Simply plug in your Amazon Fire TV Stick and
        stream on any HDTV. Press the voice button on the remote and say the name of the title you want to watch to find
        it in seconds.
      </p>
      <button class="button5" type="Get started">
        <div>
          <span>
           <a href="login.html" style="text-decoration: none; color: #fff;">Get started</a>
          </span>
        </div>
      </button>
    </div>
  </div>

  <div id="box6">
    <div class="header6">
      <h1>Family Friendly</h1>
      <p>With easy to use Parental Controls and a dedicated kids page, enjoy secure, ad-free kids entertainment. Kids can enjoy popular TV shows like Peppa Pig, Powerpuff Girls, and Chhota Bheem.</p>
      <button class="button6" type="Get started">
      <span>
        <a href="login.html" style="text-decoration: none; color: #fff;"> Get started</a>
      </span>
    </button>
    </div>
  </div>

  <div id="box7">
    <div class="header7">
      <img src="https://m.media-amazon.com/images/G/01/digital/video/acquisition/web_footer_logo._CB462908456_.png" alt="Amazon">

      <p class="q1">
        <span>
          <a>
            Terms and Privacy Notice
          </a>
        </span>
        &nbsp;
        <span>
          <a>
            Send us feedback
          </a>
        </span>
        &nbsp;
        <span>
          <a>
            Help
          </a>
        </span>
        &nbsp;
      </p>

      <p class="q2">
        <span>
        <a>
          © 1996-2023, Amazon.com, Inc. or its affiliates
        </a>
      </span>
      </p>
   
    </div>
  </div>

  </ul>
</body>

</html>