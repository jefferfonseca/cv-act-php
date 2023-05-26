window.sr = ScrollReveal();

sr.reveal('.navbar', {
    duration: 3000,
    origin: 'top',
    distance: '100px'
});

sr.reveal('.scroll-nombre', {
    duration: 3000,
    origin: 'right',
    distance: '400px'
});

sr.reveal('.scroll-inicio', {
    duration: 3000,
    origin: 'left',
    distance: '400px'
});

sr.reveal('.logo', {
    delay: 1500,
    duration: 2500,
    rotate: {
        x: 1,
        y: 180
    }
});
sr.reveal('.avatar', {
    easing: 'ease-in-out',
    duration: 2500,
});