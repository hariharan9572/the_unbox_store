<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Services - The Unbox Store</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <script defer src="{{ asset('js/script.js') }}"></script>
</head>

<body>

<!-- Header Section -->
<header id="main-header">
    <div class="container">
        <div class="logo">
            <img src="logo.png" alt="The Unbox Store Logo">
        </div>
        <nav id="navbar">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/product">Products</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Hero Section -->
<section id="hero">
    <div class="hero-content">
        <h1>Our Services</h1>
        <p>Explore the top-quality services we provide to keep your tech in peak condition. From mobile repairs to device upgrades, we’ve got your tech needs covered.</p>
        <a href="#services" class="cta-button">Scroll Down to Explore</a>
    </div>
</section>

<!-- Modal structure -->
<div id="repair-popup" class="modal">
    <button id="close-popup" class="close-button">×</button> <!-- Close button with cross -->
    <h3>Phone Repair Services</h3>
    <p>Need a quick fix? We specialize in phone repairs including screen replacements, motherboard issues, and much more. Let our experts handle it!</p>
    <a href="/mobile-repair-form" class="cta-button">Fix My Device Now</a>
</div>


<section id="services">
    <div class="container">
        <h2>Our Services</h2>
        <div class="service-list">
            <div class="service-item" onclick="window.location.href='/mobile-repair-form';">
                <h3>Mobile Repair</h3>
                <p>Get your phone repaired with us. We offer screen repair, motherboard repair, and more.</p>
            </div>
            <div class="service-item" onclick="window.location.href='/device-upgrade-form';">
                <h3>Device Upgrades</h3>
                <p>Upgrade your devices to the latest models and get great deals on trade-ins.</p>
            </div>
            <div class="service-item" onclick="window.location.href='/accessories-shop';">
                <h3>Custom Accessories</h3>
                <p>Find custom accessories for your devices. From cases to chargers, we’ve got you covered.</p>
            </div>
        </div>

        <!-- Additional Services -->
        <div class="additional-services">
            <h2>Why Choose Us?</h2>
            <div class="service-item">
                <h3>Fast & Reliable Service</h3>
                <p>We value your time, and that's why we offer quick turnaround times to get your devices fixed and back in your hands.</p>
            </div>
            <div class="service-item">
                <h3>Experienced Technicians</h3>
                <p>Our team of skilled professionals has years of experience and training, ensuring the best quality of service for your devices.</p>
            </div>
            <div class="service-item">
                <h3>Affordable Prices</h3>
                <p>We provide high-quality repairs and upgrades at competitive prices, so you get the best value for your money.</p>
            </div>
        </div>

        <!-- Customer Testimonials -->
        <div class="testimonials">
            <h3>What Our Customers Say</h3>
            <div class="testimonial-item">
                <p>"The Unbox Store saved my phone! Their repair service is top-notch, and the team is super friendly!"</p>
                <span>- John D.</span>
            </div>
            <div class="testimonial-item">
                <p>"I upgraded my device with them, and the process was smooth. Highly recommend for anyone looking to upgrade their tech!"</p>
                <span>- Sarah L.</span>
            </div>
        </div>
    </div>
</section>
<!-- Footer Section -->
<footer id="footer">
    <div class="footer-container">
        <div class="footer-logo">
            <img src="path_to_logo.jpg" alt="The Unbox Store Logo">
        </div>
        <div class="footer-nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
        <div class="footer-social">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
        </div>
        <div class="footer-contact">
            <p>Contact us at: support@theunboxstore.com</p>
        </div>
    </div>
</footer>

</body>
</html>
