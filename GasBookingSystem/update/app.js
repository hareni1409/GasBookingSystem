const form = document.querySelector("form");
const password = document.querySelector("#password");
const confirm = document.querySelector("#cpassword");
    //arrow function
form.addEventListener('submit',(e)=>{
    if(password.value !== confirm.value){
        alert("Your password didn't match");
        e.preventDefault();
    }
    else{
        window.location.replace("login.html");
    }
})
  