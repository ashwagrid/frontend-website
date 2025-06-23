<!-- CSS IN COMBINE.CSS LINE 642 ******************************************************************************* -->


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
  <meta http-equiv="X-Content-Type-Options" content="nosniff">

  <title>ASHWAGRID - Contact</title>
  <link rel="stylesheet" href="combine.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- Header -->
  <header>
    <div class="logo">
      <img src="images/ashwa.png" alt="ASHWAGRID Logo">
      <select class="dropdown" id="redirectDropdown" onchange="redirectPage()">
        <option value="" selected disabled hidden>Choose Service</option>
        <option value="mobility.php">MOBILITY</option>
        <option value="manpower.php">MANPOWER</option>
      </select>
    </div>
    <nav>
      <ul>
        <li><a href="manpower.php">Home</a></li>
        <li><a href="who.php">Who Are We</a></li>
        <li><a href="AccessTheGrid.php">Access The Grid</a></li>
        <li><a href="joinTheGrid.php">Join The Grid</a></li>
        <li><a href="cvmaker.php">CV Maker</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php" class="active">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Contact Section -->
  <section class="contact-wrapper">
  <div class="form-section">
    <h2>Inquiry Now To Know More</h2><br>
    <form>
      <div class="form-group">
        <label>Name</label>
        <input type="text" placeholder="Your Name" class="custom-placeholder" />
      </div><br>

      <div class="form-group">
        <label>Inquiry For</label>
        <select>
          <option>Choose The Options</option>
          <option>Request Manpower</option>
          <option>Mobility Service</option>
        </select>
      </div><br>

      <div class="form-group">
        <label>Inquiry Details</label>
        <textarea rows="4" placeholder="Write Down Your Inquiry" class="custom-placeholder"></textarea>
      </div><br>

      <div class="form-row">
        <div class="form-group phone">
          <label>Phone No.</label>
          <input type="tel" placeholder="+91" class="custom-placeholder"/>
        </div>
        <div class="form-group email">
          <label>Email ID</label>
          <input type="email" placeholder="@gmail.com" class="custom-placeholder align-right"/>
        </div>
      </div>


      <button type="submit">Submit &#x2794;</button>
    </form>
  </div>

  <div class="image3">
    <img src="images/666.png" alt="Inquiry" />
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
