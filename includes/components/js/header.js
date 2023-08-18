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

var logged = false;