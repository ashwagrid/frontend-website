<!-- css in cobine.css line 969 -->

<?php
// Optional: Start session or handle POST here if needed in the future
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ASHWAGRID - Access The Grid</title>
  <link rel="stylesheet" href="combine.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="logo">
      <img src="images/ashwa.png" alt="ASHWAGRID Logo">
      <select class="dropdown" id="redirectDropdown" onchange="redirectPage()">
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
    <nav>
      <ul>
        <li><a href="manpower.php">Home</a></li>
        <li><a href="who.php">Who Are We</a></li>
        <li><a href="AccessTheGrid.php" class="active">Access The Grid</a></li>
        <li><a href="joinTheGrid.php">Join The Grid</a></li>
        <li><a href="#">CV Maker</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="">
    <div class="form-container">
      <div class="form-left">
        <h1>Manpower Request Form</h1>
        <p>Please fill out the form below to request additional manpower.</p>

        <!-- Change to PHP-compatible form -->
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
          <label>Requester's Name</label>
          <div class="input-row">
            <input type="text" name="first_name" placeholder="First Name" required />
            <input type="text" name="last_name" placeholder="Last Name" required />
          </div>

          <div class="label-row">
            <label>Number of Staff Required</label>
            <label>Department</label>
          </div>

          <div class="input-row">
            <input class="small-input" type="number" name="staff_required" placeholder="eg. 23" required />
            <select name="department" required>
              <option value="" disabled selected>Select Department</option>
              <option value="HR">HR</option>
              <option value="Operations">Operations</option>
              <option value="IT">IT</option>
              <option value="Finance">Finance</option>
            </select>
          </div>

          <label>Task / Project Details</label>
          <textarea name="task_details" rows="3" placeholder="Enter task or project details"></textarea>

          <div class="label-row">
            <label>Phone No.</label>
            <label>Email ID</label>
          </div>

          <div class="input-row">
<input
  class="small-input"
  type="tel"
  name="phone"
  placeholder="+91"
  required
  pattern="^\+?\d{10,15}$"
  title="Enter a valid mobile number (10 to 15 digits, optionally starting with +)"
/>
            <input type="email" name="email" placeholder="@gmail.com" required />
          </div><br>

          <button type="submit" name="submit">Submit →</button>
        </form>

      </div>

      <div class="form-right">
        <img src="images/17.png" alt="Illustration" />
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
