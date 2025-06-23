<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
 <meta http-equiv="Content-Security-Policy" content="
  default-src 'self';
  img-src 'self' data: https:;
  style-src 'self' https://fonts.googleapis.com 'unsafe-inline';
  font-src https://fonts.gstatic.com;
  script-src 'self' 'unsafe-inline';
  object-src 'none';
  frame-ancestors 'none';
  base-uri 'self';
  form-action 'self';
">

<meta http-equiv="X-Frame-Options" content="DENY">
<meta http-equiv="X-Content-Type-Options" content="nosniff">

  <title>ASHWAGRID - Inventory  </title>
  <link rel="stylesheet" href="mobility.css">   
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="logo">
      <img src="images/ashwa.png" alt="ASHWAGRID Logo">
      <select class="dropdown"  id="redirectDropdown" onchange="redirectPage()">
        <option value="" selected disabled hidden>Choose Service</option>
        <option value="mobility.php">MOBILITY</option>
        <option value="manpower.php">MANPOWER</option>
      </select>
    </div>
   <script>
  function redirectPage() {
    var dropdown = document.getElementById("redirectDropdown");
    var selectedValue = dropdown.value;

    if (selectedValue) {
      window.location.href = selectedValue;
    }
  }

   document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('servicesToggle');
    const menu = document.getElementById('servicesMenu');

    toggle.addEventListener('click', function (e) {
      e.preventDefault();
      menu.classList.toggle('show');
    });

    // Close dropdown if clicking outside
    document.addEventListener('click', function (e) {
      if (!toggle.contains(e.target) && !menu.contains(e.target)) {
        menu.classList.remove('show');
      }
    });
  });
</script>

    <!-- NAVIGATION BAR  -->
    <nav>
      <ul>
        <li><a href="mobility.php"  >Home</a></li>
        <li><a href="aboutus.php" >About Us</a></li>
      <li class="dropdown1">
  <a >Services</a>
 <ul class="dropdown-menu1" id="servicesMenu">
  <li class="dropdown-arrow1"></li>
  <li><a href="corporate.php">Corporate Contact</a></li>
  <li><a href="rental.php">Car Rental Booking</a></li>
  <li><a href="uber.php">Uber Services</a></li>
</ul>
</li>
 <li><a href="Inventory.php" class="active">Inventor Page </a></li>
</ul>
    </nav>
  </header>
  <div class="login-container">
  <!-- LEFT PANEL -->
  <div class="login-left">
    <div class="logo-area">
      <img src="images/ashwa.png" class="main-logo" alt="Ashwagrid Logo">
      <h1>ASHWAGRID</h1>
    </div>

    <div class="contact-info">
      <h3>Contact Info</h3>
      <p><img src="images/phone.png" alt=""> +91 4636537657</p>
      <p><img src="images/email.png" alt=""> Ashwagrid@gmail.com</p>
      <p><img src="images/location.png" alt=""> xyz, office no. xx, Navi Mumbaio</p>
    </div>

    <div class="social-icons">
      <a href="#"><img src="images/facebook.png" alt=""></a>
      <a href="#"><img src="images/insta.png" alt=""></a>
      <a href="#"><img src="images/youtube.png" alt=""></a>
    </div>
  </div>

  <!-- RIGHT PANEL -->
  <div class="login-right">
    <img src="images/login-illustration.png" class="illustration" alt="Login Illustration">
    <form method="post" action="dashboard.php">
      <input type="text" name="username" placeholder="Username" required />
      <input type="password" name="password" placeholder="Password" required />
      <div class="forgot"><a href="#">Forgot Password?</a></div>
      <button type="submit" class="login-btn">Login</button>
    </form>
  </div>
</div>