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
