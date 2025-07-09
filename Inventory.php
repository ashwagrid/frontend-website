<!-- Css in in Mobility.css line 911 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Security-Policy" content="
  default-src 'self';
  img-src 'self' data: https:;
  style-src 'self' https: 'unsafe-inline';
  font-src 'self' https:;
  script-src 'self' 'unsafe-inline';
">

<meta http-equiv="X-Frame-Options" content="DENY">
<meta http-equiv="X-Content-Type-Options" content="nosniff">

  <title>ASHWAGRID - Inventory  </title>
  <link rel="stylesheet" href="mobility.css">   
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">


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
// FOR SERVICE DROPDOWN
document.addEventListener("DOMContentLoaded", function () {
  const dropdownToggle = document.querySelector(".dropdown-toggle");
  const dropdownMenu = document.getElementById("servicesMenu");

  // Toggle dropdown on click
  dropdownToggle.addEventListener("click", function (e) {
    e.preventDefault();
    e.stopPropagation(); // prevent the document click event
    dropdownMenu.classList.toggle("show");
  });

  // Close dropdown when clicking outside
  document.addEventListener("click", function (e) {
    if (!e.target.closest(".dropdown1")) {
      dropdownMenu.classList.remove("show");
    }
  });

  // Optional: close dropdown when clicking an item inside
  dropdownMenu.addEventListener("click", function () {
    dropdownMenu.classList.remove("show");
  });
});
</script>

    <!-- NAVIGATION BAR  -->
    <nav>
      <ul>
        <li><a href="mobility.php"  >Home</a></li>
        <li><a href="aboutus.php" >About Us</a></li>
      <li class="dropdown1">
      <a href="#">Services</a>
      <ul class="dropdown-menu">
        <li class="dropdown-arrow"></li>
        <li><a class="highlighted" href="corporate.php">Corporate Contact</a></li>
        <li><a class="highlighted" href="rental.php">Car Rental Booking</a></li>
        <li><a class="highlighted" href="uber.php">Uber Services</a></li>
      </ul>
    </li>
 <li><a href="Inventory.php" class="active">Inventor Page </a></li>
</ul>
    </nav>
  </header>
 <div class="login-container">
  <!-- LEFT PANEL -->
  <div class="login-left">
    
    <!-- Top branding over background -->
    <div class="login-branding">
      <img src="images/ashwa.png" class="main-logo" alt="Ashwagrid Logo" />
    </div>

    <!-- Bottom contact info section -->
    <div class="contact-box">
      <div class="contact-info">
  <h3>Contact Info</h3>
  <a href="tel:+918369733565"><i class="fas fa-phone"></i><strong>+91 8369733565</strong></a>
  <a href="mailto:connect@ashwagrid.com?subject=Inquiry&body=Hello AshwaGrid Team,"><i class="fas fa-envelope"></i><strong>connect@ashwagrid.com</strong></a>
  <a href="https://www.google.com/maps?q=S+137,+2nd+Floor,+Haware+Fantasia+Business+Park,+Sec+30A,+Vashi,+Navi+Mumbai,+Maharashtra+400703" target="_blank"><i class="fas fa-map-marker-alt"></i> <strong>S 137, 2<sup>nd</sup> Floor, Haware Fantasia Business Park,<br> Sec 30A, Vashi, Navi Mumbai</strong></a>
</div>


      <div class="social-icons">
        <a href="#" target="_blank"><img src="images/facebook.png" alt=""></a>
        <a href="https://www.instagram.com/ashwagrid.hr/" target="_blank"><img src="images/insta.png" alt=""></a>
        <a href="https://wa.me/918369733565" target="_blank"><img src="images/whatsapp.png" alt=""></a>
      </div>
    </div>
  </div>


  <!-- RIGHT PANEL -->
  <div class="login-right">
    <img src="images/M9.png" class="illustration" alt="Login Illustration">
    <form method="post" action="dashboard.php">
      <input class="inventory" type="text" name="username" placeholder="Username" required />
      <input  class="inventory" type="password" name="password" placeholder="Password" required />
      <div class="forgot"><a href="#">Forgot Password?</a></div>
      <button type="submit" class="login-btn">Login</button>
    </form>
  </div>
</div>
</body>
</html>