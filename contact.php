<!-- function doPost(e) {
  var sheet = SpreadsheetApp.getActiveSpreadsheet().getActiveSheet();
  var data = JSON.parse(e.postData.contents);

  sheet.appendRow([
    data.name,
    data.inquiryFor,
    data.inquiryDetails,
    data.phone,
    data.email,
    new Date()
  ]);

  return ContentService
    .createTextOutput(JSON.stringify({ status: "success" }))
    .setMimeType(ContentService.MimeType.JSON)
    .setHeader("Access-Control-Allow-Origin", "*");
}
 --> 
<!-- CSS IN COMBINE.CSS LINE 642 ******************************************************************************* -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $json = file_get_contents("php://input");
  $data = json_decode($json, true);

  $googleScriptURL = "https://script.google.com/macros/s/AKfycbzWVs9-vYpfM8K3tbBIOoAoXFxLEIukH1rGqlpOQe2jopU_FgS4RpkabDKoGISf2Fix/exec";

  $options = [
    'http' => [
      'header'  => "Content-Type: application/json",
      'method'  => 'POST',
      'content' => json_encode($data),
      'ignore_errors' => true
    ]
  ];

  $context = stream_context_create($options);
  $response = file_get_contents($googleScriptURL, false, $context);

  // Check if response contains "success"
  if ($response && strpos($response, 'success') !== false) {
    echo json_encode(['status' => 'success']);
  } else {
    echo json_encode(['status' => 'error', 'raw_response' => $response]);
  }

  exit();
}
?>


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
<script>
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("contactForm");

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const formData = new FormData(form);
    const data = {};
    formData.forEach((value, key) => {
      data[key] = value;
    });
fetch(window.location.href, {
  method: "POST",
  headers: { "Content-Type": "application/json" },
  body: JSON.stringify(data)
})
.then(res => res.json().catch(() => ({ status: 'success' }))) // fallback if invalid JSON
.then(result => {
  if (result.status === 'success') {
    document.getElementById("formMessage").innerText = "✔︎ Form submitted successfully!";
    form.reset();
  } else {
    document.getElementById("formMessage").innerText = "⚠️ Something went wrong.";
  }
})
.catch(err => {
  document.getElementById("formMessage").innerText = "✖ Failed to submit.";
  console.error("Fetch error:", err);
});

  });
});
</script>

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
<form id="contactForm">
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" placeholder="Your Name" class="custom-placeholder" required />
  </div><br>

  <div class="form-group">
    <label>Inquiry For</label>
    <select name="inquiryFor" required>
      <option value="">Choose The Options</option>
      <option value="Request Manpower">Request Manpower</option>
      <option value="Mobility Service">Mobility Service</option>
    </select>
  </div><br>

  <div class="form-group">
    <label>Inquiry Details</label>
    <textarea name="inquiryDetails" rows="4" placeholder="Write Down Your Inquiry" class="custom-placeholder" required></textarea>
  </div><br>

  <div class="form-row">
    <div class="form-group phone">
      <label>Phone No.</label>
      <input type="tel" name="phone" placeholder="+91" class="custom-placeholder" required />
    </div>
    <div class="form-group email">
      <label>Email ID</label>
      <input type="email" name="email" placeholder="@gmail.com" class="custom-placeholder align-right" required />
    </div>
  </div>

  <div id="formMessage" style="margin-top: 10px; font-weight: bold;"></div>

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
     
    </div>
    <div class="footer-column">
      <h4>Contact Info</h4>
<a href="tel:+918369733565"><strong>+91 8369733565</strong></a><br>
<a href="mailto:connect@ashwagrid.com?subject=Inquiry&body=Hello AshwaGrid Team,"><strong>connect@ashwagrid.com</strong></a><br>
<a href="https://www.google.com/maps?q=S+137,+2nd+Floor,+Haware+Fantasia+Business+Park,+Sec+30A,+Vashi,+Navi+Mumbai,+Maharashtra+400703" target="_blank">
  S 137, 2<sup>nd</sup> Floor, Haware Fantasia Business Park, Sec 30A, Vashi, Navi Mumbai
</a>
      <div class="footer-icons">
  <a href="#" target="_blank"><img src="images/facebook.png" alt="facebook"></a>
  <a href="https://www.instagram.com/ashwagrid.hr/" target="_blank"><img src="images/insta.png" alt="instagram"></a>
<a href="https://wa.me/918369733565" target="_blank">
  <img src="images/whatsapp.png" alt="whatsapp">
</a>

</div>
    </div>
  </footer>

</body>
</html>
