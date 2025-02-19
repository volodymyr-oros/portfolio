const burgerButton = document.querySelector("#burger-button");
const primaryNavigation = document.querySelector("#primary-navigation");

burgerButton.addEventListener('click', () => {
    if (primaryNavigation.getAttribute('area-visible') === 'false') {
        primaryNavigation.setAttribute('area-visible', 'true');
        burgerButton.setAttribute('area-expand', 'true');
    } else if (primaryNavigation.getAttribute('area-visible') === 'true') {
        primaryNavigation.setAttribute('area-visible', 'false');
        burgerButton.setAttribute('area-expand', 'false');
    }
});