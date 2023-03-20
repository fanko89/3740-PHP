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
    console.log(document.getElementById('primaryNav').classList.toggle('hide'))
}


// function toggleMenu() {
//     document.getElementById('parent').classList.toggle('open')
//     document.getElementById("primaryNav").classList.toogle('open')
// }
// const x= document.getElementById('parent')
// x.onclick = toggleMenu