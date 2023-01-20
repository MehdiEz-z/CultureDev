//------------------- Login & Signup Form -------------------//
//***********************************************************//

// Content Form Inputs-field
const inputs        = document.querySelectorAll(".input-field");
// Effet Inputs
inputs.forEach(inp => {
    inp.addEventListener("focus", () => {
        inp.classList.add("active-input");
    });
    inp.addEventListener("blur", () => {
        if(inp.value != "") return;
        inp.classList.remove("active-input");
    });
})

//--------------------- Form Validation ---------------------//
//***********************************************************//

// Get Inputs-field by Id Login
let login           = document.querySelector(".login");
let email           = login.querySelector("#email");
let password        = login.querySelector("#password");

email.addEventListener("input", validateEmail);
password.addEventListener("input", validatePass);
email.addEventListener("blur", validateEmail);
password.addEventListener("blur", validatePass);

function validateEmail(event) {
    let emailValue      = email.value;
    // Regex to Validate Email
    let emailRegex      = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (emailValue.length == 0 ) {
        document.querySelector(".emailErr2").style.opacity = "0";
        document.querySelector(".emailErr1").style.opacity = "1";
        document.querySelector("#email").classList.add("active-err");
        document.querySelector("#email").classList.remove("active-valid");
        event.preventDefault();
        return false;
    }
    else if (!emailRegex.test(emailValue)) {
        document.querySelector(".emailErr1").style.opacity = "0";
        document.querySelector(".emailErr2").style.opacity = "1";
        document.querySelector("#email").classList.add("active-err");
        document.querySelector("#email").classList.remove("active-valid");
        event.preventDefault();
        return false;
    }
    else{
        document.querySelector(".emailErr1").style.opacity = "0";
        document.querySelector(".emailErr2").style.opacity = "0";
        document.querySelector("#email").classList.add("active-valid");
        document.querySelector("#email").classList.remove("active-err");
        return true;
    } 
}

function validatePass(event){
    let passwordValue   = password.value;
    // Regex to Validate PAssword
    let passwordRegex   = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
    if (passwordValue === "") {
        document.querySelector(".passErr2").style.opacity = "0";
        document.querySelector(".passErr1").style.opacity = "1";
        document.querySelector("#password").classList.add("active-err");
        document.querySelector("#password").classList.remove("active-valid");
        event.preventDefault();
        return false;
    }
    else if (!passwordRegex.test(passwordValue)) {
        document.querySelector(".passErr1").style.opacity = "0";
        document.querySelector(".passErr2").style.opacity = "1";
        document.querySelector("#password").classList.add("active-err");
        document.querySelector("#password").classList.remove("active-valid");
        event.preventDefault();
        return false;
    }
    else{
        document.querySelector(".passErr1").style.opacity = "0";
        document.querySelector(".passErr2").style.opacity = "0";
        document.querySelector("#password").classList.add("active-valid");
        valide = true;
    } 
}
//-------------------------------------------------------------------------//

// Get Inputs-field by Id Signup
let signup              = document.querySelector(".signup");
let username            = signup.querySelector("#username");
let Semail              = signup.querySelector("#Semail");
let Spassword           = signup.querySelector("#Spassword");

username.addEventListener("input", validateUsername)
Semail.addEventListener("input", validateSemail);
Spassword.addEventListener("input", validateSpass);
username.addEventListener("blur", validateUsername);
Semail.addEventListener("blur", validateSemail);
Spassword.addEventListener("blur", validateSpass);

function validateUsername(event) {
    let usernameValue      = username.value;
    // Regex to Validate Username
    let usernameRegex      = /^[a-zA-Z ]{6,30}$/;
    if (usernameValue.length == 0 ) {
        document.querySelector(".usernameErr2").style.opacity = "0";
        document.querySelector(".usernameErr1").style.opacity = "1";
        document.querySelector("#username").classList.add("active-err");
        document.querySelector("#username").classList.remove("active-valid");
        
    }
    else if (!usernameRegex.test(usernameValue)) {
        document.querySelector(".usernameErr1").style.opacity = "0";
        document.querySelector(".usernameErr2").style.opacity = "1";
        document.querySelector("#username").classList.add("active-err");
        document.querySelector("#username").classList.remove("active-valid");
        event.preventDefault();
        return false;
    }
    else{
        document.querySelector(".usernameErr1").style.opacity = "0";
        document.querySelector(".usernameErr2").style.opacity = "0";
        document.querySelector("#username").classList.add("active-valid");
        document.querySelector("#username").classList.remove("active-err");
        return true;
    } 
}

function validateSemail(event) {
    let SemailValue      = Semail.value;
    // Regex to Validate Email
    let SemailRegex      = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (SemailValue.length == 0 ) {
        document.querySelector(".SemailErr2").style.opacity = "0";
        document.querySelector(".SemailErr1").style.opacity = "1";
        document.querySelector("#Semail").classList.add("active-err");
        document.querySelector("#Semail").classList.remove("active-valid");
        event.preventDefault();
        return false;
    }
    else if (!SemailRegex.test(SemailValue)) {
        document.querySelector(".SemailErr1").style.opacity = "0";
        document.querySelector(".SemailErr2").style.opacity = "1";
        document.querySelector("#Semail").classList.add("active-err");
        document.querySelector("#Semail").classList.remove("active-valid");
        event.preventDefault();
        return false;
    }
    else{
        document.querySelector(".SemailErr1").style.opacity = "0";
        document.querySelector(".SemailErr2").style.opacity = "0";
        document.querySelector("#Semail").classList.add("active-valid");
        document.querySelector("#Semail").classList.remove("active-err");
        return true;
    } 
}

function validateSpass(event){
    let SpasswordValue   = Spassword.value;
    // Regex to Validate Password
    let SpasswordRegex   = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
    if (SpasswordValue === "") {
        document.querySelector(".SpassErr2").style.opacity = "0";
        document.querySelector(".SpassErr1").style.opacity = "1";
        document.querySelector("#Spassword").classList.add("active-err");
        document.querySelector("#Spassword").classList.remove("active-valid");
        event.preventDefault();
        return false;
    }
    else if (!SpasswordRegex.test(SpasswordValue)) {
        document.querySelector(".SpassErr1").style.opacity = "0";
        document.querySelector(".SpassErr2").style.opacity = "1";
        document.querySelector("#Spassword").classList.add("active-err");
        document.querySelector("#Spassword").classList.remove("active-valid");
        event.preventDefault();
        return false;
    }
    else{
        document.querySelector(".SpassErr1").style.opacity = "0";
        document.querySelector(".SpassErr2").style.opacity = "0";
        document.querySelector("#Spassword").classList.add("active-valid");
        return true;
    } 
}