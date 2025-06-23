<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>AshwaGrid</title>
  <meta http-equiv="Content-Security-Policy" content="
    default-src 'self';
    img-src 'self' data: http: https:;
    style-src 'self' https://fonts.googleapis.com 'unsafe-inline';
    font-src https://fonts.gstatic.com;
    script-src 'self' 'unsafe-inline';
    object-src 'none';
    frame-ancestors 'none';
    base-uri 'self';
    form-action 'self';
  ">
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav>
    <img src="images/ashwa.png" alt="AshwaGrid Logo">
  </nav>

  <!-- Cards Section -->
  <main class="cards-container">
    <?php
    $cards = [
      [
        "link" => "mobility.php",
        "bgImage" => "images/2.png",
        "overlayImage" => "images/4.png",
        "title" => "Mobility",
        "desc" => "Move fast. Move with AshwaGrid"
      ],
      [
        "link" => "manpower.php",
        "bgImage" => "images/3.png",
        "overlayImage" => "images/5.png",
        "title" => "Manpower",
        "desc" => "Skilled hands. Strong Workforce. On Demand."
      ]
    ];

    foreach ($cards as $card) {
      $link = htmlspecialchars($card['link'], ENT_QUOTES, 'UTF-8');
      $bgImage = htmlspecialchars($card['bgImage'], ENT_QUOTES, 'UTF-8');
      $overlayImage = htmlspecialchars($card['overlayImage'], ENT_QUOTES, 'UTF-8');
      $title = htmlspecialchars($card['title'], ENT_QUOTES, 'UTF-8');
      $desc = htmlspecialchars($card['desc'], ENT_QUOTES, 'UTF-8');

      echo <<<HTML
        <a href="$link" class="card" data-overlay="$overlayImage" style="background-image: url('$bgImage');">
          <div class="overlay-image"></div>
          <div class="card-content">
            <h2>$title</h2><br>
            <p>$desc</p><br>
            <span class="btn">Learn More</span>
          </div>
        </a>
      HTML;
    }
    ?>
  </main>

  <script src="script.js"></script>

  <!-- Footer -->
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
      <a>xyz, office no. xx,<br> Navi Mumbai</a>

      <div class="footer-icons">
        <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="images/insta.png" alt="Instagram"></a>
        <a href="mailto:ashwagrid@gmail.com"><img src="images/email.png" alt="Email"></a>
      </div>
    </div>
  </footer>

</body>
</html>
