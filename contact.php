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
  <meta http-equiv="X-Frame-Options" content="DENY">
  <meta http-equiv="X-Content-Type-Options" content="nosniff">

  <title>ASHWAGRID - FAQ</title>
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
        <option value="">MOBILITY</option>
        <option value="manpower.php">MANPOWER</option>
      </select>
    </div>
    <nav>
      <ul>
        <li><a href="manpower.php">Home</a></li>
        <li><a href="who.php">Who Are We</a></li>
        <li><a href="AccessTheGrid.php">Access The Grid</a></li>
        <li><a href="joinTheGrid.php">Join The Grid</a></li>
        <li><a href="#">CV Maker</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
        <li><a href="contact.php" class="active">Contact</a></li>
      </ul>
    </nav>
  </header>
  <section class="contact"> 
<div class="form-section">
  <h2>Inquiry Now To Know More </h2><br>
  <form>
    <div class="form-group">
      <label>Name</label>
      <input type="text" placeholder="Your Name" />
    </div><br>

    <div class="form-group">
      <label>Inquiry For</label>
      <select>
        <option>Choose The Options</option>
      </select>
    </div><br>

    <div class="form-group">
      <label>Inquiry Details</label>
      <textarea rows="4" placeholder="Write Down Your Inquiry"></textarea>
    </div><br>

    <div class="form-row">
      <div class="form-group">
        <label>Phone No.</label>
        <input type="tel" placeholder="+91" />
      </div>
      <div class="form-group">
        <label>Email ID</label>
        <input type="email" placeholder="@gmail.com" />
      </div>
    </div><br>

    <button type="submit">Submit →</button>
  </form>
</div>
</section>

  </body>
</html>