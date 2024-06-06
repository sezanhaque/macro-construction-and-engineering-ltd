/*
* JavaScript to handle scroll event and toggle header visibility
* */

let lastScroll = 0;

window.addEventListener('scroll', () => {
    const currentScroll = window.scrollY;

    if (currentScroll > lastScroll) {
        // Scroll down

        document.querySelector('header').style.top = '-100px';
        document.querySelector('nav').style.top = '0px';
    } else {
        // Scroll up

        document.querySelector('header').style.top = '0';
        if (window.innerWidth > 1024 && window.scrollY < 24) {
            document.querySelector('nav').style.top = '40px';
        } else {
            document.querySelector('nav').style.top = '0px';
        }
    }

    lastScroll = currentScroll <= 0 ? 0 : currentScroll;
});
