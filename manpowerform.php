<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Security-Policy" content="
  default-src 'self';
  img-src 'self' data: https:;
  style-src 'self' https: 'unsafe-inline';
  font-src 'self' https:;
  script-src 'self' 'unsafe-inline';
">
  <title>ASHWAGRID - Manpower Request Form</title>
  <link rel="stylesheet" href="combine.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">

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
      <li><a href="loading-page.php" class="active">CV Maker</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="manpowerform-container"> <!-- Fixed class name -->
    <div class="form-container">
      <div class="form-left">
        <h1>Manpower Request Form</h1>
        <p>Please fill out the form below to request additional manpower.</p>

        <form action="https://script.google.com/macros/s/AKfycby3y-qn9PkkVnYPTK-V4wKquY4YvZ6_rAjhhbHAs0LAgSTRT6YXbukyC6v2fCF05gplcg/exec"method="POST">
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
            <select name="your_department" required>
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
            <input class="small-input" type="tel" name="your_phone" placeholder="+91" required pattern="^\+?\d{10,15}$"
              title="Enter a valid mobile number (10 to 15 digits, optionally starting with +)" />
            <input type="email" name="your_email" placeholder="@gmail.com" required />
          </div><br>
          <?php if (isset($formStatus)): ?>
            <div id="formMessage"
              style="margin-top: 10px; color: <?= strpos($formStatus, 'Error') !== false ? 'red' : 'green' ?>;">
              <?= $formStatus ?>
            </div>
          <?php endif; ?>

          <button type="submit" name="submit">Submit →</button>


        </form>
      </div>

      <div class="form-right">
        <img src="images/17.png" alt="Illustration" />
      </div>
    </div>
  </section>
  <script src="manpowerforms.js"></script>
</body>

</html>