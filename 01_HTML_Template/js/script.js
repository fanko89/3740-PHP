const swiper = new Swiper(".swiper", {
    direction: 'horizontal',
    speed:2000,
    loop: true,
//If pagination is needed
pagination: {
    el: '.swiper-pagination',
},
//enable auto play
autoplay: {
    delay: 5000,
},
})


function toggleMenu() {
    document.getElementById("hamburgerBtn").classList.toggle("open");
    document.getElementById("primaryNav").classList.toggle("open");
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu; 
