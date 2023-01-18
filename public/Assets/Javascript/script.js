//------------------- Login & Signup Form -------------------//
//***********************************************************//

// Interior-box & Head Form Toggle link
const interior_box  = document.querySelector(".interior-box");      
const toggle_link   = document.querySelectorAll(".toggle");
// Form & Carousel change
toggle_link.forEach(link => {
    link.addEventListener("click", () => {
        interior_box.classList.toggle("login-mode");
    });
});

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

login.addEventListener("submit", validateLogin);

function validateLogin(event) {
    let emailValue      = email.value;
    let passwordValue   = password.value;

    // Regex to Validate Email
    let emailRegex      = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (emailValue.length == 0 ) {
        alert("Email is required");
        event.preventDefault();
        return false;
    }
    else if (!emailRegex.test(emailValue)) {
        alert("Invalid email address");
        event.preventDefault();
        return false;
    }

    // Regex to Validate PAssword
    let passwordRegex   = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
    if (passwordValue === "") {
        alert("Password is required");
        event.preventDefault();
        return false;
    }
    else if (!passwordRegex.test(passwordValue)) {
        alert("Invalid password");
        event.preventDefault();
        return false;
    }
    return true;
}

// Get Inputs-field by Id Signup
let signup              = document.querySelector(".signup");
let username            = signup.querySelector("#username");
let Semail              = signup.querySelector("#Semail");
let Spassword           = signup.querySelector("#Spassword");

signup.addEventListener("submit", validateSignup);

function validateSignup(event){
    let SemailValue     = Semail.value;
    let SpasswordValue  = Spassword.value;
    let usernameValue   = username.value;

    // Regex to Validate Username
    let usernameRegex = /^[a-zA-Z ]{2,30}$/;
    if (usernameValue.length == 0 ) {
        alert("Username is required");
        event.preventDefault();
        return false;
    }
    else if (!usernameRegex.test(usernameValue)) {
        alert("Invalid username address");
        event.preventDefault();
        return false;
    }

    // Regex to Validate Email
    let SemailRegex     = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (SemailValue.length == 0 ) {
        alert("Email is required");
        event.preventDefault();
        return false;
    }
    else if (!SemailRegex.test(SemailValue)) {
        alert("Invalid email address");
        event.preventDefault();
        return false;
    }

    // Regex to Validate Password
    let SpasswordRegex  = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
    if (SpasswordValue === "") {
        alert("Password is required");
        event.preventDefault();
        return false;
    }
    else if (!SpasswordRegex.test(SpasswordValue)) {
        alert("Invalid password");
        event.preventDefault();
        return false;
    }
    return true;
}