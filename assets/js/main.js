const menuButton = document.querySelector('.menu-toggle');
const menuLinks = document.querySelector('.nav-links');

if (menuButton && menuLinks) {
    menuButton.addEventListener('click', () => {
        const abierto = menuLinks.classList.toggle('open');
        menuButton.setAttribute('aria-expanded', String(abierto));
        menuButton.setAttribute('aria-label', abierto ? 'Cerrar menú' : 'Abrir menú');
    });

    menuLinks.querySelectorAll('a').forEach((enlace) => {
        enlace.addEventListener('click', () => {
            menuLinks.classList.remove('open');
            menuButton.setAttribute('aria-expanded', 'false');
            menuButton.setAttribute('aria-label', 'Abrir menú');
        });
    });
}
