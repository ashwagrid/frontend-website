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
  <meta http-equiv="X-Frame-Options" content="DENY">
  <meta http-equiv="X-Content-Type-Options" content="nosniff">

  <title>ASHWAGRID - FAQ</title>
  <link rel="stylesheet" href="combine.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- Header -->
  <header>
    <div class="logo">
      <img src="images/ashwa.png" alt="ASHWAGRID Logo">
      <select class="dropdown" id="redirectDropdown" onchange="redirectPage()">
        <option value="" selected disabled hidden>Choose Service</option>
        <option value="">MOBILITY</option>
        <option value="manpower.php">MANPOWER</option>
      </select>
    </div>
    <nav>
      <ul>
        <li><a href="manpower.php">Home</a></li>
        <li><a href="who.php">Who Are We</a></li>
        <li><a href="AccessTheGrid.php">Access The Grid</a></li>
        <li><a href="joinTheGrid.php">Join The Grid</a></li>
        <li><a href="#">CV Maker</a></li>
        <li><a href="FAQ.php" class="active">FAQ</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero Section -->
  <div class="container">
    <section class="hello">
      <div class="hello-text">
        <h1><em class="text1">Hello,</em> How can we help you...?</h1><br>
        <div class="search-bar">
          <input type="text" id="faqSearch" placeholder="Type your question here">
          <button onclick="searchFAQ()">Search</button>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
      <h2>Frequently Asked Questions</h2>

      <div class="faq-wrapper">
        <!-- Left: FAQ List -->
        <div class="faq-list">
          <div class="faq-item">
            <div class="question"><span class="arrow">&gt;</span> What types of services does AshwaGrid provide?</div>
            <div class="answer">AshwaGrid offers mobility services (chauffeur-driven vehicles,<br> pickup-drop, intercity rides) and manpower services (drivers,<br> electricians, security guards, housekeeping staff, and more).</div>
          </div>

          <div class="faq-item">
            <div class="question"><span class="arrow">&gt;</span> How can I request a driver or manpower?</div>
            <div class="answer">You can request services by accessing the portal via “Access the Grid” and selecting the relevant options.</div>
          </div>

          <div class="faq-item">
            <div class="question"><span class="arrow">&gt;</span> Do I have to pay any fees to join?</div>
            <div class="answer">No, joining AshwaGrid is completely free for candidates. Employers may have service charges.</div>
          </div>

          <div class="faq-item">
            <div class="question"><span class="arrow">&gt;</span> How can I apply for a job at AshwaGrid?</div>
            <div class="answer">Go to “Join the Grid” and fill out the application form. Our team will contact you if shortlisted.</div>
          </div>

          <div class="faq-item">
            <div class="question"><span class="arrow">&gt;</span> In which cities do you operate?</div>
            <div class="answer">AshwaGrid currently operates in major metropolitan areas and is expanding nationwide.</div>
          </div>
        </div>

        <!-- Right: Logo -->
        <div class="faq-logo">
          <img src="images/16.png" alt="FAQ Logo">
        </div>
      </div>
    </section>
  </div>

  <!-- JS -->
  <script>
    function redirectPage() {
      const dropdown = document.getElementById("redirectDropdown");
      const selectedValue = dropdown.value;
      if (selectedValue) {
        window.location.href = selectedValue;
      }
    }

    document.addEventListener('DOMContentLoaded', () => {
      const faqItems = document.querySelectorAll('.faq-item');

      faqItems.forEach(item => {
        item.querySelector('.question').addEventListener('click', () => {
          item.classList.toggle('open');
        });
      });

      // Enable live search as user types
      document.getElementById('faqSearch').addEventListener('input', searchFAQ);
    });

    function searchFAQ() {
      const input = document.getElementById('faqSearch').value.toLowerCase();
      const faqItems = document.querySelectorAll('.faq-item');

      faqItems.forEach(item => {
        const question = item.querySelector('.question').innerText.toLowerCase();
        const answer = item.querySelector('.answer').innerText.toLowerCase();

        if (question.includes(input) || answer.includes(input)) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    }
  </script>

</body>
</html>
