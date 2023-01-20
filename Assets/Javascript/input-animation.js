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
