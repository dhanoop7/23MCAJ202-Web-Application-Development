document.getElementById("regForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let isValid = true;
    let username = document.getElementById("username").value.trim();
    let email = document.getElementById("email").value.trim();

    document.getElementById("usernameError").textContent = "";
    document.getElementById("emailError").textContent = "";

    if (username.length < 3) {
        document.getElementById("usernameError").textContent = "Username must be at least 3 characters.";
        isValid = false;
    }

    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        document.getElementById("emailError").textContent = "Enter a valid email.";
        isValid = false;
    }

    if (isValid) {
        alert("Form submitted successfully!");
    }
});
