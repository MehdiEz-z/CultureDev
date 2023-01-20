//--------------------- Form Validation ---------------------//
//***********************************************************//

// Get Inputs-field by Id Signup
let signup              = document.querySelector(".signup");
let fname               = signup.querySelector("#fname");
let lname               = signup.querySelector("#lname");
let Semail              = signup.querySelector("#Semail");
let Spassword           = signup.querySelector("#Spassword");


fname.addEventListener("input", validateFname);
lname.addEventListener("input", validateLname);
Semail.addEventListener("input", validateSemail);
Spassword.addEventListener("input", validateSpass);
fname.addEventListener("blur", validateFname);
lname.addEventListener("blur", validateLname);
Semail.addEventListener("blur", validateSemail);
Spassword.addEventListener("blur", validateSpass);

function validateFname() {
    let fnameValue          = fname.value;
    // Regex to Validate fname
    let fnameRegex      = /^[a-zA-Z]{5,10}$/;
    if (fnameValue.length == 0 ) {
        document.querySelector(".fnameErr2").style.opacity = "0";
        document.querySelector(".fnameErr1").style.opacity = "1";
        document.querySelector("#fname").classList.add("active-err");
        document.querySelector("#fname").classList.remove("active-valid");
        return false;
        
    }
    else if (!fnameRegex.test(fnameValue)) {
        document.querySelector(".fnameErr1").style.opacity = "0";
        document.querySelector(".fnameErr2").style.opacity = "1";
        document.querySelector("#fname").classList.add("active-err");
        document.querySelector("#fname").classList.remove("active-valid");
        return false;
    }
    else{
        document.querySelector(".fnameErr1").style.opacity = "0";
        document.querySelector(".fnameErr2").style.opacity = "0";
        document.querySelector("#fname").classList.add("active-valid");
        document.querySelector("#fname").classList.remove("active-err");
        return true;
    } 
}

function validateLname() {
    let lnameValue          = lname.value;
    // Regex to Validate lname
    let lnameRegex      = /^[a-zA-Z]{5,10}$/;
    if (lnameValue.length == 0 ) {
        document.querySelector(".lnameErr2").style.opacity = "0";
        document.querySelector(".lnameErr1").style.opacity = "1";
        document.querySelector("#lname").classList.add("active-err");
        document.querySelector("#lname").classList.remove("active-valid");
        return false;
    }
    else if (!lnameRegex.test(lnameValue)) {
        document.querySelector(".lnameErr1").style.opacity = "0";
        document.querySelector(".lnameErr2").style.opacity = "1";
        document.querySelector("#lname").classList.add("active-err");
        document.querySelector("#lname").classList.remove("active-valid");
        return false;
    }
    else{
        document.querySelector(".lnameErr1").style.opacity = "0";
        document.querySelector(".lnameErr2").style.opacity = "0";
        document.querySelector("#lname").classList.add("active-valid");
        document.querySelector("#lname").classList.remove("active-err");
        return true;
    } 
}

function validateSemail() {
    let SemailValue         = Semail.value;
    // Regex to Validate Email
    let SemailRegex      = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (SemailValue.length == 0 ) {
        document.querySelector(".SemailErr2").style.opacity = "0";
        document.querySelector(".SemailErr1").style.opacity = "1";
        document.querySelector("#Semail").classList.add("active-err");
        document.querySelector("#Semail").classList.remove("active-valid");
        return false;
    }
    else if (!SemailRegex.test(SemailValue)) {
        document.querySelector(".SemailErr1").style.opacity = "0";
        document.querySelector(".SemailErr2").style.opacity = "1";
        document.querySelector("#Semail").classList.add("active-err");
        document.querySelector("#Semail").classList.remove("active-valid");
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

function validateSpass(){
    let SpasswordValue      = Spassword.value;
    // Regex to Validate Password
    let SpasswordRegex   = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
    if (SpasswordValue === "") {
        document.querySelector(".SpassErr2").style.opacity = "0";
        document.querySelector(".SpassErr1").style.opacity = "1";
        document.querySelector("#Spassword").classList.add("active-err");
        document.querySelector("#Spassword").classList.remove("active-valid");
        return false;
    }
    else if (!SpasswordRegex.test(SpasswordValue)) {
        document.querySelector(".SpassErr1").style.opacity = "0";
        document.querySelector(".SpassErr2").style.opacity = "1";
        document.querySelector("#Spassword").classList.add("active-err");
        document.querySelector("#Spassword").classList.remove("active-valid");
        return false;
    }
    else{
        document.querySelector(".SpassErr1").style.opacity = "0";
        document.querySelector(".SpassErr2").style.opacity = "0";
        document.querySelector("#Spassword").classList.add("active-valid");
        document.querySelector("#Spassword").classList.remove("active-err");
        return true;
    } 
}

let continueBtn            =signup.querySelector(".continue-btn");

signup.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    validateFname()
    validateLname()
    validateSemail()
    validateSpass()
}
