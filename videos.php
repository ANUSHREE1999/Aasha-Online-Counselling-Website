<!DOCTYPE html>
<html>
<title>Hold On Pain Ends </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
img.mySlides{
  width:100%;
  height:800px;
}
</style>
<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2;" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
  <a href="#" class="w3-bar-item w3-button">Link 5</a>
</nav>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="aasha.php" class="w3-bar-item w3-button w3-hide-small w3-hover-lightgrey"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="aasha.php/#team" class="w3-bar-item w3-button w3-hide-small w3-hover-lightgrey">About Us</a>
  <a href="videos.php" class="w3-bar-item w3-button w3-hide-small w3-hover-lightgrey">Videos</a>
  <a href="games.php" class="w3-bar-item w3-button w3-hide-small w3-hover-lightgrey">Games</a>
  <a href="aasha.php/#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-lightgrey">Contact</a>
  <a onclick="document.getElementById('Login01').style.display='block'" class="w3-bar-item w3-button w3-hide-small w3-hover-grey">Login</a>

<!--Login Modal Content-->
<div id="Login01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom w3-black" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('Login01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-black">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>

    </div>
  </div>

 </div>


  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">About Us</a>
    <a href="#work" class="w3-bar-item w3-button">Videos</a>
    <a href="#pricing" class="w3-bar-item w3-button">Games</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#search" class="w3-bar-item w3-button">Search</a>
  </div>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4>Oh snap! We just showed you a modal..</h4>
      <h5>Because we can <i class="fa fa-smile-o"></i></h5>
    </header>
    <div class="w3-container">
      <p>Cool huh? Ok, enough teasing around..</p>
      <p>Go to our <a class="w3-text-teal" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
    </div>
    <footer class="w3-container w3-teal">
      <p>Modal footer</p>
    </footer>
  </div>
</div>

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>Welcome to Aasha</h2>
</div>


<!-- Image Header -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1">
<iframe src="https://www.youtube.com/embed/WjqiU5FgsYc" width="600" height="350" align="center">
<p>Your browser does not support iframes.</p>
</iframe>

<div class="w3-quarter">
<p>Pain, trouble and anxiety are subjective quantities. It is all about how you see yourself and accept yourself. 
There is always ample amount of hope for each of us in the world. He can come in the form of a companion who understands and even empathizes with your pain. 
We, at Aasha, wish to be that companion of yours!</p>
</div>
</div>
<br>

<div class="w3-row-padding w3-padding-64 w3-theme-l1">
<iframe src="https://www.youtube.com/embed/MJoczdESU24" width="600" height="350" align="center">
<p>Your browser does not support iframes.</p>
</iframe>

<div class="w3-quarter">
<p>Life will keep throwing problems at us. When you feel like all chances to taste success are slipping off your hand, just remember that "When one door closes, another will surely open."
We, at Aasha, aim to help open the doors to a whole new world for you! And, just like the girl in the story, we know our happiness lies in your smile.</p>
</div>
</div>
<br>



<!-- Container -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>

<!-- Video Row -->
<div class="w3-row-padding w3-center w3-padding-64" id="pricing">
    <h2>TOPICS</h2>
    <p>Empower your mind with our video series.</p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">How to deal with depression and anxiety?</p>
        </li>
        <li class="w3-padding-16"><iframe src="https://www.youtube.com/embed/eAK14VoY7C0" align="center">
<p>Your browser does not support iframes.</p>
</iframe></li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">How to deepen your understanding?</p>
        </li>
        <li class="w3-padding-16"><iframe src="https://www.youtube.com/embed/G3gpBYrbk-0" align="center">
<p>Your browser does not support iframes.</p>
</iframe></li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">How to increase your confidence?</p>
        </li>
        <li class="w3-padding-16"><iframe src="https://www.youtube.com/embed/I0iSpVJqiGg" align="center">
<p>Your browser does not support iframes.</p>
</iframe></li>
      </ul>
    </div>
</div>

<div class="w3-row-padding w3-center w3-padding-64" id="pricing">
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">What is real beauty?</p>
        </li>
        <li class="w3-padding-16"><iframe src="https://www.youtube.com/embed/L1FrBx_wkYU" align="center">
<p>Your browser does not support iframes.</p>
</iframe></li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">How to get rid of jealousy?</p>
        </li>
        <li class="w3-padding-16"><iframe src="https://www.youtube.com/embed/vmxC_2HNIWo" align="center">
<p>Your browser does not support iframes.</p>
</iframe></li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">How to focus on your goal?</p>
        </li>
        <li class="w3-padding-16"><iframe src="https://www.youtube.com/embed/AmTbx_8SMMw" align="center">
<p>Your browser does not support iframes.</p>
</iframe></li>
      </ul>
    </div>
</div>

<div class="w3-row-padding w3-center w3-padding-64" id="pricing">
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">How to stop wasting your time?</p>
        </li>
        <li class="w3-padding-16"><iframe src="https://www.youtube.com/embed/AwRfvtCpdiQ" align="center">
<p>Your browser does not support iframes.</p>
</iframe></li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">How to overcome loneliness?</p>
        </li>
        <li class="w3-padding-16"><iframe src="https://www.youtube.com/embed/y04OcY_4ttU" align="center">
<p>Your browser does not support iframes.</p>
</iframe></li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">How to stay motivated all the time?</p>
        </li>
        <li class="w3-padding-16"><iframe src="https://www.youtube.com/embed/t6Kw3n9CNrc" align="center">
<p>Your browser does not support iframes.</p>
</iframe></li>
      </ul>
    </div>
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
    <a class="w3-button w3-theme" href="#team"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

</body>
</html>
