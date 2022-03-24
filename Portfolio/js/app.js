//Animation navbar

const btnNav = $(".btn-nav");
const nav = $(".navbar");
const allBtnNav = $(".block-menu");
const ligneAnim = $(".anim-line");

$(".btn-nav").click(function () {
    ligneAnim.toggleClass('active');
    nav.toggleClass('menu-visible');
});

if (window.matchMedia('(max-width: 1300px)')) {
    $(".block-menu").click(function () {
        ligneAnim.toggleClass('active');
        nav.toggleClass("menu-visible");
    });
};

//Animation écriture

const txtAnim = document.querySelector('.anim-pres');

let typewriter = new Typewriter(txtAnim, {
    loop: false,
    deleteSpeed: 20
})

typewriter
    .pauseFor(1800)
    .changeDelay(20)
    .typeString('Moi c\'est Julien Le Noach')
    .pauseFor(300)
    .typeString('<strong>, Développeur Web</strong> !')
    .pauseFor(1000)
    .deleteChars(5)
    .typeString('<span style="color: #27ae60;"> CSS</span> !')
    .pauseFor(1000)
    .deleteChars(5)
    .typeString('<span style="color: #ff6910;"> JavaScript</span> !')
    .pauseFor(1000)
    .deleteChars(13)
    .typeString('<span style="color: #184aff;"> PhP</span> !')
    .pauseFor(1000)
    .deleteChars(8)
    .typeString('<span style="color:#EA39ff ;"> JAVA</span> !')
    .start()


//Animation Greensock
const navbar = document.querySelector('.navbar'); // https://greensock.com/get-started/
const titre = document.querySelector('h1');
const btn = document.querySelectorAll('.linkacc')
const btnMedias = document.querySelectorAll('.media')
const btnRondAccueil = document.querySelector('.btn-rond')


const TL1 = gsap.timeline();

TL1
    .to(navbar, { left: '0px', ease: Power3.easeOut, duration: 0.6 })
    .from(titre, { y: -50, opacity: 0, ease: Power3.easeOut, duration: 0.4 })
    .staggerFrom(btn, 1, { opacity: 0 }, 0.2, '-=0.30')
    .staggerFrom(btnMedias, 1, { opacity: 0 }, 0.2, '-=0.75')
    .from(btnRondAccueil, { y: -50, opacity: 0, ease: Power3.easeOut, duration: 0.4 }, '-=1')

window.addEventListener('load', () => {
    TL1.play();
})

