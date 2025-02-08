const formInputs = document.querySelectorAll(".form__input");
const formResetButton = document.querySelector("#form-reset");
const className = "form__row--filled";

formInputs.forEach((input) => {
    input.addEventListener("input", () => {
        input.parentElement.classList.toggle(className, input.value.trim() !== "");
    });
});

formResetButton.addEventListener("click", () => {
    formInputs.forEach((input) => {
        input.parentElement.classList.remove(className);
    });
});