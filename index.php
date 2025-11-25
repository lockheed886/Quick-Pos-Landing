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

    <!-- [SCRUM-31] Hero Section Start -->
    <section id="hero" class="hero-section">
        <div class="container hero-container">
            
            <!-- Left Side: Text Content -->
            <div class="hero-text">
                <h1 class="hero-headline">
                    The Last POS System <br>
                    <span class="highlight">You’ll Ever Need.</span>
                </h1>
                <p class="hero-subhead">
                    Manage sales, inventory, and employees with the luxurious speed your business deserves. Setup takes seconds.
                </p>
                <div class="hero-buttons">
                    <a href="#" class="btn-primary">Get Started for Free</a>
                    <a href="#features" class="btn-secondary">View Features</a>
                </div>
            </div>

            <!-- Right Side: Visual/Image -->
            <!-- Using a CSS 'Glass' Card to represent the Software UI -->
            <div class="hero-visual">
                <div class="pos-mockup">
                    <div class="mockup-header">
                        <span class="dot red"></span>
                        <span class="dot yellow"></span>
                        <span class="dot green"></span>
                    </div>
                    <div class="mockup-body">
                        <div class="mockup-sidebar"></div>
                        <div class="mockup-content">
                            <div class="skeleton-line full"></div>
                            <div class="skeleton-line half"></div>
                            <div class="skeleton-grid">
                                <div class="box"></div>
                                <div class="box"></div>
                                <div class="box"></div>
                                <div class="box"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Ambient Glow Effect behind image -->
                <div class="glow-effect"></div>
            </div>

        </div>
    </section>
    <!-- [SCRUM-31] Hero Section End -->
    
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
     <!-- [SCRUM-34] Feature Content Start -->
    <?php
    // PHP Data Structure for Feature Content
    // This makes it easy to change text without touching HTML
    $featuresContent = [
        [
            "title" => "Smart Inventory",
            "desc"  => "Never run out of stock. Our system tracks every item in real-time and sends automated alerts when supplies run low.",
            // SVG Icon: Box/Cube
            "icon"  => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>'
        ],
        [
            "title" => "Sales Analytics",
            "desc"  => "Visualize your success. Access detailed profit margin reports, staff performance metrics, and revenue trends instantly.",
            // SVG Icon: Bar Chart
            "icon"  => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>'
        ],
        [
            "title" => "Seamless Integration",
            "desc"  => "Connects perfectly with the tools you already use, including QuickBooks, Stripe, and popular delivery apps.",
            // SVG Icon: Link
            "icon"  => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>'
        ]
    ];
    ?>

    <div class="features-grid">
        <?php foreach ($featuresContent as $feature): ?>
            <div class="feature-card">
                <div class="icon-wrapper">
                    <?php echo $feature['icon']; ?>
                </div>
                <h3><?php echo $feature['title']; ?></h3>
                <p><?php echo $feature['desc']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- [SCRUM-34] Feature Content End -->
     <!-- [SCRUM-35] Pricing Section Start -->
    <?php
    // PHP Logic: Define Pricing Plans
    $pricingPlans = [
        [
            "name" => "Basic",
            "price" => "$0",
            "period" => "/mo",
            "desc" => "Perfect for small pop-up shops.",
            "features" => ["Single User", "100 Products", "Basic Analytics"],
            "highlight" => false
        ],
        [
            "name" => "Pro",
            "price" => "$49",
            "period" => "/mo",
            "desc" => "For growing businesses.",
            "features" => ["5 Staff Accounts", "Unlimited Products", "Advanced Analytics", "Inventory Alerts"],
            "highlight" => true // This signals the 'Featured' style
        ],
        [
            "name" => "Enterprise",
            "price" => "Custom",
            "period" => "",
            "desc" => "For large scale retail chains.",
            "features" => ["Unlimited Users", "API Access", "Dedicated Support", "Custom Integrations"],
            "highlight" => false
        ]
    ];
    ?>

    <section id="pricing" class="pricing-section">
        <div class="container">
            <div class="section-header">
                <h2>Simple Pricing</h2>
                <p>Transparent costs. No hidden fees.</p>
            </div>

            <div class="pricing-grid">
                <?php foreach ($pricingPlans as $plan): ?>
                    <!-- Add 'featured' class if it's the Pro plan -->
                    <div class="pricing-card <?php echo $plan['highlight'] ? 'featured' : ''; ?>">
                        
                        <div class="card-header">
                            <h3><?php echo $plan['name']; ?></h3>
                            <div class="price-box">
                                <span class="price"><?php echo $plan['price']; ?></span>
                                <span class="period"><?php echo $plan['period']; ?></span>
                            </div>
                            <p class="plan-desc"><?php echo $plan['desc']; ?></p>
                        </div>

                        <ul class="feature-list">
                            <?php foreach ($plan['features'] as $feature): ?>
                                <li>
                                    <!-- Checkmark Icon -->
                                    <svg class="check-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <?php echo $feature; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <a href="#contact" class="btn-pricing">Choose <?php echo $plan['name']; ?></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- [SCRUM-35] Pricing Section End -->
     <!-- [SCRUM-10] Contact Section Start -->
    <section id="contact" class="contact-section">
        <div class="container contact-container">
            
            <div class="contact-text">
                <h2>Get in Touch</h2>
                <p>Ready to upgrade your business? Send us a message.</p>
                
                <!-- PHP Error Message Display -->
                <?php if (isset($_GET['error'])): ?>
                    <div style="color: #ff5f56; margin-bottom: 20px; border: 1px solid #ff5f56; padding: 10px;">
                        <?php 
                            if($_GET['error'] == "empty_fields") echo "Please fill in all fields.";
                            if($_GET['error'] == "invalid_email") echo "Please enter a valid email.";
                        ?>
                    </div>
                <?php endif; ?>
            </div>

            <form action="process-contact.php" method="POST" class="contact-form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="John Doe">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="john@company.com">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Tell us about your needs..."></textarea>
                </div>

                <button type="submit" class="btn-submit">Send Message</button>
            </form>

        </div>
    </section>
    <!-- [SCRUM-10] Contact Section End -->
     <!-- [SCRUM-39] Footer Start -->
    <?php
    // PHP Logic: Get current year automatically
    $currentYear = date("Y");

    // PHP Logic: Social Media Links Array
    $socialLinks = [
        "Twitter"  => ["url" => "#", "icon" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-12.7 12.5S.2 5.3 7.8 4.5c2.1-.2 3.2-.4 3.2-.4l-.9 5.6 3-2.5 5 4.5.3-7.7z"></path></svg>'],
        "LinkedIn" => ["url" => "#", "icon" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>'],
        "Facebook" => ["url" => "#", "icon" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>']
    ];
    ?>

    <footer class="site-footer">
        <div class="container footer-container">
            <!-- Left Side: Copyright -->
            <div class="footer-left">
                <p>&copy; <?php echo $currentYear; ?> QuickPOS. All rights reserved.</p>
            </div>

            <!-- Right Side: Social Icons -->
            <div class="footer-right">
                <ul class="social-list">
                    <?php foreach ($socialLinks as $platform => $data): ?>
                        <li>
                            <a href="<?php echo $data['url']; ?>" class="social-link" aria-label="<?php echo $platform; ?>">
                                <?php echo $data['icon']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </footer>
    <!-- [SCRUM-39] Footer End -->
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