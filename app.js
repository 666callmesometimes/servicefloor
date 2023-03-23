const callButton = document.querySelector('#call');
const menuBtn = document.querySelector("#menu-burger");
const nav = document.querySelector("nav");
const popUp = document.querySelector("#popup");
const closePopUp = document.querySelector("#close-popup");

callButton.addEventListener("mouseover" , () => {
    callButton.style.backgroundColor="white";
    callButton.style.color="black";
    callButton.innerHTML="+48 501 147 347";
    callButton.style.border="2px solid black";
});

callButton.addEventListener("mouseout" , () => {
    callButton.style.backgroundColor="black";
    callButton.style.color="white";
    callButton.innerHTML="Zadzwoń";
});

menuBtn.addEventListener('click' , () => {
    nav.classList.toggle("off");
});

closePopUp.addEventListener("click" , () => {
    popUp.style.display="none";
});