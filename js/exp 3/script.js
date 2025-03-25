// Selecting elements
// Selecting elements
let hoverArea = document.getElementById("hoverArea");
let displayArea = document.getElementById("displayArea");
let hoverImage = document.getElementById("hoverImage");
let hoverText = document.getElementById("hoverText");

// Array of images and corresponding text
let images = [
    { src: "image1.jpg", text: "This is the first image!" },
    { src: "image2.jpg", text: "Here is the second image!" },
    { src: "image3.jpg", text: "Look at this third image!" },
];

let index = 0; // To track the current image

// Function to show the next image and text on hover
hoverArea.addEventListener("mouseover", function() {
    // Set image and text
    hoverImage.src = images[index].src;
    hoverText.textContent = images[index].text;
    displayArea.style.display = "block";

    // Update index for the next image, looping back if needed
    index = (index + 1) % images.length;
});

// Function to hide the image and text when the mouse leaves
hoverArea.addEventListener("mouseout", function() {
    displayArea.style.display = "none";
});
