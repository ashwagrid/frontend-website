<!-- AppScript -->
 <!-- function doPost(e) {
  try {
    const sheet = SpreadsheetApp
      .openById("14wLmYBq0XnlVOLoCHxLenTVr_qRuuDjRYts410f8Wjc")
      .getSheetByName("Corporate"); 

    const data = JSON.parse(e.postData.contents);
    const timestamp = Utilities.formatDate(new Date(), Session.getScriptTimeZone(), "dd-MMM-yyyy hh:mm:ss a");

    sheet.appendRow([
      timestamp,
      data.name || '',
      data.company || '',
      data.phone || '',
      data.email || '',
      data.service || '',
      data.message || ''
    ]);

    return ContentService
      .createTextOutput(JSON.stringify({ result: "success" }))
      .setMimeType(ContentService.MimeType.JSON);

  } catch (error) {
    return ContentService
      .createTextOutput(JSON.stringify({ result: "error", message: error.message }))
      .setMimeType(ContentService.MimeType.JSON);
  }
}
 -->
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = [
        "name"    => $_POST['name'],
        "company" => $_POST['company'],
        "phone"   => $_POST['phone'],
        "email"   => $_POST['email'],
        "service" => $_POST['service'],
        "message" => $_POST['message']
    ];

    $json = json_encode($data);

    $url = "https://script.google.com/macros/s/AKfycbx6II6ADHlwDL8ogS4CX6pxZjBJcYOOLlBdU3rIdqCI7NHIpjOuK-MDqh42R6kG/exec";

    $options = [
        "http" => [
            "header"  => "Content-type: application/json",
            "method"  => "POST",
            "content" => $json
        ]
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result, true);

    if ($response && $response["result"] === "success") {
        $successMessage = "✔︎ Form submitted successfully!";
    } else {
        $errorMessage = "✖ Failed to submit the form. Please try again.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
 
<meta http-equiv="X-Frame-Options" content="DENY">
<meta http-equiv="Content-Security-Policy" content="
  default-src 'self';
  script-src 'self' 'unsafe-inline';
  style-src 'self' 'unsafe-inline' https:;
  font-src 'self' https:;
  img-src 'self' data: https:;
  connect-src 'self' https://script.google.com;
">

  <title>ASHWAGRID - Corporate Contact</title>
  <link rel="stylesheet" href="mobility.css">   
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

// FOR SERVICE DROPDOWN
document.addEventListener("DOMContentLoaded", function () {
  const dropdownToggle = document.querySelector(".dropdown-toggle");
  const dropdownMenu = document.getElementById("servicesMenu");

  // Toggle dropdown on click
  dropdownToggle.addEventListener("click", function (e) {
    e.preventDefault();
    e.stopPropagation(); // prevent the document click event
    dropdownMenu.classList.toggle("show");
  });

  // Close dropdown when clicking outside
  document.addEventListener("click", function (e) {
    if (!e.target.closest(".dropdown1")) {
      dropdownMenu.classList.remove("show");
    }
  });

  // Optional: close dropdown when clicking an item inside
  dropdownMenu.addEventListener("click", function () {
    dropdownMenu.classList.remove("show");
  });
});


</script>

    <!-- NAVIGATION BAR  -->
     <nav>
      <ul>
        <li><a href="mobility.php" >Home</a></li>
        <li><a href="aboutus.php" >About Us</a></li>
    <li class="dropdown1">
<a href="#" class="active" style="color:#ff6b35; font-weight:bold;">Services</a>
      <ul class="dropdown-menu">
        <li class="dropdown-arrow"></li>
        <li><a class="highlighted" href="corporate.php">Corporate Contact</a></li>
        <li><a class="highlighted" href="rental.php">Car Rental Booking</a></li>
        <li><a class="highlighted" href="uber.php">Uber Services</a></li>
      </ul>
    </li>
  <li><a href="Inventory.php">Inventor Page </a></li>
      </ul>
    </nav>
  </header>

<section class="corporate">
  <div class="corporate-header">
    <h1>Let's Move Together.</h1><br>
    <p>
      Are you a business or agency needing reliable transportation solutions?
      We're here to help. Our corporate team handles bulk <br>bookings, regular pickups,
      employee transportation, and more. Send us your requirements — we'll respond
      within 24 hours.
    </p>
  </div>
<form class="corporate-form"
 action=""
  method="POST">
  <div class="form-row">
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" placeholder="Your Name" required />
    </div>
    <div class="form-group">
      <label>Company Name</label>
      <input type="text" name="company" placeholder="Company Name" required />
    </div>
  </div>

  <div class="form-row">
    <div class="form-group">
      <label>Phone No.</label>
      <input type="tel" name="phone" placeholder="+91" required pattern="[0-9]{10}" title="Enter 10-digit mobile number" />
    </div>
    <div class="form-group">
      <label>Email ID</label>
      <input type="email" name="email" placeholder="@gmail.com" required />
    </div>
    <div class="form-group">
  <label>Service Needed</label>
  <select name="service" class="corporate" required>
    <option value="" disabled selected hidden></option>
    <option value="Employee Transport">Employee Transport</option>
    <option value="Corporate Car Rental">Corporate Car Rental</option>
    <option value="Event Shuttle">Event Shuttle</option>
    <option value="Airport Pickup/Drop">Airport Pickup/Drop</option>
  </select>
</div>

  </div>

  <div class="form-group full-width">
    <label>Message Box</label>
    <textarea name="message" placeholder="Your message..." required></textarea>
  </div>
<?php if (!empty($successMessage)) : ?>
  <p class="form-message success"><?php echo $successMessage; ?></p>
<?php endif; ?>

<?php if (!empty($errorMessage)) : ?>
  <p class="form-message error"><?php echo $errorMessage; ?></p>
<?php endif; ?>
  <button type="submit" class="submit-btn">Submit →</button>
</form>


</section>

<script src="script.js"></script>

</body>
</html>
