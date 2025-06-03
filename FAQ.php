<!-- CSS IN COMBINE.CSS LINE 412 ********************************************* -->

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
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

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
            <div class="question"><span class="arrow">&gt;</span> How can I apply for a job at AshwaGrid?</div>
            <div class="answer">Go to “Join the Grid” and fill in your details. <br>Our team will contact you for further steps and verification.</div>
          </div>

          <div class="faq-item">
            <div class="question"><span class="arrow">&gt;</span> What kind of jobs are available? </div>
            <div class="answer">We offer jobs for drivers, housekeeping staff, <br>electricians, plumbers, security personnel, and more.</div>
          </div>

          <div class="faq-item">
            <div class="question"><span class="arrow">&gt;</span> Do I need a resume or CV to apply?</div>
            <div class="answer">No worries! <br> You can create a professional CV using our free CV Maker - even if you're not applying right now.</div>
          </div>

          <div class="faq-item">
            <div class="question"><span class="arrow">&gt;</span> Will I get a permanent job?</div>
            <div class="answer"> Job type depends on client needs - we offer full-time,<br> part-time, and on-demand work options</div>
          </div>

          <div class="faq-item">
            <div class="question"><span class="arrow">&gt;</span> Do I have to pay any fees to join?</div>
            <div class="answer">No. <br>Joining AshwaGrid is completely free for all job seekers.</div>
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
</body>
</html>
