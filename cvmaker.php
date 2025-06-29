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

  <title>ASHWAGRID - CV Maker </title>
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

  window.onload = function () {
    const navLinks = document.querySelectorAll('nav ul li a');
    const currentUrl = window.location.pathname;

    navLinks.forEach(link => {
      const href = link.getAttribute('href');
      if (currentUrl.endsWith(href)) {
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });
  };
</script>


    <!-- NAVIGATION BAR  -->
    <nav>
      <ul>
        <li><a href="manpower.php" >Home</a></li>
        <li><a href="who.php">Who Are We</a></li>
        <li><a href="AccessTheGrid.php">Access The Grid</a></li>
        <li><a href="joinTheGrid.php">Join The Grid</a></li>
        <li><a href="cvmaker.php" class="active">CV Maker</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="cvmaker">
    <div class="cvmaker-text">
      <div class="left-content">
        <h1>Build Your CV in Minutes</h1>
        <h2>Free!</h2>
        <p>AshwaGrid is a next- generation manpower and mobility <br>
         solutions providers. We specialize in connecting skilled drivers <br>
          and manpower with businesses and individuals across cities. <br>
           With a strong focus on safety, professionalism, and convenience, <br> we ensure every ride and recruitment is reliable.</p>
      </div>
<button onclick="window.location.href='cvform.php'">Create Your CV</button>
    </div>
    <div class="cvmaker-logo">
  <img src="images/15.gif" alt="Animated Logo" class="logo-video" />
</div>

</section>
   
</body>
</html>