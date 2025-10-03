const scriptURL = 'https://script.google.com/macros/s/AKfycbyWPSMWWCk_f03_YW8OEivxWZf2WcKhqFJ-xz-lmXkEafZe1IiFKbXsQ07jValrKXhByQ/exec'

const form = document.forms['contact-form']

form.addEventListener('submit', e => {
  
  e.preventDefault()
  
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => alert("Thank you! Form is submitted" ))
  .then(() => { window.location.reload(); })
  .catch(error => console.error('Error!', error.message))
})