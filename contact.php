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
    connect-src 'self' https://script.google.com https://script.googleusercontent.com;
  ">
  <meta http-equiv="X-Content-Type-Options" content="nosniff">
  <title>ASHWAGRID - Contact</title>
  <link rel="stylesheet" href="combine.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="Google Sheet.css">
</head>

<body>

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
          <li><a href="loading-page.php" class="active">CV Maker</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
      
        <li><a href="contact.php" class="active">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="contact-wrapper">

    <div class="container">
      <form method="post"
        action="https://script.google.com/macros/s/AKfycbwXo0lMWkXTcXmrOCUFZSTF-caHxSMeN4QFGugQbgJe3d6Z6e8WOgTlwaD0StOYMlTbDg/exec"
        name="contact-form">
        <h4>Inquiry Now To Know More</h4>
        <input type="text" name="your-name" placeholder="Name">
        <label>Inquiry For</label>
        <select name="inquiryFor" required>
          <option value="">Choose The Options</option>
          <option value="Request Manpower">Request Manpower</option>
          <option value="Mobility Service">Mobility Service</option>
        </select>
        <input type="text" name="inquiry-details" placeholder="Inquiry Details">
        <input type="number" name="your-phone" placeholder="Phone No">
        <input type="email" name="your-email" placeholder="Email">
        <input type="submit" value="Submit" id="submit">
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
    </div>
    <div class="footer-column">
      <h4>Contact Info</h4>
      <a href="tel:+918369733565"><strong>+91 8369733565</strong></a><br>
      <a href="mailto:connect@ashwagrid.com"><strong>connect@ashwagrid.com</strong></a><br>
      <a href="https://www.google.com/maps?q=S+137,+2nd+Floor,+Haware+Fantasia+Business+Park,+Sec+30A,+Vashi,+Navi+Mumbai,+Maharashtra+400703"
        target="_blank">
        S 137, 2<sup>nd</sup> Floor, Haware Fantasia Business Park, Sec 30A, Vashi, Navi Mumbai
      </a>
      <div class="footer-icons">
        <a href="#"><img src="images/facebook.png" alt="facebook"></a>
        <a href="https://www.instagram.com/ashwagrid.hr/"><img src="images/insta.png" alt="instagram"></a>
        <a href="https://wa.me/918369733565"><img src="images/whatsapp.png" alt="whatsapp"></a>
      </div>
    </div>
  </footer>
  <script src="Google Sheet.js"></script>

</body>

</html>