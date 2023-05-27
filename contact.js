const formOpenBtn = document.querySelector("#form_open");
home = document.querySelector(".home");
form_container = document.querySelector(".form_container");
formCloseBtn = document.querySelector(".form_close");
signupHome = document.querySelector(".signup_home");
signupFormOpenBtn = document.querySelector("#signup_form_open");
signupFormCloseBtn = document.querySelector(".signup_form_close");


signupBtn = document.querySelector("#signup");
loginBtn = document.querySelector("#login");
pwShowHide = document.querySelector(".hide");

formOpenBtn.addEventListener("click",() => home.classList.add("show"));
formCloseBtn.addEventListener("click",() => home.classList.remove("show"));

signupFormOpenBtn.addEventListener("click",() => signupHome.classList.add("show"));
signupFormCloseBtn.addEventListener("click",() => signupHome.classList.remove("show"));

// pwShowHide.forEach((icon) => {
//     icon.addEventListener("click", () => {
//       let getPwInput = icon.parentElement.querySelector("input");
//       if (getPwInput.type === "password") {
//         getPwInput.type = "text";
//         icon.classList.replace("uil-eye-slash", "uil-eye");
//       } else {
//         getPwInput.type = "password";
//         icon.classList.replace("uil-eye", "uil-eye-slash");
//       }
//     });
//   });




// phone number validation

function validate() {
    cnic();
    const phoneNumberInput = document.getElementById('phoneNumberInput');
    const phoneNumber = phoneNumberInput.value.replace(/\D/g, '');
  
    if (phoneNumber.length !== 11) {
      phoneNumberInput.classList.add('error');
      return false;
      prompt("Invalid Number");
    } else {
      phoneNumberInput.classList.remove('error');
      
    }    
}
function cnic(){
    
    const cnicNumberInput = document.getElementById('cnic');
    const cnicNumber = cnicNumberInput.value.replace(/\D/g, '');
  
    if (cnicNumber.length !== 13) {
      cnicNumberInput.classList.add('error1');
      return false;
    } else {
      cnicNumberInput.classList.remove('error1');
      
    }
}
  
  // end phone number validation