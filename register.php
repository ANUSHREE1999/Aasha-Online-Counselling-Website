<!DOCTYPE html>
<html>
<title>Hold On Pain Ends </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<style>
img.dim{
  width:100%;
  height:800px;
}

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  position: relative;
  margin: auto;
}


/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


</style>
<body id="myPage">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="aasha.php" class="w3-bar-item w3-button w3-hide-small w3-hover-lightgrey"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="aasha.php" class="w3-bar-item w3-button w3-hide-small w3-hover-lightgrey">About Us</a>
  <a href="videos.php" class="w3-bar-item w3-button w3-hide-small w3-hover-lightgrey">Videos</a>
  <a href="games.php" class="w3-bar-item w3-button w3-hide-small w3-hover-lightgrey">Games</a>
  <a href="aasha.php" class="w3-bar-item w3-button w3-hide-small w3-hover-lightgrey">Contact</a>
  <a onclick="document.getElementById('Login01').style.display='block'" class="w3-bar-item w3-button w3-hide-small w3-hover-grey">Login</a>
  <a href="register.php" class="w3-bar-item w3-button w3-hide-small w3-hover-lightgrey">Register</a>

<!--Login Modal Content-->
<div id="Login01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom w3-black" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('Login01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" method="post">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php

$servername = "localhost";
$uname = "root";
$pass = "";
$dbname = "Aasha";

// Create connection
$conn = new mysqli($servername, $uname, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit();
}
echo "Connected successfully";


if (isset($_POST["username"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT id FROM users WHERE username='". mysqli_real_escape_string($conn, $username) ."' AND password='".mysqli_real_escape_string($conn, $password)."'";
        echo $sql . "<br>";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          header('Location: aasha.php');
        } 

} 

?>

 </div>

<!--Registration form-->

<br><br>
<h3 align="center">Registration Form</h3>
<div>
  <form  method="post">
      <input placeholder="Enter your username" id="username" name="username" type="text" class="validate">
      <br>

      <input placeholder="Enter your password" id="password" name="password" type="password" class="validate" pattern="[a-z][A-Z][0-9]{8}*">
      <br>

      <input placeholder="Confirm password" id="confirm-password" name="confirm" type="password" class="validate" pattern="[a-z][A-Z][0-9]{8}*">
      <br>

      <button class="waves-effect waves-light btn">Submit</button>
      </form>
</div>

<?php

$servername = "localhost";
$uname = "root";
$pass = "";

// Create connection
$conn = new mysqli($servername, $uname, $pass);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit();
}
echo "Connected successfully";

$sql = "CREATE DATABASE Aasha";
$conn->query($sql);
$sql = "USE Aasha";
$conn->query($sql); 

$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
password VARCHAR(30) NOT NULL,
username VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$conn->query($sql); 



if (isset($_POST["username"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirm = $_POST["confirm"];

        if ($password != $confirm) {
                echo "\nPlease try again";
                exit();
        }

        $sql = "SELECT id FROM users WHERE username=$username";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          alert("User already exists");
        } else {
          $sql = "INSERT INTO users(username, password) VALUES(?, ?)";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("ss", $username, $password);
          $stmt->execute();
        }

} 

?>
</div>



<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script>
// Automatic Slideshow - change image every 3 seconds
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
