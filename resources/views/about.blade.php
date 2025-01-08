<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us - The Unbox Store</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
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
                <li><a href="/">Home</a></li>
                <li><a href="/product">Products</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Hero Section -->
<section id="hero">
    <div class="hero-content">
        <h1>About The Unbox Store</h1>
        <p>At The Unbox Store, we’re passionate about bringing you the latest tech and gadgets, all while providing top-notch device upgrades and repair services. Whether you're looking to buy, sell, or fix your device, we’ve got you covered. Explore our products and services today!</p>
        <!-- Change button to trigger showAboutUs function -->
        <a href="#about" class="cta-button">Learn More About Us</a>
    </div>
</section>

<!-- Modal structure -->
<div id="repair-popup" class="modal">
    <button id="close-popup" class="close-button">×</button> <!-- Close button with cross -->
    <h3>Phone Repair Services</h3>
    <p>Need a quick fix? We specialize in phone repairs including screen replacements, motherboard issues, and much more. Let our experts handle it!</p>
    <a href="/mobile-repair-form" class="cta-button">Fix My Device Now</a>
</div>

<!-- About Us Section -->
<section id="about">
    <div class="container">
        <h2>About Us</h2>
        <p><strong>The Unbox Store</strong> is your go-to destination for the latest tech and gadgets. We’re passionate about making technology accessible and affordable, offering a range of devices and accessories that cater to your needs. Whether you're upgrading, selling, or repairing your device, we provide top-quality service and products. Our goal is to offer a seamless experience with the best customer support and the most competitive prices in the market.</p>

        <!-- Mission Section -->
        <div class="section-gap">
            <h3>Our Mission</h3>
            <p>Our mission is to deliver exceptional service, top-quality products, and hassle-free tech solutions for everyone. We believe in keeping you connected with the latest innovations at unbeatable prices.</p>
        </div>

        <!-- Offerings Section -->
        <div class="section-gap">
            <h3>What We Offer</h3>
            <ul>
                <li><strong>Device Sales:</strong> Latest smartphones, laptops, and accessories at competitive prices.</li>
                <li><strong>Device Upgrades:</strong> Hassle-free upgrades to keep you on top of tech trends.</li>
                <li><strong>Device Repairs:</strong> Quick and reliable repairs for all your tech needs.</li>
                <li><strong>Sell Your Device:</strong> Easy and fast process to sell your old devices at great prices.</li>
            </ul>
        </div>

        <!-- Why Choose Us Section -->
        <div class="section-gap">
            <h3>Why Choose Us?</h3>
            <ul>
                <li><strong>Customer-Centric:</strong> We prioritize your needs and strive to provide the best service.</li>
                <li><strong>Experienced Technicians:</strong> Skilled professionals handling your device with care.</li>
                <li><strong>Competitive Pricing:</strong> Quality products and services at the most affordable rates.</li>
                <li><strong>Wide Selection:</strong> Everything from devices to accessories, all in one place.</li>
            </ul>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer id="footer">
    <div class="footer-container">
        <div class="footer-logo">
            <img src="path_to_logo.jpg" alt="The Unbox Store">
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
