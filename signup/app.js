(function () {
    'use strict'
    const forms = document.querySelectorAll('.requires-validation')
    Array.from(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
    
          form.classList.add('was-validated')
        }, false)
      })
    })()

const form = document.querySelector("form");
const password = document.querySelector("#password");
const confirm = document.querySelector("#cpassword");
    //arrow function
form.addEventListener('submit',(e)=>{
    
    if(password.value !== confirm.value){
        alert("Your password didn't match");
        e.preventDefault();

    }

})
