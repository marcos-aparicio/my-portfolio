const button = document.getElementById("button");
const responsiveNav = document.querySelectorAll("#responsiveNav");
const responsiveNavElements = document.querySelectorAll(".responsiveNavElement");


button.addEventListener("click",()=>{
    responsiveNav[0].style.position="relative"
    responsiveNav[0].style.transform = "translateY(0px)";

})
console.log(responsiveNavElements)


responsiveNavElements[0].addEventListener("click",hide);
responsiveNavElements[1].addEventListener("click",hide);
responsiveNavElements[2].addEventListener("click",hide);

function hide(){
    responsiveNav[0].style.position="absolute";
    responsiveNav[0].style.transform = "translateY(-500px)";
}