// //--------------------- Login Form Validation ---------------------//
// //*****************************************************************//

// // Get Inputs-field by Id Login
// let login               = document.querySelector(".login");
// let email               = login.querySelector("#email");
// let password            = login.querySelector("#password");

// email.addEventListener("input", validateEmail);
// password.addEventListener("input", validatePass);
// email.addEventListener("blur", validateEmail);
// password.addEventListener("blur", validatePass);

// function validateEmail() {
//     let emailValue      = email.value;
//     // Regex to Validate Email
//     let emailRegex      = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$/;
//     // Check Empti Email
//     if (emailValue.length == 0 ) {
//         document.querySelector(".emailErr2").style.opacity = "0";
//         document.querySelector(".emailErr1").style.opacity = "1";
//         document.querySelector("#email").classList.add("active-err");
//         document.querySelector("#email").classList.remove("active-valid");
//         return false;
//     }
//     // Check Regex Email
//     else if (!emailRegex.test(emailValue)) {
//         document.querySelector(".emailErr1").style.opacity = "0";
//         document.querySelector(".emailErr2").style.opacity = "1";
//         document.querySelector("#email").classList.add("active-err");
//         document.querySelector("#email").classList.remove("active-valid");
//         return false;
//     }
//     else{
//         document.querySelector(".emailErr1").style.opacity = "0";
//         document.querySelector(".emailErr2").style.opacity = "0";
//         document.querySelector("#email").classList.add("active-valid");
//         document.querySelector("#email").classList.remove("active-err");
//         return true;
//     } 
// }

// function validatePass(){
//     let passwordValue   = password.value;
//     // Regex to Validate PAssword
//     let passwordRegex   = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
//     // Check Empti Password
//     if (passwordValue === "") {
//         document.querySelector(".passErr2").style.opacity = "0";
//         document.querySelector(".passErr1").style.opacity = "1";
//         document.querySelector("#password").classList.add("active-err");
//         document.querySelector("#password").classList.remove("active-valid");
//         return false;
//     }
//     // Check Regex Password
//     else if (!passwordRegex.test(passwordValue)) {
//         document.querySelector(".passErr1").style.opacity = "0";
//         document.querySelector(".passErr2").style.opacity = "1";
//         document.querySelector("#password").classList.add("active-err");
//         document.querySelector("#password").classList.remove("active-valid");
//         return false;
//     }
//     else{
//         document.querySelector(".passErr1").style.opacity = "0";
//         document.querySelector(".passErr2").style.opacity = "0";
//         document.querySelector("#password").classList.add("active-valid");
//         document.querySelector("#password").classList.remove("active-err");
//         return true;
//     } 
// }

// let continueBtn         =login.querySelector(".continue-btn");

// login.onsubmit          = (e)=>{
//     e.preventDefault();
// }

// continueBtn.onclick     = ()=>{
//     validateEmail()
//     validatePass()
// }

