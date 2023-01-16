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