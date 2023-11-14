
// function submitForm() {
//     var email = document.getElementById('email').value;
//     var password = document.getElementById('password').value;

//     // You can perform further validation here if needed

//     // Sending data to PHP for storage
//     fetch("http://localhost/sagnik/store.php", {
//         method: "POST",
//         headers: {
//             "Content-type": "application/x-www-form-urlencoded",
//         },
//         body: "email=" + email + "&password=" + password,
//         mode: "no-cors", // Add this line
//     })
//     .then(response => console.log("Data stored successfully!"))
//     .catch(error => console.error("Error storing data:", error));
// }

function submitForm() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    // You can perform further validation here if needed

    // Sending data to PHP for storage
    fetch("http://localhost/sagnik/store.php", {
        method: "POST",
        headers: {
            "Content-type": "application/x-www-form-urlencoded",
        },
        body: "email=" + email + "&password=" + password,
        mode: "no-cors", // Add this line
    })
    .then(response => {
        console.log("Data stored successfully!");

        // Fetch and display the data from data.txt
        return fetch("http://localhost/sagnik/display.php");
    })
    .then(response => response.text())
    .then(data => console.log(data))
    .catch(error => console.error("Error storing or retrieving data:", error));
}
