const initApp = () => {
    const hamburgerBtn = document.getElementById("hamberger-button")
    const mobileMenu = document.getElementById("mobile-menu")
    
    const toggleMenu = () => {
        mobileMenu.classList.toggle('hidden')
        mobileMenu.classList.toggle('flex')
        document.body.classList.toggle('h-screen')
        document.body.classList.toggle('overflow-hidden')
    }

    hamburgerBtn.addEventListener('click', toggleMenu)
    mobileMenu.addEventListener('click', toggleMenu)
}

document.addEventListener('DOMContentLoaded', initApp)


const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth/3;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth/3;
    })
})

var logged = false;