<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
 <meta http-equiv="Content-Security-Policy" content="
  default-src 'self';
  img-src 'self' data: https:;
  style-src 'self' https://fonts.googleapis.com;
  font-src https://fonts.gstatic.com;
  script-src 'none';
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
        <li><a href="mobility.php" >Home</a></li>
        <li><a href="aboutus.php"  class="active">About Us</a></li>
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
