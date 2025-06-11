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

  <title>ASHWAGRID - Mobility </title>
  <link rel="stylesheet" href="mobility.css">   
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="logo">
      <img src="images/ashwa.png" alt="ASHWAGRID Logo">
      <select class="dropdown"  id="redirectDropdown" onchange="redirectPage()">
        <option value="" selected disabled hidden>Choose Service</option>
        <option value="">MOBILITY</option>
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
        <li><a href="mobility.php" class="active" >Home</a></li>
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


        <li><a href="#">Inventor Page </a></li>
      </ul>
    </nav>
  </header>
<main class="hero-section">
  <div class="hero-content">
    <h1>Three Ways to Move. One Platform to Choose.</h1>
    <p>AshwaGrid Mobility offers three seamless services to meet every travel and transport need</p>
  </div>

  <div class="card-container"> 
    <div class="card">
      <img src="images/7.png" alt="Car Rental">
      <div class="card-content">
        <h3>Car Rental</h3>
        <p>Premium and budget vehicles for daily and short-term use.</p>
      </div>
    </div>

    <div class="card">
      <img src="images/8.png" alt="City-to-City Ride">
      <div class="card-content">
        <h3>City-to-City Ride</h3>
        <p>Comfortable intercity rides at affordable prices.</p>
      </div>
    </div>

    <div class="card">
      <img src="images/9.png" alt="Explore Mumbai">
      <div class="card-content">
        <h3>Explore Mumbai</h3>
        <p>Explore the city with guided tours and pickup/drop.</p>
      </div>
    </div>
  </div>
</main>

   
<footer>
    <div class="footer-logo">
      <img src="images/ashwa.png" alt="Ashwagrid Logo">
    </div>
    <div class="footer-column">
      <h4>Quick Links</h4>
      <a href="manpower.php">Home</a>
      <a href="who.php">Who Are We</a>
      <a href="AccessTheGrid.php">Access The Grid</a>
      <a href="joinTheGrid.php">Join The Grid</a>
    </div>
    <div class="footer-column">
      <h4>Cities We Offer</h4>
      <a href="#">Mumbai</a>
      <a href="#">Pune</a>
      <a href="#">Nashik</a>
      <a href="#">Nagpur</a>
      <a href="#">Goa</a>
    </div>
    <div class="footer-column">
      <h4>Contact Info</h4>
      <a><strong>+91 4636537657</strong></a><br>
      <a>Ashwagrid@gmail.com</a><br>
      <a>xyz, office no. xx,<br> Navi Mumbaio</a>
      <div class="footer-icons">
  <a href="#" target="_blank"><img src="images/facebook.png" alt="facebook"></a>
  <a href="https://www.instagram.com/phelixcreatives/" target="_blank"><img src="images/insta.png" alt="instagram"></a>
  <a href="mailto:ashwagrid@gmail.com"><img src="images/email.png" alt="email"></a>
</div>
    </div>
  </footer>
</body>
</html>
