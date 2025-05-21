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
 
