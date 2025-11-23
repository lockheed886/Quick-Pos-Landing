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

    <script>
        // Simple JavaScript for Mobile Menu
        const menuToggle = document.getElementById('mobile-menu');
        const navList = document.querySelector('.nav-list');

        menuToggle.addEventListener('click', () => {
            navList.classList.toggle('active');
        });
    </script>
</body>
</html>