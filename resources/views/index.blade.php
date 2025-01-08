<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Unbox Store</title>
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
                <li><a href="/about">About Us</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Hero Section -->
<section id="hero">
        <div class="hero-content">
            <h1>Welcome to The Unbox Store</h1>
            <p>Your one-stop shop for the latest gadgets and tech products</p>
            <a href="#products" class="cta-button">Browse Products</a>
        </div>
</section>

<!-- Modal structure -->
<div id="repair-popup" class="modal">
    <button id="close-popup" class="close-button">×</button> <!-- Close button with cross -->
    <h3>Phone Repair Services</h3>
    <p>Need a quick fix? We specialize in phone repairs including screen replacements, motherboard issues, and much more. Let our experts handle it!</p>
    <a href="/mobile-repair-form" class="cta-button">Fix My Device Now</a>
</div>

<!-- Services Section -->
<section id="services">
    <div class="container">
        <h2>Our Services</h2>
        <div class="service-list">
            <div class="service-item" onclick="window.location.href='/mobile-repair-form';">
                <h3>Mobile Repair</h3>
                <p>Get your phone repaired with us. We offer screen repair, motherboard repair, and more.</p>
            </div>
            <div class="service-item">
                <h3>Device Upgrades</h3>
                <p>Upgrade your devices to the latest models and get great deals on trade-ins.</p>
            </div>
            <div class="service-item">
                <h3>Custom Accessories</h3>
                <p>Find custom accessories for your devices. From cases to chargers, we’ve got you covered.</p>
            </div>
        </div>
    </div>
</section>

<!-- Product Showcase Section -->
<section id="products">
    <div class="container">
        <h2>Featured Products</h2>
        <div class="product-grid">
            <!-- Product 1 -->
            <div class="product-card">
                <img src="{{ asset('assets/apple_intelligence__gbh77cvflkia_xlarge.jpg') }}" alt="Product 1">
                <h3>Product 1</h3>
                <p>Price: $499</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <img src="{{ asset('assets/personalize__dwg8srggrbo2_xlarge.jpg') }}" alt="Product 2">
                <h3>Product 2</h3>
                <p>Price: $699</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <img src="{{ asset('assets/environment__e3v3gj88dl6q_xlarge.jpg') }}" alt="Product 3">
                <h3>Product 3</h3>
                <p>Price: $999</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <img src="{{ asset('assets/innovation__os9bmmo3mjee_xlarge.jpg') }}" alt="Product 4">
                <h3>Product 4</h3>
                <p>Price: $1299</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 5 -->
            <div class="product-card">
                <img src="{{ asset('assets/apple_intelligence__gbh77cvflkia_xlarge.jpg') }}" alt="Product 5">
                <h3>Product 5</h3>
                <p>Price: $799</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 6 -->
            <div class="product-card">
                <img src="{{ asset('assets/personalize__dwg8srggrbo2_xlarge.jpg') }}" alt="Product 6">
                <h3>Product 6</h3>
                <p>Price: $899</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 7 -->
            <div class="product-card">
                <img src="{{ asset('assets/environment__e3v3gj88dl6q_xlarge.jpg') }}" alt="Product 7">
                <h3>Product 7</h3>
                <p>Price: $1099</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 8 -->
            <div class="product-card">
                <img src="{{ asset('assets/innovation__os9bmmo3mjee_xlarge.jpg') }}" alt="Product 8">
                <h3>Product 8</h3>
                <p>Price: $1199</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 9 -->
            <div class="product-card">
                <img src="{{ asset('assets/apple_intelligence__gbh77cvflkia_xlarge.jpg') }}" alt="Product 9">
                <h3>Product 9</h3>
                <p>Price: $599</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 10 -->
            <div class="product-card">
                <img src="{{ asset('assets/personalize__dwg8srggrbo2_xlarge.jpg') }}" alt="Product 10">
                <h3>Product 10</h3>
                <p>Price: $799</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 11 -->
            <div class="product-card">
                <img src="{{ asset('assets/environment__e3v3gj88dl6q_xlarge.jpg') }}" alt="Product 11">
                <h3>Product 11</h3>
                <p>Price: $899</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 12 -->
            <div class="product-card">
                <img src="{{ asset('assets/innovation__os9bmmo3mjee_xlarge.jpg') }}" alt="Product 12">
                <h3>Product 12</h3>
                <p>Price: $1299</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 13 -->
            <div class="product-card">
                <img src="{{ asset('assets/apple_intelligence__gbh77cvflkia_xlarge.jpg') }}" alt="Product 13">
                <h3>Product 13</h3>
                <p>Price: $1099</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 14 -->
            <div class="product-card">
                <img src="{{ asset('assets/personalize__dwg8srggrbo2_xlarge.jpg') }}" alt="Product 14">
                <h3>Product 14</h3>
                <p>Price: $899</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 15 -->
            <div class="product-card">
                <img src="{{ asset('assets/environment__e3v3gj88dl6q_xlarge.jpg') }}" alt="Product 15">
                <h3>Product 15</h3>
                <p>Price: $999</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 16 -->
            <div class="product-card">
                <img src="{{ asset('assets/innovation__os9bmmo3mjee_xlarge.jpg') }}" alt="Product 16">
                <h3>Product 16</h3>
                <p>Price: $799</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 17 -->
            <div class="product-card">
                <img src="{{ asset('assets/apple_intelligence__gbh77cvflkia_xlarge.jpg') }}" alt="Product 17">
                <h3>Product 17</h3>
                <p>Price: $1299</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 18 -->
            <div class="product-card">
                <img src="{{ asset('assets/personalize__dwg8srggrbo2_xlarge.jpg') }}" alt="Product 18">
                <h3>Product 18</h3>
                <p>Price: $1099</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 19 -->
            <div class="product-card">
                <img src="{{ asset('assets/environment__e3v3gj88dl6q_xlarge.jpg') }}" alt="Product 19">
                <h3>Product 19</h3>
                <p>Price: $999</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 20 -->
            <div class="product-card">
                <img src="{{ asset('assets/innovation__os9bmmo3mjee_xlarge.jpg') }}" alt="Product 20">
                <h3>Product 20</h3>
                <p>Price: $899</p>
                <button class="product-button">Buy Now</button>
            </div>
        </div>
    </div>
