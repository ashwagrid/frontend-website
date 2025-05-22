<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Security-Policy" content="
  default-src 'self';
  img-src 'self' data: https:;
  style-src 'self' https: 'unsafe-inline';
  font-src 'self' https:;
  script-src 'none';
">
<meta http-equiv="X-Frame-Options" content="DENY">
<meta http-equiv="X-Content-Type-Options" content="nosniff">

  <title>ASHWAGRID - PeopleOps Grid</title>
  <link rel="stylesheet" href="manpower.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="logo">
      <img src="images/ashwa.png" alt="ASHWAGRID Logo">
      <select class="dropdown">
         <option value="" selected disabled hidden>Choose Service</option>
        <option>Service 1</option>
        <option>Service 2</option>
      </select>
    </div>
    <!-- NAVIGATION BAR  -->
    <nav>
      <ul>
        <li><a href="manpower.php" class="active">Home</a></li>
        <li><a href="who.php">Who Are We</a></li>
        <li><a href="join.php">Access The Grid</a></li>
        <li><a href="#">Join The Grid</a></li>
        <li><a href="#">CV Maker</a></li>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>
  <!-- HERO SECTION -->
 <section class="hero">
    <img src="images/6.png" alt="Hero Image" class="hero-img" />
    <div class="overlay">
      <div class="container">
        <div class="hero-text">
  <p>The <strong>PeopleOps Grid</strong><br>
      powering<br>
      India's next-gen<br>
      operations</p>
  <div class="buttons">
    <a href="#" class="btn ">Access The Grid</a>
    <a href="#" class="btn">Join The Grid</a>
  </div>
</div>

      </div>
    </div>
 
  </section>
  <!-- HERO SECTION ENDED -->
   <script src="script.js"></script>
</body>
</html>
