<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>AshwaGrid</title>
   <meta http-equiv="Content-Security-Policy" content="
  default-src 'self';
  img-src 'self' data: https:;
  style-src 'self' https: 'unsafe-inline';
  font-src 'self' https:;
  script-src 'self' 'unsafe-inline';
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

  

</body>
</html>
