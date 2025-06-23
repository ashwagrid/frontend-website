
<!-- **************************************  CSS IS IN MANPOWER.CSS  **************************************************************** -->
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

  <title>ASHWAGRID - Who Are We</title>
  <link rel="stylesheet" href="manpower.css">   
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
</script>

    <!-- NAVIGATION BAR  -->
    <nav>
      <ul>
        <li><a href="manpower.php" >Home</a></li>
        <li><a href="who.php"  class="active ">Who Are We</a></li>
        <li><a href="AccessTheGrid.php">Access The Grid</a></li>
        <li><a href="joinTheGrid.php">Join The Grid</a></li>
        <li><a href="cvmaker.php">CV Maker</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
  <!-- HERO SECTION -->
 <section class="hero-section1 highlight-section">
    <div class="hero-text1">
      <h1><span class="slide-in blue">Driven by Purpose,</span></h1><br>
      <h1><span class="slide-in orange delay">Defined by Service.</span></h1>
      <br>
      <p>AshwaGrid is a next- generation manpower and mobility solutions providers. We specialize in connecting skilled <br>
      drivers and manpower with businesses and individuals across cities. With a strong focus on safety,<br>
       professionalism, and convenience, we ensure every ride and recruitment is reliable.      </p>
      <br>
    </div>
    <div class="hero-images1">
      <img src="images/7.png" alt="Image 1">
      <img src="images/8.png" alt="Image 2">
      <img src="images/9.png" alt="Image 3">
      <img src="images/10.png" alt="Image 4">
      <img src="images/11.png" alt="Image 5">
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
  <a href="https://www.instagram.com/" target="_blank"><img src="images/insta.png" alt="instagram"></a>
  <a href="mailto:ashwagrid@gmail.com"><img src="images/email.png" alt="email"></a>
</div>
    </div>
  </footer>
</body>
</html>
