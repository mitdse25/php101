// function validateForm() {
//     var password = document.getElementById('password').value;
//     var confirmPassword = document.getElementById('confirmPassword').value;

//     if (password.length < 8) {
//         alert('Password must be at least 8 characters long.');
//     } else if (password !== confirmPassword) {
//         alert('Passwords do not match.');
//     } else {
//         document.getElementById('signupForm').submit();
//     }
// }

function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;
    var phoneNumber = document.getElementById('phoneNumber').value;

    // Email validation
    var emailRegex = /^[\w-]+(\.[\w-]+)*@gmail\.com$|^[\w-]+(\.[\w-]+)*@manipal\.edu$/;
    if (!emailRegex.test(email)) {
        alert('Invalid email address. Please use a valid Gmail or Manipal email.');
        return;
    }

    // Password validation
    var passwordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,}$/;
    if (password.length < 8 || !passwordRegex.test(password)) {
        alert('Password must be at least 8 characters long and contain at least one uppercase letter, one digit, and one special character.');
        return;
    }

    // Password matching
    if (password !== confirmPassword) {
        alert('Passwords do not match.');
        return;
    }

    // Phone number validation
    var phoneNumberRegex = /^[789]\d{9}$/;
    if (!phoneNumberRegex.test(phoneNumber)) {
        alert('Invalid phone number. Please enter a 10-digit number starting with 7, 8, or 9.');
        return;
    }

    // If all validations pass, submit the form
    document.getElementById('signupForm').submit();
}
