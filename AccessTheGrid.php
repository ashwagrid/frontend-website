<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ASHWAGRID - Join The Grid</title>
  <link rel="stylesheet" href="combine.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="logo">
      <img src="images/ashwa.png" alt="ASHWAGRID Logo">
      <select class="dropdown"  id="redirectDropdown" onchange="redirectPage()">
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
        <li><a href="AccessTheGrid.php" class="active">Access The Grid</a></li>
        <li><a href="#">Join The Grid</a></li>
        <li><a href="#">CV Maker</a></li>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="steps-section">
    <h1>
  <span class="slide-from-right">Access Our Network</span><br>
  <span class="slide-from-left">Anytime, Anywhere...</span>
</h1>

    <div class="steps-wrapper">
    <div class="steps-container">
      <div class="step">
        <div class="step-image-wrapper">
          <img src="images/12.png" alt="Step 1">
          <p class="step-label">Step 1</p>
        </div>
        <p class="highlight"></p>
      </div>

      <div class="step">
        <div class="step-image-wrapper">
          <img src="images/13.png" alt="Step 2">
          <p class="step-label">Step 2</p>
        </div>
        <p class="highlight"></p>
      </div>

      <div class="step">
        <div class="step-image-wrapper">
          <img src="images/14.png" alt="Step 3">
          <p class="step-label">Step 3</p>
        </div>
        <p class="highlight"></p>
      </div>
    </div>
<div class="dotted-line line1"></div>
<div class="dotted-line line2"></div>

    <div class="buttons">
      <button class="btn">Request Manpower</button>
      <button class="btn">Mobility Service</button>
      
    </div>
  </section>
  <script>
const stepsData = [
  { highlightText: ["Submit Your", "Requirement"] },
  { highlightText: ["Get Matched", "Fast."] },
  { highlightText: ["Start Service", "Quickly"] },
];

async function typeText(element, lines, delay = 70) {
  element.innerHTML = ""; // clear for <br> support

  for (let lineIndex = 0; lineIndex < lines.length; lineIndex++) {
    const line = lines[lineIndex];
    for (let i = 0; i < line.length; i++) {
      element.innerHTML += line.charAt(i);
      await new Promise(r => setTimeout(r, delay));
    }
    if (lineIndex < lines.length - 1) {
      element.innerHTML += "<br>";
      await new Promise(r => setTimeout(r, delay));
    }
  }
}

async function showStepsSequentially() {
  const steps = document.querySelectorAll('.step');
  const line1 = document.querySelector('.dotted-line.line1');
  const line2 = document.querySelector('.dotted-line.line2');

  for (let i = 0; i < steps.length; i++) {
    const step = steps[i];
    const label = step.querySelector('.step-label');
    const highlight = step.querySelector('.highlight');

    step.style.opacity = '1';
    label.style.opacity = '1';
    highlight.style.opacity = '1';

    await typeText(highlight, stepsData[i].highlightText);

    // Animate dotted lines after step 1 and 2
    if (i === 0) {
      line1.classList.add('active');
      await new Promise(r => setTimeout(r, 1700)); // wait animation finish
    }
    else if (i === 1) {
      line2.classList.add('active');
      await new Promise(r => setTimeout(r, 1700)); // wait animation finish
    }

    await new Promise(r => setTimeout(r, 1000)); // pause before next step
  }
}

// Run on page load
window.onload = () => {
  showStepsSequentially();
};

</script>
</body>
</html>
