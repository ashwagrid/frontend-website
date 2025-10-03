const scriptURL = 'https://script.google.com/macros/s/AKfycbxsCqNsG61oThC7CWiYSNAz5EIoQNQrnYMj-4lwBcoOXefviSNvhXQKXNSCu_tMxET3NQ/exec'

const form = document.forms['contact-form']

form.addEventListener('submit', e => {
  
  e.preventDefault()
  
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => alert("Thank you! Form is submitted" ))
  .then(() => { window.location.reload(); })
  .catch(error => console.error('Error!', error.message))
})
