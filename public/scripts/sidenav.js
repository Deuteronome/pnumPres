let trigger = document.getElementById('nav-trigger')
let nav = document.getElementById('side-nav')
let close = document.getElementById('close-nav')
let body = document.querySelector('body')
let isActive = false;


function showNav() {
    console.log('open')
    if(!isActive) {
        nav.style.transform = 'translate3d(20vw, 0, 0)'
        isActive = true
        event.stopPropagation()
    }    
}

function hideNav() {
    console.log('close')    
    if(isActive) {
        nav.style.transform = 'translate3d(-20vw, 0, 0)'
        isActive = false
    }    
}

function stayOpen() {
    console.log('stop')
    event.stopPropagation()
}

trigger.addEventListener('click', showNav)
nav.addEventListener('click', stayOpen)
body.addEventListener('click', hideNav)
close.addEventListener('click', hideNav)