</section>

<!-- Laptop Showcase Section -->
<section id="laptops">
    <div class="container">
        <h2>Featured Laptops</h2>
        <div class="product-grid">
            <!-- Laptop 1 -->
            <div class="product-card">
                <img src="{{ asset('assets/mac1.jpg') }}" alt="Laptop 1">
                <h3>Laptop 1</h3>
                <p>Price: $799</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Laptop 2 -->
            <div class="product-card">
                <img src="{{ asset('assets/mac1.jpg') }}" alt="Laptop 2">
                <h3>Laptop 2</h3>
                <p>Price: $999</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Laptop 3 -->
            <div class="product-card">
                <img src="{{ asset('assets/mac1.jpg') }}" alt="Laptop 3">
                <h3>Laptop 3</h3>
                <p>Price: $1299</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Laptop 4 -->
            <div class="product-card">
                <img src="{{ asset('assets/mac1.jpg') }}" alt="Laptop 4">
                <h3>Laptop 4</h3>
                <p>Price: $1599</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Laptop 5 -->
            <div class="product-card">
                <img src="{{ asset('assets/mac1.jpg') }}" alt="Laptop 5">
                <h3>Laptop 5</h3>
                <p>Price: $799</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Laptop 6 -->
            <div class="product-card">
                <img src="{{ asset('assets/mac1.jpg') }}" alt="Laptop 6">
                <h3>Laptop 6</h3>
                <p>Price: $999</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Laptop 7 -->
            <div class="product-card">
                <img src="{{ asset('assets/mac1.jpg') }}" alt="Laptop 7">
                <h3>Laptop 7</h3>
                <p>Price: $1299</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Laptop 8 -->
            <div class="product-card">
                <img src="{{ asset('assets/mac1.jpg') }}" alt="Laptop 8">
                <h3>Laptop 8</h3>
                <p>Price: $1599</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Laptop 9 -->
            <div class="product-card">
                <img src="{{ asset('assets/mac1.jpg') }}" alt="Laptop 9">
                <h3>Laptop 9</h3>
                <p>Price: $799</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Laptop 10 -->
            <div class="product-card">
                <img src="{{ asset('assets/mac1.jpg') }}" alt="Laptop 10">
                <h3>Laptop 10</h3>
                <p>Price: $999</p>
                <button class="product-button">Buy Now</button>
            </div>

        </div>
    </div>
