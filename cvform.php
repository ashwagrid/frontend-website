<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>ASHWAGRID - CV Maker</title>
<link rel="stylesheet" href="allforms.css" />
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
   <section class="cvprogressbar">
   <div class="progressbar-container">
  <!-- Step 1 -->
  <div class="step">
    <div class="icon"><img src="images/34.png" alt="User" /></div>
    <div class="label">Personal Details</div>
  </div>

  <div class="progress-line">
    <div class="line-fill" style="width: "></div>
  </div>

  <!-- Step 2 -->
  <div class="step ">
    <div class="icon"><img src="images/35.png" alt="Experience" /></div>
    <div class="label">Experience</div>
  </div>

  <div class="progress-line">
    <div class="line-fill" style="width:"></div>
  </div>

  <!-- Step 3 -->
  <div class="step ">
    <div class="icon"><img src="images/36.png" alt="Template" /></div>
    <div class="label">Template</div>
  </div>
</div>

<form class="cvform" method="post" enctype="multipart/form-data">
  
<div class="cvform-header">
  <h2>Personal details</h2>
  <div class="resume-language">
    <label for="language">Resume language</label>
    <select id="language" name="language">
      <option>English</option>
      <option>Hindi</option>
    </select>
  </div>
</div>
  <div class="form-group1 photo-name-block">
    <!-- Upload photo section -->
    <div class="upload-box">
      <label for="photo">
        <img src="images/37.png" alt="Camera Icon" class="camera-icon"><br>
        <span>Add photo (optional)</span>
      </label>
      <input type="file" name="photo" id="photo" accept="image/*" />
    </div>

    <!-- First and Last name stacked vertically -->
    <div class="name-fields">
      <div>
        <label>First name *</label>
        <input type="text" name="firstName" required />
      </div><br>
      <div>
        <label>Last name *</label>
        <input type="text" name="lastName" required />
      </div>
    </div>
  </div>

  <div class="form-group1">
    <div>
      <label>Email address *</label>
      <input type="email" name="email" required />
    </div>
    <div>
      <label>Phone number</label>
      <input type="tel" name="phone" />
    </div>
  </div>

  <div class="form-group1">
    <div>
      <label>Address</label>
      <input type="text" name="address" />
    </div>
  </div>

  <div class="form-group1">
    <div>
      <label>Zip code</label>
      <input type="text" name="zip" />
    </div>
    <div>
      <label>City/Town</label>
      <input type="text" name="city" placeholder="e.g. San Francisco" />
    </div>
  </div>

  <div class="additional-info">
    ⓘ Additional information
  </div>

  <button type="submit">Next ➜</button>
</form>


 </section>
<script src="script.js"></script>
   
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

