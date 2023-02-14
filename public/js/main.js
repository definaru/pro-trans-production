var scroll_position = 0;
window.addEventListener('scroll', function () {
    scroll_position = window.scrollY;
    //console.log('scroll position', window.scrollY);
});

const smoothLinks = document.querySelectorAll('a[href^="#"]');
for (let smoothLink of smoothLinks) {
    smoothLink.addEventListener('click', function (e) {
        e.preventDefault();
        const id = smoothLink.getAttribute('href');

        document.querySelector(id).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
};

const links = document.querySelectorAll('.nav-link');

for (let link of links) {
    link.addEventListener('click', () => {
        let activeLink = document.querySelector('.nav-link.active');
        if (activeLink) {
            activeLink.classList.remove('active');
        }
        link.classList.add('active');
    })
}


// document.querySelector('#menu li').onclick = function(event) {
// //document.querySelectorAll('.nav-item')
//     console.log(event.target.classList);
//     //event.target.innerText.classList.toggle('active');
//     //document.getElementsByClassName('nav-link').classList.toggle('active');
// }