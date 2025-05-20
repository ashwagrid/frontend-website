<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>AshwaGrid</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <!-- Google Fonts: Raleway -->
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>

  <nav>
    <img src="images/ashwa.png" alt="AshwaGrid Logo">
  </nav>

  <main class="cards-container">
    <?php
    // Card data array
    $cards = [
      [
        "link" => "mobility.html",
        "bgImage" => "images/2.png",
        "overlayImage" => "images/4.png",
        "title" => "Mobility",
        "desc" => "Move fast. Move with AshwaGrid"
      ],
      [
        "link" => "manpower.html",
        "bgImage" => "images/33.png",
        "overlayImage" => "images/5.png",
        "title" => "Manpower",
        "desc" => "Skilled hands. Strong Workforce. On Demand."
      ]
    ];

    // Render each card safely
    foreach ($cards as $card) {
      $link = htmlspecialchars($card['link'], ENT_QUOTES, 'UTF-8');
      $bgImage = htmlspecialchars($card['bgImage'], ENT_QUOTES, 'UTF-8');
      $overlayImage = htmlspecialchars($card['overlayImage'], ENT_QUOTES, 'UTF-8');
      $title = htmlspecialchars($card['title'], ENT_QUOTES, 'UTF-8');
      $desc = htmlspecialchars($card['desc'], ENT_QUOTES, 'UTF-8');

      echo <<<HTML
      <a href="$link" class="card"
         data-overlay="$overlayImage"
         style="background-image: url('$bgImage');">
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
