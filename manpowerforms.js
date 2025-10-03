const scriptURL = 'https://script.google.com/macros/s/AKfycby3y-qn9PkkVnYPTK-V4wKquY4YvZ6_rAjhhbHAs0LAgSTRT6YXbukyC6v2fCF05gplcg/exec'

const form = document.forms['contact-form']

form.addEventListener('submit', e => {
  
  e.preventDefault()
  
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => alert("Thank you! Form is submitted" ))
  .then(() => { window.location.reload(); })
  .catch(error => console.error('Error!', error.message))
})