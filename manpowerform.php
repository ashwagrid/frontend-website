<!-- Timestamp	First Name	Last Name	Staff Required	Department	Task Details	Phone	Email -->
 <!-- function doPost(e) {
  try {
    var sheet = SpreadsheetApp.getActiveSpreadsheet().getActiveSheet();
    var data = JSON.parse(e.postData.contents);

    sheet.appendRow([
      data.first_name,
      data.last_name,
      data.staff_required,
      data.department,
      data.task_details,
      data.phone,
      data.email,
      new Date()
    ]);

    return ContentService
      .createTextOutput(JSON.stringify({ result: "success" }))
      .setMimeType(ContentService.MimeType.JSON); // ✅ Removed .setHeader()
      
  } catch (error) {
    return ContentService
      .createTextOutput(JSON.stringify({ result: "error", message: error.message }))
      .setMimeType(ContentService.MimeType.JSON); // ✅ Removed .setHeader()
  }
}
 -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $data = [
        'first_name'     => $_POST['first_name'],
        'last_name'      => $_POST['last_name'],
        'staff_required' => $_POST['staff_required'],
        'department'     => $_POST['department'],
        'task_details'   => $_POST['task_details'],
        'phone'          => $_POST['phone'],
        'email'          => $_POST['email']
    ];

    $jsonData = json_encode($data);

    // 🛠️ DEBUG: Print PHP POST data and JSON to console
    echo "<script>console.log('Form Data:', " . json_encode($data) . ");</script>";
    echo "<script>console.log('JSON Sent to Google Sheets:', " . json_encode($jsonData) . ");</script>";

    $url = "https://script.google.com/macros/s/AKfycbxSOjCTmRpQ7BUsaWr2pCUHBUYMI89b4_vyU1hbjjs0mSpzEVg_5HZJbRAkGLM5Z_Q/exec"; 

    $options = [
        'http' => [
            'header'  => "Content-type: application/json",
            'method'  => 'POST',
            'content' => $jsonData
        ]
    ];

    $context  = stream_context_create($options);
    $result = @file_get_contents($url, false, $context);
 $response = json_decode($result, true);

if ($response && isset($response['result']) && $response['result'] === 'success') {
    $formStatus = "✔︎ Form submitted successfully!";
} else {
    $formStatus = "✖ Error submitting form. Please try again.";
}



}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
        <li><a href="cvmaker.php">CV Maker</a></li>
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
<?php if (isset($formStatus)): ?>
  <div id="formMessage" style="margin-top: 10px; color: <?= strpos($formStatus, 'Error') !== false ? 'red' : 'green' ?>;">
    <?= $formStatus ?>
  </div>
<?php endif; ?>

          <button type="submit" name="submit">Submit →</button>
          <script>
  const msg = document.getElementById('formMessage');
  if (msg) {
    setTimeout(() => msg.style.display = 'none', 4000); // hide after 4 seconds
  }
</script>

        </form>
      </div>

      <div class="form-right">
        <img src="images/17.png" alt="Illustration" />
      </div>
    </div>
  </section>
</body>
</html>
