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

  <title>ASHWAGRID - Blog </title>
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
        <li><a href="manpower.php">Home</a></li>
        <li><a href="who.php">Who Are We</a></li>
        <li><a href="AccessTheGrid.php">Access The Grid</a></li>
        <li><a href="joinTheGrid.php">Join The Grid</a></li>
        <li><a href="cvmaker.php">CV Maker</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
        <li><a href="blog.php"  class="active">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
  <!-- hero section -->
 <section class="blog-combined">
 <div class="blog-header">
  <h1>Insights, Tips & Stories From the Field</h1>
  <p>
    Explore helpful resources, job tips, industry trends, and success stories from our workers and partners. <br>
    Whether you're looking to improve your CV, understand the hiring process, or hear from people like you <br> — our blog is a space to learn and grow.
  </p>
  <div class="blog-header-logo-bg">
    <img src="images/19.png" alt="Ashwagrid Logo">
  </div>
</div>
<div class="blog-search-filter">
<div class="search-wrapper">
  <input type="text" id="searchInput" placeholder="Search Blog Posts">
  <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
    <path d="M10 2a8 8 0 105.29 14.29l5 5a1 1 0 001.42-1.42l-5-5A8 8 0 0010 2zm0 2a6 6 0 110 12 6 6 0 010-12z"/>
  </svg>
</div>
 <button id="filterBtn">🔧 Filters Results</button>
</div>


  <!-- Blog Card Grid Section -->
  <div class="blog-grid">
    <!-- Row 1: Large Cards -->
    <div class="blog-row row-large">
      <div class="blog-card large">
        <img src="https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg" alt="Blog 1">
        <h3>Grow Your Career</h3>
        <p>Tips and strategies for career development in a modern workforce.</p>
      </div>
      <div class="blog-card large">
        <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg" alt="Blog 2">
        <h3>Team Collaboration</h3>
        <p>How to improve communication and teamwork in hybrid offices.</p>
      </div>
    </div>

    <!-- Articles Section -->
<section class="blog-articles">
  <div class="article-card">
    <div class="article-content">
      <h3>Article 1</h3>
      <p class="date">23/4/2025</p>
      <p class="excerpt">In the 1500s, an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <a href="#" class="read-more">Read More</a>
    </div>
  </div>
    <div class="article-card">
    <div class="article-content">
      <h3>Article 1</h3>
      <p class="date">23/4/2025</p>
      <p class="excerpt">In the 1500s, an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <a href="#" class="read-more">Read More</a>
    </div>
  </div>
    <div class="article-card">
    <div class="article-content">
      <h3>Article 1</h3>
      <p class="date">23/4/2025</p>
      <p class="excerpt">In the 1500s, an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <a href="#" class="read-more">Read More</a>
    </div>
  </div>
    <div class="article-card">
    <div class="article-content">
      <h3>Article 1</h3>
      <p class="date">23/4/2025</p>
      <p class="excerpt">In the 1500s, an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <a href="#" class="read-more">Read More</a>
    </div>
  </div>
    <div class="article-card">
    <div class="article-content">
      <h3>Article 1</h3>
      <p class="date">23/4/2025</p>
      <p class="excerpt">In the 1500s, an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <a href="#" class="read-more">Read More</a>
    </div>
  </div>
    <div class="article-card">
    <div class="article-content">
      <h3>Article 1</h3>
      <p class="date">23/4/2025</p>
      <p class="excerpt">In the 1500s, an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <a href="#" class="read-more">Read More</a>
    </div>
  </div>

  <!-- Repeat .article-card as needed -->
</section>

    </div>
  </div>
</section>

<!-- FOOTER ********************** -->
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