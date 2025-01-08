// Smooth scrolling for navigation
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior: "smooth"
        });
    });
});

// Handling form submission
document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault();
    alert("Thank you for contacting us! We will get back to you shortly.");
});

// Product button click
const productButtons = document.querySelectorAll(".product-button");
productButtons.forEach(button => {
    button.addEventListener("click", function() {
        alert("Product added to cart!");
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const formSections = document.querySelectorAll('.form-section');
    const progressBar = document.querySelector('#progress-bar span');
    const form = document.getElementById('repair-form');
    let currentSection = 0;

    // Function to update progress bar
    function updateProgressBar() {
        const totalSections = formSections.length;
        const progress = (currentSection / totalSections) * 100;
        progressBar.style.width = `${progress}%`;
    }

    // Function to handle form step completion
    form.addEventListener('input', function () {
        const section = formSections[currentSection];
        const inputs = section.querySelectorAll('input, select, textarea');
        const allFilled = Array.from(inputs).every(input => input.value.trim() !== '');

        if (allFilled && currentSection < formSections.length - 1) {
            // Move to next section
            currentSection++;
            formSections[currentSection].style.opacity = 1;
            updateProgressBar();
        }
    });

    // Handle form submission (show completion message)
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        document.querySelector('.thank-you-message').style.opacity = 1;
        setTimeout(() => {
            form.reset(); // Reset form after submission
            document.querySelector('.thank-you-message').style.opacity = 0; // Hide message again
            updateProgressBar(); // Reset progress bar
        }, 2000);
    });
});

window.onload = function() {
    // Function to show the modal
    function showModal() {
        const modal = document.getElementById("repair-popup");
        modal.style.display = "block";
    }

    // Show the modal immediately when the page loads
    showModal();

    // Show the modal after 30 seconds
    setTimeout(showModal, 30000); // 30 seconds

    // Close the modal when the close button is clicked
    const closeButton = document.getElementById("close-popup");
    closeButton.onclick = function() {
        const modal = document.getElementById("repair-popup");
        modal.style.display = "none";
        // Show the modal again after 30 seconds when it's closed
        setTimeout(showModal, 30000); // 30 seconds
    }

    // Close the modal if the user clicks outside the modal content
    window.onclick = function(event) {
        const modal = document.getElementById("repair-popup");
        if (event.target == modal) {
            modal.style.display = "none";
            // Show the modal again after 30 seconds when it's closed
            setTimeout(showModal, 30000); // 30 seconds
        }
    }
}
