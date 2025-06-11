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
 
document.addEventListener('DOMContentLoaded', () => {
  const navLinks = document.querySelectorAll('nav ul li a');
  const currentUrl = window.location.pathname; // or window.location.hash

  navLinks.forEach(link => {
    if (link.getAttribute('href') === currentUrl || link.getAttribute('href') === window.location.hash) {
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }
  });
});


// script for SpeechRecognitionAlternative.php ************************************************************
 
const carImages = [
  "images/20.png",
  "images/21.png",
  "images/22.png",
  "images/23.png"
];
let carIndex = 0;

function animateCars() {
  const rentalSection = document.querySelector('.rental');

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

// Start immediately
animateCars();

// Run every 8 seconds, only one car
setInterval(animateCars, 8000);


// js for cvform.php**********************************************************
function goToStep(stepNumber) {
  const steps = document.querySelectorAll(".step");
  const lines = document.querySelectorAll(".line-fill");

  steps.forEach((step, index) => {
    if (index < stepNumber) {
      step.classList.add("active");
    } else {
      step.classList.remove("active");
    }
  });

  lines.forEach((line, index) => {
    if (index < stepNumber - 1) {
      line.style.width = "100%";
    } else {
      line.style.width = "0%";
    }
  });
}

// Example automatic animation
setTimeout(() => goToStep(2), 1500);  // Go to step 2
setTimeout(() => goToStep(3), 3000);  // Go to step 3



  document.addEventListener('DOMContentLoaded', function () {
    const fills = document.querySelectorAll('.line-fill');

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const fill = entry.target;
          if (fill.style.width === '100%') {
            fill.classList.add('animate-fill');
          }
        }
      });
    }, { threshold: 0.6 });

    fills.forEach(fill => observer.observe(fill));
  });


