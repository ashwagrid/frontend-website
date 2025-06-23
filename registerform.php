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

  <title>ASHWAGRID - Employee Registration Form</title>
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
        <li><a href="joinTheGrid.php"  class="active">Join The Grid</a></li>
        <li><a href="cvmaker.php">CV Maker</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
        <li><a href="blog.php" >Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
<!-- HERO SECTION -->
<div class="form-container">
    <div class="form-box">
        <h1>Employee Registration Form</h1>
        <p>Please fill out the form for an HR department to complete your registration. An HR manager will contact you with further instructions.</p>
  <label for="Name">Name</label><br>
       <form action="#" method="post">
    <div class="input-row">
        <div class="form-group">
            <input type="text" name="first_name" id="first_name" placeholder="First Name" required>
        </div>

        <div class="form-group">
            <input type="text" name="middle_name" id="middle_name" placeholder="Middle Name">
        </div>

        <div class="form-group">
            <input type="text" name="last_name" id="last_name" placeholder="Last Name" required>
        </div>
    </div>

    <div class="input-row">
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob" required>
        </div>

        <div class="form-group">
            <label for="apply_as">Apply As</label>
            <select name="apply_as" id="apply_as" required>
                <option value="" disabled selected>Choose Role</option>
                <option value="Intern">Intern</option>
                <option value="Driver">Driver</option>
                <option value="Accountant">Accountant</option>
                <option value="Fleet Manager">Fleet Manager</option>
                <option value="Admin">Admin</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <textarea name="address" id="address" rows="3" placeholder="Address" required></textarea>
    </div>

    <div class="input-row">
        <div class="form-group">
            <label for="phone">Phone No.</label>
            <input type="tel" name="phone" id="phone" placeholder="+91" required>
        </div>

        <div class="form-group">
            <label for="email">Email ID</label>
            <input type="email" name="email" id="email" placeholder="@gmail.com" required>
        </div>
    </div>

<div class="button-container">
  <button type="submit">Register Me ➝</button>
</div>
</form>

    </div>

    <div class="illustration">
        <img src="images/18.png" alt="Illustration">
    </div>
</div>



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