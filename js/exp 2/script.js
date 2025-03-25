// Selecting the button
let button = document.getElementById("colorBtn");

// Function to change the background color
function changeBackgroundColor() {
    // Generating a random color
    let randomColor = "#" + Math.floor(Math.random()*16777215).toString(16);
    document.body.style.backgroundColor = randomColor;
}

// Adding event listener to the button
button.addEventListener("click", changeBackgroundColor);
