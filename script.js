//Activating trigger for tooltip
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

const header = document.querySelector("#header");
const footer = document.querySelector("#footer");
const firstSection = document.getElementById("home");
const lastSection = document.getElementById("projects");

const resizeWebSections = ()=>{

    //first section of the page
    let firstSectionHeight = window.innerHeight - header.clientHeight;
    firstSection.style.height = `${firstSectionHeight}px`

    let footerHeight = window.innerHeight - lastSection.clientHeight;
    footer.style.height =  `${footerHeight}px`;
};


window.onload = resizeWebSections;
window.onresize = resizeWebSections;