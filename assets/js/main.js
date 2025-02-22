const burgerButton = document.querySelector("#burger-button");
const primaryNavigation = document.querySelector("#primary-navigation");
const overlay = document.createElement('div');
overlay.classList.add('menu__overlay');

burgerButton.addEventListener('click', () => {
    if (primaryNavigation.getAttribute('area-visible') === 'false') {
        openBurgerMenu();
    } else if (primaryNavigation.getAttribute('area-visible') === 'true') {
        closeBurgerMenu();
    }
});

overlay.addEventListener('click', () => {
    if (primaryNavigation.getAttribute('area-visible') === 'true') {
        closeBurgerMenu();
    }
});

function openBurgerMenu() {
    primaryNavigation.setAttribute('area-visible', 'true');
    primaryNavigation.parentNode.appendChild(overlay);
    burgerButton.setAttribute('area-expand', 'true');
}

function closeBurgerMenu() {
    primaryNavigation.setAttribute('area-visible', 'false');
    overlay.remove();
    burgerButton.setAttribute('area-expand', 'false');
}

const subMenus = document.querySelectorAll('.menu__sub-menu');
const nestedMenuItems = document.querySelectorAll('.menu__item--nested');

nestedMenuItems.forEach(nestedMenuItem => {
    nestedMenuItem.querySelector('.menu__link').addEventListener('click', () => {
        if (nestedMenuItem.getAttribute('area-expand') === 'false') {
            nestedMenuItem.setAttribute('area-expand', 'true');
            nestedMenuItem.querySelector('[area-visible]').setAttribute('area-visible', 'true');
        } else if (nestedMenuItem.getAttribute('area-expand') === 'true') {
            nestedMenuItem.setAttribute('area-expand', 'false');
            nestedMenuItem.querySelector('[area-visible]').setAttribute('area-visible', 'false');
        }
    });
});