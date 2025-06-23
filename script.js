document.addEventListener("DOMContentLoaded", function () {
  console.log("JS Loaded");

  // ========== 1. Card hover overlay ==========
  const cards = document.querySelectorAll('.card');

  cards.forEach(card => {
    const overlay = card.querySelector('.overlay-image');
    const overlayUrl = card.getAttribute('data-overlay');

    card.addEventListener('mouseenter', () => {
      overlay.style.backgroundImage = `url('${overlayUrl}')`;
      card.classList.add('hovered');
    });

    card.addEventListener('mouseleave', () => {
      card.classList.remove('hovered');
      overlay.style.backgroundImage = 'none';
    });
  });

  // ========== 2. Active Nav Highlight ==========
  const navLinks = document.querySelectorAll('nav ul li a');
  const currentUrl = window.location.pathname;

  navLinks.forEach(link => {
    if (link.getAttribute('href') === currentUrl || link.getAttribute('href') === window.location.hash) {
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }
  });

  // ========== 3. Car Animation ==========
  const carImages = [
    "images/20.png",
    "images/21.png",
    "images/22.png",
    "images/23.png"
  ];
  let carIndex = 0;

  function animateCars() {
    const rentalSection = document.querySelector('.rental');

    if (!rentalSection) {
      console.warn("No .rental section found");
      return; // Exit safely if the section doesn't exist on this page
    }

    const car = document.createElement('img');
    car.src = carImages[carIndex];
    car.alt = "moving car";
    car.classList.add('moving-car', 'animate');
    rentalSection.appendChild(car);

    setTimeout(() => {
      car.remove();
    }, 8000);

    carIndex = (carIndex + 1) % carImages.length;
  }

  // Start and repeat animation
  animateCars();
  setInterval(animateCars, 8000);

  // for rental.php form
   document.getElementById("rideForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    const jsonData = {};

    formData.forEach((value, key) => {
      jsonData[key] = value;
    });

    fetch("YOUR_GOOGLE_SCRIPT_WEBAPP_URL", {
      method: "POST",
      body: JSON.stringify(jsonData),
      headers: {
        "Content-Type": "application/json"
      }
    })
    .then(res => res.text())
    .then(data => {
      alert("Submitted successfully!");
      document.getElementById("rideForm").reset();
    })
    .catch(err => alert("Error: " + err));
  });

  // ========== 4. CV Form Toggle ==========
  const toggleBtn = document.getElementById("toggle-info");
  const additionalFields = document.getElementById("additional-fields");

  if (toggleBtn && additionalFields) {
    toggleBtn.addEventListener("click", function () {
      if (additionalFields.style.display === "none" || additionalFields.style.display === "") {
        additionalFields.style.display = "block";
      } else {
        additionalFields.style.display = "none";
      }
    });
  } else {
    console.log("Toggle elements not found");
  }

});
// STEP 2 ***********************************************
 function addEntry(section) {
  let group;
  if (section === "qualification") {
    group = `
      <div class="entry-group">
        <input type="text" name="qualification_title[]" placeholder="Qualification Title" />
        <input type="text" name="institution[]" placeholder="Institution Name" />
        <input type="text" name="year[]" placeholder="Year Completed" />
      </div>`;
  } else if (section === "experience") {
    group = `
      <div class="entry-group">
        <input type="text" name="job_title[]" placeholder="Job Title" />
        <input type="text" name="company[]" placeholder="Company Name" />
        <input type="text" name="duration[]" placeholder="Duration (e.g. 2020-2023)" />
      </div>`;
  } else if (section === "skills") {
    group = `
      <div class="entry-group">
        <input type="text" name="skills[]" placeholder="Skill (e.g. Python, Communication)" />
      </div>`;
  }

  const sectionEl = document.querySelector(`.block h3:contains("${section === 'qualification' ? 'Qualifications' : section === 'experience' ? 'Work Experience' : 'Skills'}")`).parentElement;
  sectionEl.insertAdjacentHTML("beforeend", group);
}
 
function execCmd(command) {
  document.execCommand(command, false, null);
}