</section>

<section id="accessories">
    <div class="container">
        <h2>Featured Accessories</h2>
        <div class="product-grid">
            <!-- Accessory 1 -->
            <div class="product-card">
                <img src="{{ asset('assets/card1.jpg') }}" alt="Accessory 1">
                <h3>Accessory 1</h3>
                <p>Price: $49</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Accessory 2 -->
            <div class="product-card">
                <img src="{{ asset('assets/card2.jpg') }}" alt="Accessory 2">
                <h3>Accessory 2</h3>
                <p>Price: $79</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Accessory 3 -->
            <div class="product-card">
                <img src="{{ asset('assets/card3.jpg') }}" alt="Accessory 3">
                <h3>Accessory 3</h3>
                <p>Price: $129</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Accessory 4 -->
            <div class="product-card">
                <img src="{{ asset('assets/card4.jpg') }}" alt="Accessory 4">
                <h3>Accessory 4</h3>
                <p>Price: $199</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Accessory 5 -->
            <div class="product-card">
                <img src="{{ asset('assets/card5.jpg') }}" alt="Accessory 5">
                <h3>Accessory 5</h3>
                <p>Price: $199</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Repeated Accessories (1 to 5) -->
            <!-- Accessory 6 -->
            <div class="product-card">
                <img src="{{ asset('assets/card1.jpg') }}" alt="Accessory 1">
                <h3>Accessory 1</h3>
                <p>Price: $49</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Accessory 7 -->
            <div class="product-card">
                <img src="{{ asset('assets/card2.jpg') }}" alt="Accessory 2">
                <h3>Accessory 2</h3>
                <p>Price: $79</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Accessory 8 -->
            <div class="product-card">
                <img src="{{ asset('assets/card3.jpg') }}" alt="Accessory 3">
                <h3>Accessory 3</h3>
                <p>Price: $129</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Accessory 9 -->
            <div class="product-card">
                <img src="{{ asset('assets/card4.jpg') }}" alt="Accessory 4">
                <h3>Accessory 4</h3>
                <p>Price: $199</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Accessory 10 -->
            <div class="product-card">
                <img src="{{ asset('assets/card5.jpg') }}" alt="Accessory 5">
                <h3>Accessory 5</h3>
                <p>Price: $199</p>
                <button class="product-button">Buy Now</button>
            </div>

        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials">
    <div class="container">
        <h2>Customer Testimonials</h2>
        <div class="testimonial-slider">
            <div class="testimonial">
                <img src="{{ asset('assets/african-american-girl-with-thumbs-up-office_191555-9171.png') }}" alt="Customer 1">
                <p>"Amazing products and top-notch service!"</p>
                <h4>Sarah J.</h4>
            </div>
            <div class="testimonial">
                <img src="{{ asset('assets/indian-happy-guy-man-arabian-ethnic-businessman-smiling-employee-entrepreneur-manager-use-laptop_717737-10886.png') }}" alt="Customer 2">
                <p>"I love my new MacBook, it's the best purchase ever!"</p>
                <h4>John D.</h4>
            </div>
            <div class="testimonial">
                <img src="{{ asset('assets/carefree-happy-young-african-american-man-with-funky-hairstyle-showing-ok-sign_273609-14095.png') }}" alt="Customer 3">
                <p>"Excellent customer support and fast delivery!"</p>
                <h4>Alice B.</h4>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section id="about">
    <div class="container">
        <h2>About Us</h2>
        <p>At The Unbox Store, we specialize in providing the latest tech products and gadgets at unbeatable prices. Whether you're upgrading your device or selling an old one, we ensure a seamless and hassle-free experience. Our mission is to deliver top-quality products that meet your tech needs.</p>
    </div>
</section>

<!-- Contact Us Section -->
<section id="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <form id="contact-form">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <button type="submit">Send Message</button>
        </form>
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