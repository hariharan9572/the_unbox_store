<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobile Repair Form</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script defer src="{{ asset('js/script.js') }}"></script>
</head>
<body>

<!-- Header Section -->
<header id="main-header">
    <div class="container">
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
        <nav id="navbar">
            <ul>
                <li><a href="/" data-target="home">Home</a></li>
                <li><a href="/product" data-target="products">Products</a></li>
                <li><a href="/about" data-target="about">About Us</a></li>
                <li><a href="/services" data-target="services">Services</a></li>
                <li><a href="#contact" data-target="contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Hero Section -->
<section id="hero">
        <div class="hero-content">
            <h1>Mobile Repair Request</h1>
            <p>Need a quick fix for your phone? Fill out the form below and let us take care of the rest!</p>
            <a href="#repair-form-section" class="cta-button">Fix My Device Now</a>
        </div>
</section>

<!-- Main Form Section -->
<section id="repair-form-section">
    <div class="container">
        <form id="repair-request-form" class="repair-form">
            <h2>Service Request Form</h2>

            <!-- Customer Information -->
            <div class="form-section">
                <h3>Customer Information</h3>
                <div class="form-row">
                    <div class="input-group">
                        <label for="full-name">Full Name</label>
                        <input type="text" id="full-name" name="full-name" placeholder="Enter your full name" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                    </div>
                    <div class="input-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                    </div>
                </div>
            </div>

            <!-- Mobile Information -->
            <div class="form-section">
                <h3>Mobile Information</h3>
                <div class="form-row">
                    <div class="input-group">
                        <label for="brand">Mobile Brand</label>
                        <input type="text" id="brand" name="brand" placeholder="Enter your mobile brand" required>
                    </div>
                    <div class="input-group">
                        <label for="model">Mobile Model</label>
                        <input type="text" id="model" name="model" placeholder="Enter your mobile model" required>
                    </div>
                    <div class="input-group">
                        <label for="issue">Issue Description</label>
                        <textarea id="issue" name="issue" placeholder="Describe the issue with your mobile" required></textarea>
                    </div>
                </div>
            </div>

            <!-- Repair Service Selection -->
            <div class="form-section">
                <h3>Select Repair Service</h3>
                <div class="form-row">
                    <div class="input-group">
                        <label for="service">Choose Service Type</label>
                        <select id="service" name="service" required>
                            <option value="" disabled selected>Select a Service</option>
                            <option value="screen-repair">Screen Repair</option>
                            <option value="battery-replacement">Battery Replacement</option>
                            <option value="motherboard-repair">Motherboard Repair</option>
                            <option value="camera-repair">Camera Repair</option>
                            <option value="speaker-repair">Speaker Repair</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="urgency">Urgency</label>
                        <select id="urgency" name="urgency" required>
                            <option value="" disabled selected>Select Urgency Level</option>
                            <option value="standard">Standard (3-5 Days)</option>
                            <option value="express">Express (1-2 Days)</option>
                            <option value="same-day">Same-Day Service</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Pickup & Delivery -->
            <div class="form-section">
                <h3>Pickup and Delivery</h3>
                <div class="form-row">
                    <div class="input-group">
                        <label for="pickup-location">Pickup Location</label>
                        <input type="text" id="pickup-location" name="pickup-location" placeholder="Enter pickup location" required>
                    </div>
                    <div class="input-group">
                        <label for="delivery-location">Delivery Location</label>
                        <input type="text" id="delivery-location" name="delivery-location" placeholder="Enter delivery location" required>
                    </div>
                    <div class="input-group">
                        <label for="pickup-date">Preferred Pickup Date</label>
                        <input type="date" id="pickup-date" name="pickup-date" required>
                    </div>
                </div>
            </div>

            <!-- Additional Comments -->
            <div class="form-section">
                <div class="input-group">
                    <label for="comments">Additional Comments</label>
                    <textarea id="comments" name="comments" placeholder="Any additional comments or special requests"></textarea>
                </div>
            </div>

            <!-- Submit -->
            <button type="submit" class="submit-button">Fix My Device</button>
        </form>
    </div>
</section>

<!-- Footer -->
<footer id="footer">
    <p>&copy; 2025 The Unbox Store. All Rights Reserved.</p>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navLinks = document.querySelectorAll('#navbar a');
        const repairFormSection = document.getElementById('repair-form-section');

        // Hide form when navigation item is clicked
        navLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                if (e.target.dataset.target !== 'home') {
                    repairFormSection.style.display = 'none'; // Hide the form
                } else {
                    repairFormSection.style.display = 'block'; // Show the form
                }
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Automatically scroll to the repair form section
        const repairFormSection = document.getElementById('repair-form-section');
        if (repairFormSection) {
            repairFormSection.scrollIntoView({
                behavior: 'smooth',  // Smooth scrolling effect
                block: 'start'       // Align the section at the top of the viewport
            });
        }

        const navLinks = document.querySelectorAll('#navbar a');

        // Hide form when navigation item is clicked
        navLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                if (e.target.dataset.target !== 'home') {
                    repairFormSection.style.display = 'none'; // Hide the form
                } else {
                    repairFormSection.style.display = 'block'; // Show the form
                }
            });
        });
    });
</script>

</body>
</html>
