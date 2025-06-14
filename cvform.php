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

     

    <?php elseif ($step === 2): ?>
<div class="cvform-header">
        <h2>Education & Qualification</h2>
      <div class="card-body">
        <div class="flex-row">
          <input type="text" placeholder="e.g. Bachelor of Science" class="input" />
          <input type="text" placeholder="e.g. San Francisco" class="input" />
        </div>
        <input type="text" placeholder="e.g. New York University" class="input full" />

        <div class="flex-row">
          <select class="input">
            <option>September</option>
            <option>October</option>
          </select>
          <select class="input">
            <option>2018</option>
            <option>2019</option>
          </select>
          <select class="input">
            <option>July</option>
            <option>August</option>
          </select>
          <select class="input">
            <option>2018</option>
            <option>2019</option>
          </select>
        </div>

        <textarea placeholder="Description" class="input full" rows="4"></textarea>

        <div class="button-row">
          <button class="btn secondary">Tips</button>
          <div>
            <button class="btn danger">Delete</button>
            <button class="btn primary">Save</button>
          </div>
        </div>
        <button class="btn link">➕ Add another education</button>
      </div>
    </section>
<div class="personal">
   <button type="submit">Next ➜</button>
</div>
    
    <?php elseif ($step === 3): ?>
      <!-- Step 3 -->
      <h2>Preview</h2>
      <div class="cv-template">
        <p><strong>Name:</strong> <?= $_SESSION['personal']['firstName'] . ' ' . $_SESSION['personal']['lastName'] ?></p>
        <p><strong>Email:</strong> <?= $_SESSION['personal']['email'] ?></p>
        <p><strong>Phone:</strong> <?= $_SESSION['personal']['phone'] ?></p>
        <p><strong>Experience:</strong> <?= $_SESSION['experience']['title'] ?> - <?= $_SESSION['experience']['description'] ?></p>
        <p><strong>City:</strong> <?= $_SESSION['personal']['city'] ?></p>
        <?php if (!empty($_SESSION['personal']['photo'])): ?>
          <img src="<?= $_SESSION['personal']['photo'] ?>" alt="Uploaded Photo" style="max-width:150px;" />
        <?php endif; ?>
      </div>
      <button type="submit" name="download">Download PDF</button>
    <?php endif; ?>
  </form>
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
  <script src="script.js"></script>

</body>
</html>

