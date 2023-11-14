function validateForm() {
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    if (password.length < 8) {
        alert('Password must be at least 8 characters long.');
    } else if (password !== confirmPassword) {
        alert('Passwords do not match.');
    } else {
        document.getElementById('signupForm').submit();
    }
}
