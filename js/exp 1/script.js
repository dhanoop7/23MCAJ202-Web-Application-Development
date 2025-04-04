// Add an event listener to the registration form to handle the submit event
document.getElementById("regForm").addEventListener("submit", function(event) {
    // Prevent the form from submitting and reloading the page
    event.preventDefault();

    // Initialize a flag to track the validity of the form
    let isValid = true;

    // Get trimmed values from the form fields
    let username = document.getElementById("username").value.trim();
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();

    // Clear any existing error messages
    document.getElementById("usernameError").textContent = "";
    document.getElementById("emailError").textContent = "";
    document.getElementById("passwordError").textContent = "";

    // Validate username length (minimum 3 characters)
    if (username.length < 3) {
        // Display an error message if the username is too short
        document.getElementById("usernameError").textContent = "Username must be at least 3 characters.";
        isValid = false;
    }

    // Regular expression for validating email format
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Check if the email does not match the pattern
    if (!emailPattern.test(email)) {
        // Display an error message if the email format is invalid
        document.getElementById("emailError").textContent = "Enter a valid email.";
        isValid = false;
    }

    // Validate password length (minimum 6 characters)
    if (password.length < 6) {
        // Display an error message if the password is too short
        document.getElementById("passwordError").textContent = "Password must be at least 6 characters.";
        isValid = false;
    }

    // If all fields are valid, display a success message
    if (isValid) {
        alert("Form submitted successfully!");
    }
});
