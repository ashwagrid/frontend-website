<?php
session_start();
$step = isset($_POST['step']) ? (int) $_POST['step'] : 1;

function clean($data) {
  return htmlspecialchars(trim($data));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if ($step === 1) {
    $_SESSION['personal'] = [
      'language' => clean($_POST['language']),
      'firstName' => clean($_POST['firstName']),
      'lastName' => clean($_POST['lastName']),
      'email' => clean($_POST['email']),
      'phone' => clean($_POST['phone']),
      'address' => clean($_POST['address']),
      'zip' => clean($_POST['zip']),
      'city' => clean($_POST['city']),
    ];

    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
      $photoName = time() . '_' . $_FILES['photo']['name'];
      move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/$photoName");
      $_SESSION['personal']['photo'] = "uploads/$photoName";
    }

    $step = 2;
  } elseif ($step === 2) {
    $_SESSION['experience'] = [
      'title' => clean($_POST['title']),
      'description' => clean($_POST['description']),
    ];
    $step = 3;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ASHWAGRID - CV Maker</title>
  <link rel="stylesheet" href="allforms.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
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
    <div class="step <?= $step >= 1 ? 'active' : '' ?>">
      <div class="icon"><img src="images/34.png" alt="User" /></div>
      <div class="label">Personal Details</div>
    </div>
    <div class="progress-line"><div class="line-fill" style="width: <?= $step >= 2 ? '100%' : '0%' ?>"></div></div>
    <div class="step <?= $step >= 2 ? 'active' : '' ?>">
      <div class="icon"><img src="images/35.png" alt="Experience" /></div>
      <div class="label">Experience</div>
    </div>
    <div class="progress-line"><div class="line-fill" style="width: <?= $step === 3 ? '100%' : '0%' ?>"></div></div>
    <div class="step <?= $step === 3 ? 'active' : '' ?>">
      <div class="icon"><img src="images/36.png" alt="Template" /></div>
      <div class="label">Template</div>
    </div>
  </div>
  <form class="cvform" method="post" enctype="multipart/form-data">
    <input type="hidden" name="step" value="<?= $step ?>">

    <?php if ($step === 1): ?>
      <!-- Step 1 -->
       <section class="step1">
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
        <div class="upload-box">
          <label for="photo">
            <img src="images/37.png" alt="Camera Icon" class="camera-icon"><br>
            <span>Add photo (optional)</span>
          </label>
          <input type="file" name="photo" id="photo" accept="image/*" />
        </div>
        <div class="name-fields">
          <div><label>First name </label><input type="text" name="firstName" required /></div><br>
          <div><label>Last name </label><input type="text" name="lastName" required /></div>
        </div>
      </div>

      <div class="form-group1">
        <div><label>Email address </label><input type="email" name="email" required /></div>
        <div><label>Phone number </label><input type="tel" name="phone" required /></div>
      </div>

      <div class="form-group1">
        <div><label>Address</label><input type="text" name="address" required /></div>
      </div>

      <div class="form-group1">
        <div><label>Zip code </label><input type="text" name="zip" required /></div>
        <div><label>City/Town</label><input type="text" name="city" placeholder="e.g. Mumbai" required /></div>
      </div>
<button type="button" id="toggle-info" class="additional-info-button">ⓘ Additional Information</button>
<div id="additional-fields" style="display: none; margin-top: 20px;">
  <div class="form-group1">
    <div>
      <label for="additionalTitle">Title</label>
      <input type="text" name="additionalTitle" id="additionalTitle">
    </div>
    <div>
      <label for="additionalDescription">Description</label>
      <textarea name="additionalDescription" id="additionalDescription"></textarea>
    </div>
  </div>
</div>
<div class="personal">
   <button type="submit">Next ➜</button>
</div>
</section>
     

    <?php elseif ($step === 2): ?>
<section class="step2-edu-section">
  <div class="step2-edu-header">
    <h2><i class="fas fa-graduation-cap"></i> Education and Qualifications</h2><br>
  </div>

  <div class="step2-edu-body">
    
    <div class="step2-edu-row">
      <div class="step2-edu-field">
        <label for="step2-degree">Degree</label>
        <input type="text" id="step2-degree" placeholder="e.g. Bachelor of Science" class="step2-edu-input" />
      </div>
      <div class="step2-edu-field">
        <label for="step2-city">City/Town</label>
        <input type="text" id="step2-city" placeholder="e.g. San Francisco" class="step2-edu-input" />
      </div>
    </div>

    <div class="step2-edu-field">
      <label for="step2-school">School</label>
      <input type="text" id="step2-school" placeholder="e.g. New York University" class="step2-edu-input full" />
    </div>
<!-- Start Date and End Date -->
<div class="step2-edu-field small-group">
  <label for="start-month">Start Date</label>
  <div class="step2-edu-dategroup inline-dategroup">
    <select id="start-month" class="step2-edu-select small-select">
      <option>January</option>
      <option>February</option>
      <option>March</option>
      <option>April</option>
      <option>May</option>
      <option>June</option>
      <option>July</option>
      <option>August</option>
      <option>September</option>
      <option>October</option>
      <option>November</option>
      <option>December</option>
    </select>
    <select id="start-year" class="step2-edu-select small-select">
      <option>2025</option>
      <option>2024</option>
      <option>2023</option>
      <option>2022</option>
      <option>2021</option>
      <!-- Add more years -->
    </select>
  </div>
</div>

<div class="step2-edu-field small-group">
  <label for="end-month">End Date</label>
  <div class="step2-edu-dategroup inline-dategroup">
    <select id="end-month" class="step2-edu-select small-select">
      <option>January</option>
      <option>February</option>
      <option>March</option>
      <option>April</option>
      <option>May</option>
      <option>June</option>
      <option>July</option>
      <option>August</option>
      <option>September</option>
      <option>October</option>
      <option>November</option>
      <option>December</option>
    </select>
    <select id="end-year" class="step2-edu-select small-select">
      <option>2025</option>
      <option>2024</option>
      <option>2023</option>
      <option>2022</option>
      <option>2021</option>
      <!-- Add more years -->
    </select>
  </div>
</div>

<!-- Description with formatting icons -->
<div class="step2-edu-field full-width">
  <label>Description</label>
  <div class="editor-toolbar">
    <button type="button" onclick="execCmd('bold')"><b>B</b></button>
    <button type="button" onclick="execCmd('italic')"><i>I</i></button>
    <button type="button" onclick="execCmd('underline')"><u>U</u></button>
    <button type="button" onclick="execCmd('insertUnorderedList')">&#8226; List</button>
  </div>
  <div class="editor-area" contenteditable="true"></div>
</div>

    <div class="step2-edu-buttons">
      <button class="step2-edu-btn secondary">Tips</button>
      <div>
       <button class="step2-edu-btn danger">
  <i class="fas fa-trash-alt"></i> Delete
</button>
<button class="step2-edu-btn primary">
  <i class="fas fa-save"></i> Save
</button>
 </div>
    </div>

    <button class="step2-edu-btn link">➕ Add another education</button>
  </div>
</section>
<div class="cv-section-gap"></div>

<!-- EXPERIENCE SECTION -->
<section class="cv-section" id="section-experience">
  <div class="step2-edu-section">
    <div class="step2-edu-header">
     <h2><i class="fas fa-briefcase"></i> Work Experience</h2><br>
    </div>
    <div class="step2-edu-body">

      <div class="step2-edu-row">
        <div class="step2-edu-field">
          <label>Job Title</label>
          <input type="text" class="step2-edu-input" placeholder="e.g. Sales Manager" />
        </div>
        <div class="step2-edu-field">
          <label>City/Town</label>
          <input type="text" class="step2-edu-input" placeholder="e.g. San Francisco" />
        </div>
      </div>

      <div class="step2-edu-row">
        <div class="step2-edu-field" style="flex: 1 1 100%;">
          <label>Employer</label>
          <input type="text" class="step2-edu-input" placeholder="e.g. PwC" />
        </div>
      </div>

<!-- Start Date and End Date -->
<div class="step2-edu-field small-group">
  <label for="start-month">Start Date</label>
  <div class="step2-edu-dategroup inline-dategroup">
    <select id="start-month" class="step2-edu-select small-select">
      <option>January</option>
      <option>February</option>
      <option>March</option>
      <option>April</option>
      <option>May</option>
      <option>June</option>
      <option>July</option>
      <option>August</option>
      <option>September</option>
      <option>October</option>
      <option>November</option>
      <option>December</option>
    </select>
    <select id="start-year" class="step2-edu-select small-select">
      <option>2025</option>
      <option>2024</option>
      <option>2023</option>
      <option>2022</option>
      <option>2021</option>
      <!-- Add more years -->
    </select>
  </div>
</div>

<div class="step2-edu-field small-group">
  <label for="end-month">End Date</label>
  <div class="step2-edu-dategroup inline-dategroup">
    <select id="end-month" class="step2-edu-select small-select">
      <option>January</option>
      <option>February</option>
      <option>March</option>
      <option>April</option>
      <option>May</option>
      <option>June</option>
      <option>July</option>
      <option>August</option>
      <option>September</option>
      <option>October</option>
      <option>November</option>
      <option>December</option>
    </select>
    <select id="end-year" class="step2-edu-select small-select">
      <option>2025</option>
      <option>2024</option>
      <option>2023</option>
      <option>2022</option>
      <option>2021</option>
      <!-- Add more years -->
    </select>
  </div>
</div>

<!-- Description with formatting icons -->
<div class="step2-edu-field full-width">
  <label>Description</label>
  <div class="editor-toolbar">
    <button type="button" onclick="execCmd('bold')"><b>B</b></button>
    <button type="button" onclick="execCmd('italic')"><i>I</i></button>
    <button type="button" onclick="execCmd('underline')"><u>U</u></button>
    <button type="button" onclick="execCmd('insertUnorderedList')">&#8226; List</button>
  </div>
  <div class="editor-area" contenteditable="true"></div>
</div>

      <div class="step2-edu-buttons">
        <button class="step2-edu-btn secondary"> Tips</button>
         <div>
       <button class="step2-edu-btn danger">
  <i class="fas fa-trash-alt"></i> Delete
</button>
<button class="step2-edu-btn primary">
  <i class="fas fa-save"></i> Save
</button>
 </div>
      </div>

      <button class="step2-edu-btn link">➕ Add another work experience</button>

    </div>
  </div>
</section>
<div class="cv-section-gap"></div>


<!-- SKILLS SECTION -->
<section class="cv-section" id="section-skills">
  <div class="step2-edu-section">
    <div class="step2-edu-header">
     <h2><i class="fas fa-mouse"></i> Computer Skills</h2><br>
    </div>
    <div class="step2-edu-body">

      <div class="step2-edu-row">
        <div class="step2-edu-field">
          <label>Skill</label>
          <input type="text" class="step2-edu-input" placeholder="e.g. Microsoft Word" />
        </div>
        <div class="step2-edu-field">
          <label>Level</label>
          <select class="step2-edu-select">
            <option>Select level</option>
            <option>Beginner</option>
            <option>Intermediate</option>
            <option>Advanced</option>
          </select>
        </div>
      </div>

      <div class="step2-edu-buttons">
        <button class="step2-edu-btn secondary">Tips</button>
        <div>
       <button class="step2-edu-btn danger">
  <i class="fas fa-trash-alt"></i> Delete
</button>
<button class="step2-edu-btn primary">
  <i class="fas fa-save"></i> Save
</button>
 </div>
      </div>

      <button class="step2-edu-btn link">➕ Add another skill</button>

    </div>
  </div>
</section>
<div class="cv-section-gap"></div>

<div class="experience">
   <button type="submit">Next ➜</button>
</div>
<?php elseif ($step === 3): ?>
<section class="cvtemplate-step">

  <div class="template-grid-container">
    <?php for ($i = 1; $i <= 8; $i++): ?>
      <div class="template-card" data-template-id="<?= $i ?>">
        <img src="templates/template<?= $i ?>.png" alt="CV Template <?= $i ?>">
      </div>
    <?php endfor; ?>
  </div>

  <div class="download-btn-container">
    <button class="download-btn">Download CV ➜</button>
  </div>

</section>
<?php endif; ?>
</section>
</form>

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
  <script src="script.js"></script>

</body>
</html>

