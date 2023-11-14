// JavaScript (validatefrm.js)
window.onload = init;

function init() {
    // Attach "onclick" handler to "reset" button
    document.getElementById("reset").onclick = clearDisplay;
    // Set initial focus
    document.getElementById("name").focus();
}

// Your validation functions go here (isNotEmpty, isValidEmail, etc.)

function validateForm(thisForm) {
    alert("hello");
    with(thisForm) {
        return (
            isNotEmpty(name.value, name, "Please enter your name!", "nameError") &&
            isValidEmail(email.value, email, "Enter a valid email!", "emailError")
        );
    }
}

// Other helper functions go here

function clearDisplay() {
    var elms = document.getElementsByTagName("*");
    for (var i = 0; i < elms.length; i++) {
        if ((elms[i].id).match(/Error$/)) {
            elms[i].innerHTML = "";
        }
        if (elms[i].className === "error") {
            elms[i].className = "";
        }
    }
    // Set initial focus
    document.getElementById("name").focus();
}
