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

  <title>ASHWAGRID - About Us</title>
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
        <li><a href="mobility.php" >Home</a></li>
        <li><a href="aboutus.php"  class="active">About Us</a></li>
     <li class="dropdown1">
      <a href="#">Services</a>
      <ul class="dropdown-menu">
        <li class="dropdown-arrow"></li>
        <li><a class="highlighted" href="corporate.php">Corporate Contact</a></li>
        <li><a class="highlighted" href="rental.php">Car Rental Booking</a></li>
        <li><a class="highlighted" href="uber.php">Uber Services</a></li>
      </ul>
    </li>

        <li><a href="inventory.php">Inventor Page </a></li>
      </ul>
    </nav>
  </header>
<!-- About Us + Features Section -->
<section class="about">
  <div class="aboutus">
    <h1>Mobility That Moves With You.</h1>
  <p>
    At AshwaGrid, we believe mobility should be seamless, stress-free, and tailored to your needs. Our approach isn't just about</p>
   <p> offering transport—it's about providing an experience you can trust every time you hit the road.</p>
   <p> Whether you're commuting to work, planning a weekend getaway, or exploring Mumbai's rich culture, our services are designed
  </p>
</div>
  <h2 class="section-title">What sets us apart?</h2>

  <div class="features">
    <div class="feature-card">
      <img src="https://i.imgur.com/MOGDq8O.png" alt="Driver Experience" />
      <a href="#">Driver-Inclusive Experience</a>
      <p>Every booking includes a trained, verified, and uniformed driver. No self-drive hassles—just sit back and relax.</p>
    </div>
    <div class="feature-card">
      <img src="https://i.imgur.com/Zbg9vXV.png" alt="Reliable Fleet" />
      <a href="#">Reliable & Clean Fleet</a>
      <p>We maintain a variety of cars—Sedans, SUVs, and premium vehicles—all regularly serviced and sanitized for your safety.</p>
    </div>
    <div class="feature-card">
      <img src="https://i.imgur.com/kzALi8s.png" alt="Multi-City" />
      <a href="#">Multi-City Coverage</a>
      <p>From daily local use to intercity travel like Mumbai to Pune or Nashik, we ensure safe and comfortable journeys.</p>
    </div>
    </div>
   <div class="features">
    <div class="feature-card">
      <img src="https://i.imgur.com/MOGDq8O.png" alt="mumbai darshan" />
      <a href="#">Tailored Mumbai Darshan</a>
      <p>For tourists and residents alike, our curated Mumbai Darshan packages let you experience the city's best with ease.</p>
    </div>
    <div class="feature-card">
      <img src="https://i.imgur.com/Zbg9vXV.png" alt="fair price" />
      <a href="#">Transparent & Fair Pricing</a>
      <p>No hidden charges. What you see is what you pay.</p>
    </div>
    <div class="feature-card">
      <img src="https://i.imgur.com/kzALi8s.png" alt="support" />
      <a href="#">24/7 Support</a>
      <p>Our support team is just a call away—before, during, and after your ride.</p>
    </div>
    </div>
  </div>
</section>
</body>
</html>
