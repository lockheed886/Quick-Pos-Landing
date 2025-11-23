<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS - Modern Point of Sale</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Fonts for Luxurious Look -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

    <?php
    // PHP Logic: Define links here to make editing easy later
    $navLinks = [
        "Features" => "#features",
        "Pricing"  => "#pricing",
        "Contact"  => "#contact"
    ];
    ?>

    <!-- START NAVIGATION -->
    <nav class="navbar">
        <div class="container">
            <!-- Logo -->
            <a href="#" class="logo">
                Quick<span>POS</span>
            </a>

            <!-- Mobile Menu Toggle -->
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <!-- Navigation Links -->
            <ul class="nav-list">
                <?php foreach ($navLinks as $name => $link): ?>
                    <li class="nav-item">
                        <a href="<?php echo $link; ?>" class="nav-link"><?php echo $name; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- CTA Button -->
            <a href="#" class="btn-signup">Get Started</a>
        </div>
    </nav>
    <!-- END NAVIGATION -->

    <!-- Placeholder for Hero Section -->
    <section style="height: 100vh; background: #050505; color: white; display:flex; align-items:center; justify-content:center;">
        <h1>Hero Section Coming Soon</h1>
    </section>
    
    <!-- [SCRUM-33] Features Layout Start -->
    <section id="features" class="features-section">
        <div class="container">
            
            <!-- Section Header -->
            <div class="section-header">
                <h2>Precision Control</h2>
                <p>Scan the capabilities that power your business.</p>
            </div>

            <!-- The Grid Layout -->
            <div class="features-grid">
                <!-- Feature 1 -->
                <div class="feature-card">
                    <div class="icon-wrapper">
                        <!-- Simple SVG Icon (Chart) -->
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                    </div>
                    <h3>Real-Time Analytics</h3>
                    <p>Monitor sales data instantly as it happens.</p>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card">
                    <div class="icon-wrapper">
                        <!-- Simple SVG Icon (Box) -->
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                    </div>
                    <h3>Smart Inventory</h3>
                    <p>Automated tracking prevents stock shortages.</p>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card">
                    <div class="icon-wrapper">
                        <!-- Simple SVG Icon (Link) -->
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                    </div>
                    <h3>Easy Integration</h3>
                    <p>Works seamlessly with your existing tools.</p>
                </div>
            </div>
            <!-- End Grid -->

        </div>
    </section>
    <!-- [SCRUM-33] Features Layout End -->
   <script>
    const menuToggle = document.getElementById('mobile-menu');
    const navList = document.querySelector('.nav-list');

    menuToggle.addEventListener('click', () => {
        // 1. Toggle the Slide-down menu
        navList.classList.toggle('active');
        
        // 2. Toggle the "X" animation on the hamburger icon
        menuToggle.classList.toggle('is-active');
    });
</script>
</body>
</html>