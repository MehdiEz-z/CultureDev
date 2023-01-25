//--------------------- SideBar Animation ---------------------//
//*************************************************************//

const sideMenu  = document.querySelector("aside");
const menuBtn   = document.querySelector("#menu-btn");
const closeBtn  = document.querySelector("#close-btn");

//show SideBar
menuBtn.addEventListener('click', ()=>{
    sideMenu.style.display  = 'block';
});

//Close SideBar
closeBtn.addEventListener('click', ()=>{
    sideMenu.style.display  = 'none';
});
 