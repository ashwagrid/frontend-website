<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
 <meta http-equiv="Content-Security-Policy" content="
  default-src 'self';
  img-src 'self' data: https:;
  style-src 'self' https://fonts.googleapis.com;
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

 
function validateCorporateForm() {
  const phone = document.querySelector('input[name="phone"]').value.trim();
  const phonePattern = /^[0-9]{10}$/;

  if (!phonePattern.test(phone)) {
    alert("Please enter a valid 10-digit phone number.");
    return false;
  }

  return true; // allow submission
}


</script>

    <!-- NAVIGATION BAR  -->
     <nav>
      <ul>
        <li><a href="mobility.php" >Home</a></li>
        <li><a href="aboutus.php" >About Us</a></li>
      <li class="dropdown1">
  <a class="active">Services</a>
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


<section class="rental">
    <div class="rental-text">
      <h1>Your Ride, Your Rules.</h1>
      <p> Select from our fleet of reliable, AC-equipped cars — <br>
      tailored for comfort, affordability, and smooth travel. <br>
       Whether you need a solo ride or a group travel option, <br>
        we have the right car for you. Just fill in your travel <br>
        details, and we'll show you the price before you <br>
        confirm </p>
</div>
</section>
 <div class="welcome-section">
    <h2>Welcome To AshwaGrid Mobility Service</h2>
    <p>
      Budget trips, Daily errands, City rides, Business travel, Comfortable intercity travel, Family/group trips,
      Mumbai Darshan <br>
       ALL-IN-ONE Solution is AshwaGrid...!
    </p>
  </div>


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
  <!-- script.js line 32 ************************************************* -->
   <script src="script.js"></script>
</body>
</html>
