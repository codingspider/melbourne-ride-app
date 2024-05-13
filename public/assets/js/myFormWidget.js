// public/js/myFormWidget.js
document.addEventListener('DOMContentLoaded', function () {
    // Initialize the form widget
    initFormWidget();
});

function initFormWidget() {
    // Your initialization logic goes here

    // Example: Attach the form submission logic to the form
    const form = document.getElementById('myForm');
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        submitForm();
    });
}

function submitForm() {
    // Your form submission logic goes here
    console.log('Form submitted via widget!');
}
