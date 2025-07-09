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
        <option value="mobility.php">MOBILITY</option>
        <option value="manpower.php">MANPOWER</option>
      </select>
    </div>
   <script>
    // FOR REDIRECT DROPDOWN OF MANPOWER AND MOBILITY 
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
    <li><a href="mobility.php" class="active">Home</a></li>
    <li><a href="aboutus.php">About Us</a></li>
    
    <li class="dropdown1">
      <a href="#">Services</a>
      <ul class="dropdown-menu">
        <li class="dropdown-arrow"></li>
        <li><a class="highlighted" href="corporate.php">Corporate Contact</a></li>
        <li><a class="highlighted" href="rental.php">Car Rental Booking</a></li>
        <li><a class="highlighted" href="uber.php">Uber Services</a></li>
      </ul>
    </li>

    <li><a href="Inventory.php">Inventory Page</a></li>
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
      <img src="images/M3.png" alt="Car Rental">
      <div class="card-content">
        <h3>Car Rental</h3>
        <p>Premium and budget vehicles for daily and short-term use.</p>
      </div>
    </div>

    <div class="card">
      <img src="images/M4.png" alt="City-to-City Ride">
      <div class="card-content">
        <h3>City-to-City Ride</h3>
        <p>Comfortable intercity rides at affordable prices.</p>
      </div>
    </div>

    <div class="card">
      <img src="images/M1.png" alt="Explore Mumbai">
      <div class="card-content">
        <h3>Explore Mumbai</h3>
        <p>Explore the city with guided tours and pickup/drop.</p>
      </div>
    </div>
  </div>
</main>

  
</body>
</html>
