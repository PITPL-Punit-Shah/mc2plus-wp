<?php
/**
 * Template Name: Products Page
 */
get_header();
?>
<!-- Dark Mesh Hero Section -->
<section class="bg-mesh-dark py-5 text-white position-relative text-center">
    <div class="container py-lg-4">
    <?php global_processing_breadcrumbs( 'd-flex justify-content-center mb-3' ); ?>
    <span class="badge bg-gms-blue text-white px-3 py-2 rounded-pill fw-semibold mb-3">
        <i class="bi bi-cpu-fill me-1"></i> Complete Payment Hardware &amp; Software Suite
    </span>
    <h1 class="display-4 fw-extrabold text-white mb-3">
        Smart POS Systems, Terminals &amp; ATM Hardware
    </h1>
    <p class="lead text-white-50 mx-auto mb-4 fs-5" style="max-width: 780px;">
        Empower your business with cutting-edge countertop terminals, cloud-based POS platforms, wireless handhelds,
        and wholesale ATM machines tailored for maximum reliability and profit.
    </p>
    <div class="d-flex flex-wrap justify-content-center gap-3">
        <a href="#pos-systems" class="btn btn-gms btn-lg px-4">
        <i class="bi bi-grid-fill me-2"></i>Explore Products
        </a>
        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-gms-outline-white btn-lg px-4">
        <i class="bi bi-file-earmark-text-fill me-2"></i>Statement Analysis
        </a>
    </div>
    </div>
</section>

<!-- Value Highlights Banner Strip -->
<section class="py-3 bg-gms-navy text-white border-bottom border-white border-opacity-10">
    <div class="container">
    <div class="row g-3 text-center align-items-center justify-content-center">
        <div class="col-6 col-md-3">
        <div class="d-flex align-items-center justify-content-center gap-2">
            <i class="bi bi-gift-fill text-gms-blue fs-5"></i>
            <span class="small fw-semibold text-white">Terminal Placement Program</span>
        </div>
        </div>
        <div class="col-6 col-md-3">
        <div class="d-flex align-items-center justify-content-center gap-2">
            <i class="bi bi-percent text-gms-blue fs-5"></i>
            <span class="small fw-semibold text-white">0% Fee Cash Discount Ready</span>
        </div>
        </div>
        <div class="col-6 col-md-3">
        <div class="d-flex align-items-center justify-content-center gap-2">
            <i class="bi bi-shield-check text-gms-blue fs-5"></i>
            <span class="small fw-semibold text-white">EMV &amp; PCI Level 1 Certified</span>
        </div>
        </div>
        <div class="col-6 col-md-3">
        <div class="d-flex align-items-center justify-content-center gap-2">
            <i class="bi bi-headset text-gms-blue fs-5"></i>
            <span class="small fw-semibold text-white">24/7/365 US Live Support</span>
        </div>
        </div>
    </div>
    </div>
</section>

<!-- Category Quick Jump Navigation -->
<div class="product-category-nav py-3">
    <div class="container">
    <div class="d-flex flex-wrap gap-2 justify-content-center align-items-center">
        <a href="#pos-systems" class="product-nav-link active">
        <i class="bi bi-tablet-landscape-fill"></i> POS Systems
        </a>
        <a href="#terminals" class="product-nav-link">
        <i class="bi bi-credit-card-2-front-fill"></i> Credit Card Terminals
        </a>
        <a href="#atm-machines" class="product-nav-link">
        <i class="bi bi-cash-coin"></i> ATM Machines
        </a>
        <a href="#mobile-payments" class="product-nav-link">
        <i class="bi bi-phone-fill"></i> Mobile &amp; Wireless
        </a>
        <a href="#hardware-matcher" class="product-nav-link">
        <i class="bi bi-sliders"></i> Hardware Matcher
        </a>
        <a href="#supplies" class="product-nav-link">
        <i class="bi bi-printer-fill"></i> Supplies &amp; Parts
        </a>
    </div>
    </div>
</div>

<!-- SECTION 1: POINT OF SALE (POS) SYSTEMS -->
<section id="pos-systems" class="py-5 bg-white">
    <div class="container py-lg-3">
    <div class="text-center mb-5">
        <span
        class="badge bg-gms-light text-gms-blue border border-line px-3 py-2 rounded-pill fw-bold text-uppercase">
        Smart Cloud Point of Sale
        </span>
        <h2 class="display-6 fw-bold text-gms-navy mt-2 mb-3">Next-Generation POS Systems</h2>
        <p class="text-secondary mx-auto mb-0 fs-6" style="max-width: 680px;">
        Intuitive touchscreen stations designed to accelerate checkout, streamline multi-location inventory, track
        employee hours, and automate customer loyalty.
        </p>
    </div>

    <!-- Featured POS Ecosystem: NCR Silver & Clover Grid -->
    <div class="row g-4 mb-5">
        <!-- Clover POS Ecosystem -->
        <div class="col-lg-6">
        <div class="hardware-card featured-card">
            <div>
            <span class="hardware-badge-ribbon bg-gms-blue text-white">Flagship Cloud POS</span>
            <div class="hardware-img-container">
                <i class="bi bi-display"></i>
            </div>
            <div class="d-flex flex-wrap gap-1 mb-2">
                <span class="hardware-spec-pill"><i class="bi bi-cloud-check-fill text-gms-blue"></i> Cloud
                Sync</span>
                <span class="hardware-spec-pill"><i class="bi bi-shield-lock-fill text-gms-blue"></i> End-to-End
                Encryption</span>
                <span class="hardware-spec-pill"><i class="bi bi-wifi text-gms-blue"></i> 4G / LTE &amp; WiFi</span>
            </div>
            <h3 class="h4 fw-bold text-gms-navy mb-2">Clover POS Ecosystem</h3>
            <p class="text-secondary small mb-3">
                All-in-one point-of-sale solution with versatile hardware options including Clover Station Duo, Mini,
                Flex, and Go. Perfect for busy restaurants, retailers, and service providers.
            </p>
            <div class="feature-check-item">
                <i class="bi bi-check-circle-fill"></i>
                <span><strong>Full Hardware Range:</strong> Dual touchscreens, high-speed receipt printers, cash
                drawers, and mobile barcode scanners.</span>
            </div>
            <div class="feature-check-item">
                <i class="bi bi-check-circle-fill"></i>
                <span><strong>Accept Everything:</strong> EMV chip cards, Apple Pay, Google Pay, contactless NFC, gift
                cards, and cash.</span>
            </div>
            <div class="feature-check-item">
                <i class="bi bi-check-circle-fill"></i>
                <span><strong>App Market:</strong> 300+ business management apps for payroll, online ordering, and
                loyalty rewards.</span>
            </div>
            </div>
            <div
            class="pt-4 border-top border-line mt-3 d-flex flex-wrap align-items-center justify-content-between gap-2">
            <a href="<?php echo esc_url(home_url('/point-of-sale-system/')); ?>" class="btn btn-gms btn-sm">
                View Clover Systems <i class="bi bi-arrow-right ms-1"></i>
            </a>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-outline-dark btn-sm">Request Live Demo</a>
            </div>
        </div>
        </div>

        <!-- NCR Silver POS System -->
        <div class="col-lg-6">
        <div class="hardware-card">
            <div>
            <span class="hardware-badge-ribbon bg-gms-navy text-white">Enterprise Scalability</span>
            <div class="hardware-img-container">
                <i class="bi bi-tablet-landscape"></i>
            </div>
            <div class="d-flex flex-wrap gap-1 mb-2">
                <span class="hardware-spec-pill"><i class="bi bi-building-fill text-gms-blue"></i>
                Multi-Location</span>
                <span class="hardware-spec-pill"><i class="bi bi-boxes text-gms-blue"></i> Live Inventory</span>
                <span class="hardware-spec-pill"><i class="bi bi-wifi-off text-gms-blue"></i> Offline Mode</span>
            </div>
            <h3 class="h4 fw-bold text-gms-navy mb-2">NCR Silver POS System</h3>
            <p class="text-secondary small mb-3">
                A dynamic, cloud-powered POS designed for retail, franchise stores, and restaurants. Offers deep
                administrative control, integrated marketing, and employee time tracking.
            </p>
            <div class="feature-check-item">
                <i class="bi bi-check-circle-fill"></i>
                <span><strong>Multi-Unit Management:</strong> Centralized real-time reporting across all store
                locations in a single dashboard.</span>
            </div>
            <div class="feature-check-item">
                <i class="bi bi-check-circle-fill"></i>
                <span><strong>Built-In Email Marketing:</strong> Launch automated email campaigns and capture customer
                contact details at checkout.</span>
            </div>
            <div class="feature-check-item">
                <i class="bi bi-check-circle-fill"></i>
                <span><strong>Offline Transaction Processing:</strong> Continue ringing up sales even during internet
                outages without losing transactions.</span>
            </div>
            </div>
            <div
            class="pt-4 border-top border-line mt-3 d-flex flex-wrap align-items-center justify-content-between gap-2">
            <a href="tel:5164222002" class="btn btn-gms-navy btn-sm">
                <i class="bi bi-telephone-fill me-1"></i> Speak With A Specialist
            </a>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-outline-dark btn-sm">Get Pricing Quote</a>
            </div>
        </div>
        </div>
    </div>

    <!-- Secondary POS Options: MYNT & NRS -->
    <div class="row g-4">
        <div class="col-md-6 col-lg-4">
        <div class="p-4 rounded-4 border border-line bg-gms-light h-100 d-flex flex-column justify-content-between">
            <div>
            <div class="d-flex align-items-center gap-2 mb-2">
                <i class="bi bi-cup-hot-fill text-gms-blue fs-4"></i>
                <h4 class="h5 fw-bold text-gms-navy mb-0">MYNT POS</h4>
            </div>
            <p class="small text-secondary mb-3">
                Heavy-duty all-in-one touchscreen hardware designed for high-turnover hospitality, bars, cafes, and
                fine dining with tableside ordering and split-check capabilities.
            </p>
            <ul class="list-unstyled small text-secondary mb-3">
                <li class="mb-1"><i class="bi bi-check2 text-gms-blue me-2"></i>Table layout &amp; kitchen printer
                routing</li>
                <li class="mb-1"><i class="bi bi-check2 text-gms-blue me-2"></i>Integrated tip prompts &amp; cash
                discounting</li>
                <li class="mb-1"><i class="bi bi-check2 text-gms-blue me-2"></i>Solid-state fanless aluminum chassis
                </li>
            </ul>
            </div>
            <a href="<?php echo esc_url(home_url('/point-of-sale-system/')); ?>" class="btn btn-outline-dark btn-sm w-100">Explore MYNT POS</a>
        </div>
        </div>

        <div class="col-md-6 col-lg-4">
        <div class="p-4 rounded-4 border border-line bg-gms-light h-100 d-flex flex-column justify-content-between">
            <div>
            <div class="d-flex align-items-center gap-2 mb-2">
                <i class="bi bi-shop text-gms-blue fs-4"></i>
                <h4 class="h5 fw-bold text-gms-navy mb-0">NRS POS (National Retail)</h4>
            </div>
            <p class="small text-secondary mb-3">
                Built specifically for convenience stores, bodegas, liquor stores, and tobacco shops with integrated
                customer-facing ad screen, barcode scanning, and tobacco rebate sync.
            </p>
            <ul class="list-unstyled small text-secondary mb-3">
                <li class="mb-1"><i class="bi bi-check2 text-gms-blue me-2"></i>Customer-facing dual screens</li>
                <li class="mb-1"><i class="bi bi-check2 text-gms-blue me-2"></i>ID age verification scanner</li>
                <li class="mb-1"><i class="bi bi-check2 text-gms-blue me-2"></i>Tobacco &amp; scan-data rebate support
                </li>
            </ul>
            </div>
            <a href="<?php echo esc_url(home_url('/point-of-sale-system/')); ?>" class="btn btn-outline-dark btn-sm w-100">Explore NRS POS</a>
        </div>
        </div>

        <div class="col-md-12 col-lg-4">
        <div
            class="p-4 rounded-4 bg-gms-navy text-white h-100 d-flex flex-column justify-content-between shadow-sm">
            <div>
            <span class="badge bg-gms-blue text-white mb-2">Expert Consultation</span>
            <h4 class="h5 fw-bold text-white mb-2">Not Sure Which POS Fits?</h4>
            <p class="small text-white-50 mb-3">
                Our payment architects will evaluate your transaction volume, store setup, and software requirements
                to match you with the ideal system at zero markup.
            </p>
            <div class="d-flex align-items-center gap-2 mb-3 text-white-50 small">
                <i class="bi bi-shield-fill-check text-gms-blue fs-5"></i>
                <span>Includes on-site installation &amp; menu/inventory loading.</span>
            </div>
            </div>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-gms btn-sm w-100">Schedule POS Consultation</a>
        </div>
        </div>
    </div>
    </div>
</section>

<!-- SECTION 2: CREDIT CARD TERMINALS & EMV HARDWARE -->
<section id="terminals" class="py-5 bg-gms-light border-top border-bottom border-line">
    <div class="container py-lg-3">

    <!-- Terminal Promotion Callout Banner -->
    <div class="hardware-promo-banner mb-5">
        <div class="row align-items-center g-4 position-relative" style="z-index: 2;">
        <div class="col-lg-8">
            <span class="badge bg-white text-gms-navy fw-bold px-3 py-1 rounded-pill mb-2">
            <i class="bi bi-stars text-gms-blue me-1"></i> Special Merchant Promotion
            </span>
            <h2 class="h2 fw-extrabold text-white mb-2">
            Get a Verifone VX520 Terminal!
            </h2>
            <p class="text-white-50 mb-0 fs-6" style="max-width: 650px;">
            Open a merchant processing account with Global Merchant Services and receive a high-speed Verifone VX520
            countertop EMV chip &amp; contactless terminal at <strong>$0 cost</strong>. No equipment leases, no
            hidden upfront hardware fees.
            </p>
        </div>
        <div class="col-lg-4 text-lg-end">
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-gms-outline-white btn-lg px-4">
            Claim Terminal Offer Today <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
        </div>
    </div>

    <div class="text-center mb-5">
        <span class="badge bg-white text-gms-blue border border-line px-3 py-2 rounded-pill fw-bold text-uppercase">
        EMV Chip &amp; Contactless NFC
        </span>
        <h2 class="display-6 fw-bold text-gms-navy mt-2 mb-3">Countertop &amp; Smart Payment Terminals</h2>
        <p class="text-secondary mx-auto mb-0 fs-6" style="max-width: 680px;">
        Secure, lightning-fast payment hardware built for reliability. Accept all major credit cards, debit PIN, EMV
        chip, Apple Pay, and Google Wallet.
        </p>
    </div>

    <!-- Terminal Hardware Cards Grid -->
    <div class="row g-4 mb-4">
        <!-- Verifone VX520 -->
        <div class="col-md-6 col-lg-3">
        <div class="hardware-card">
            <div>
            <span class="hardware-badge-ribbon bg-success text-white">Terminal Placement</span>
            <div class="hardware-img-container">
                <i class="bi bi-credit-card-2-front"></i>
            </div>
            <h3 class="h5 fw-bold text-gms-navy mb-1">Verifone VX520</h3>
            <div class="mb-2">
                <span class="hardware-spec-pill"><i class="bi bi-shield-check"></i> EMV &amp; NFC</span>
            </div>
            <p class="small text-secondary mb-3">
                The industry workhorse countertop terminal. Unprecedented processing speed, integrated thermal receipt
                printer, and high-security encryption.
            </p>
            </div>
            <div>
            <ul class="list-unstyled small text-secondary mb-3">
                <li class="mb-1"><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Contactless Apple/Google
                Pay</li>
                <li class="mb-1"><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Dual dial-up &amp;
                Ethernet</li>
            </ul>
            <a href="<?php echo esc_url(home_url('/credit-card-terminals-michigan/')); ?>" class="btn btn-outline-dark btn-sm w-100">Learn
                More</a>
            </div>
        </div>
        </div>

        <!-- Verifone VX805 PIN Pad -->
        <div class="col-md-6 col-lg-3">
        <div class="hardware-card">
            <div>
            <span class="hardware-badge-ribbon bg-gms-navy text-white">PIN Pad</span>
            <div class="hardware-img-container">
                <i class="bi bi-calculator"></i>
            </div>
            <h3 class="h5 fw-bold text-gms-navy mb-1">Verifone VX805</h3>
            <div class="mb-2">
                <span class="hardware-spec-pill"><i class="bi bi-key-fill"></i> Secure Debit PIN</span>
            </div>
            <p class="small text-secondary mb-3">
                Customer-facing PIN pad device that pairs directly with your point-of-sale or countertop terminal for
                effortless chip insertion and secure PIN entry.
            </p>
            </div>
            <div>
            <ul class="list-unstyled small text-secondary mb-3">
                <li class="mb-1"><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> High-visibility backlit
                keys</li>
                <li class="mb-1"><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> PCI PTS 3.X approved</li>
            </ul>
            <a href="<?php echo esc_url(home_url('/emv-credit-card-terminals/')); ?>" class="btn btn-outline-dark btn-sm w-100">Learn More</a>
            </div>
        </div>
        </div>

        <!-- Verifone VX680 Wireless -->
        <div class="col-md-6 col-lg-3">
        <div class="hardware-card">
            <div>
            <span class="hardware-badge-ribbon bg-gms-blue text-white">Wireless 4G</span>
            <div class="hardware-img-container">
                <i class="bi bi-broadcast-pin"></i>
            </div>
            <h3 class="h5 fw-bold text-gms-navy mb-1">Verifone VX680</h3>
            <div class="mb-2">
                <span class="hardware-spec-pill"><i class="bi bi-phone"></i> Portable 4G/WiFi</span>
            </div>
            <p class="small text-secondary mb-3">
                Full-featured handheld wireless payment terminal with brilliant 3.5" color touchscreen for
                pay-at-the-table, curbside, and delivery fleets.
            </p>
            </div>
            <div>
            <ul class="list-unstyled small text-secondary mb-3">
                <li class="mb-1"><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Long battery life</li>
                <li class="mb-1"><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Spill-resistant keypad
                </li>
            </ul>
            <a href="<?php echo esc_url(home_url('/mobile-payment-system/')); ?>" class="btn btn-outline-dark btn-sm w-100">Learn More</a>
            </div>
        </div>
        </div>

        <!-- PAX / Dejavoo Android Smart Terminal -->
        <div class="col-md-6 col-lg-3">
        <div class="hardware-card">
            <div>
            <span class="hardware-badge-ribbon bg-gms-navy text-white">Smart Android</span>
            <div class="hardware-img-container">
                <i class="bi bi-phone-flip"></i>
            </div>
            <h3 class="h5 fw-bold text-gms-navy mb-1">Smart Android Terminals</h3>
            <div class="mb-2">
                <span class="hardware-spec-pill"><i class="bi bi-fingerprint"></i> Digital Signatures</span>
            </div>
            <p class="small text-secondary mb-3">
                Next-gen PAX &amp; Dejavoo smart terminals with vivid high-res touchscreens, digital e-receipts via
                SMS/email, and automatic tips prompting.
            </p>
            </div>
            <div>
            <ul class="list-unstyled small text-secondary mb-3">
                <li class="mb-1"><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Paperless digital receipts
                </li>
                <li class="mb-1"><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> WiFi &amp; 4G Dual
                Connectivity</li>
            </ul>
            <a href="<?php echo esc_url(home_url('/emv-credit-card-terminals/')); ?>" class="btn btn-outline-dark btn-sm w-100">Learn More</a>
            </div>
        </div>
        </div>
    </div>

    <div class="text-center pt-2">
        <p class="text-secondary small mb-3">
        Looking for wholesale terminal rates or upgrading older swipe-only machines?
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
        <a href="<?php echo esc_url(home_url('/credit-card-terminals-michigan/')); ?>" class="btn btn-gms-navy btn-sm">
            <i class="bi bi-grid me-1"></i> View All Terminal Models
        </a>
        <a href="<?php echo esc_url(home_url('/emv-credit-card-terminals/')); ?>" class="btn btn-outline-dark btn-sm">
            <i class="bi bi-shield-lock me-1"></i> EMV Compliance Guide
        </a>
        </div>
    </div>
    </div>
</section>

<!-- SECTION 3: ATM MACHINES & 3 PLACEMENT PROGRAMS -->
<section id="atm-machines" class="py-5 bg-white">
    <div class="container py-lg-3">
    <div class="text-center mb-5">
        <span
        class="badge bg-gms-light text-gms-blue border border-line px-3 py-2 rounded-pill fw-bold text-uppercase">
        Passive Revenue Generation
        </span>
        <h2 class="display-6 fw-bold text-gms-navy mt-2 mb-3">Wholesale ATM Machines &amp; Placements</h2>
        <p class="text-secondary mx-auto mb-0 fs-6" style="max-width: 680px;">
        Drive more foot traffic, boost cash sales, and create a lucrative monthly surcharge revenue stream with
        top-tier ATM hardware and flexible placement options.
        </p>
    </div>

    <!-- 3 ATM Placement Models Comparison -->
    <div class="row g-4 mb-5">
        <!-- Option 1: Direct Purchase -->
        <div class="col-lg-4">
        <div class="atm-pricing-card">
            <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="badge bg-gms-light text-gms-navy border border-line fw-bold">Option 1</span>
                <i class="bi bi-cart-check-fill text-gms-blue fs-3"></i>
            </div>
            <h3 class="h4 fw-bold text-gms-navy mb-2">Direct Purchase</h3>
            <div class="display-6 fw-extrabold text-gms-navy mb-3">100% <span
                class="fs-6 fw-normal text-muted">Surcharge Profit</span></div>
            <p class="small text-secondary mb-4">
                Purchase a brand-new ATM at factory wholesale pricing. You load your own cash, set your custom
                surcharge fee, and keep 100% of the transaction surcharge profits.
            </p>
            <div class="feature-check-item">
                <i class="bi bi-check-circle-fill"></i>
                <span><strong>Wholesale Hardware Price:</strong> Direct factory pricing on Hyosung &amp;
                Genmega.</span>
            </div>
            <div class="feature-check-item">
                <i class="bi bi-check-circle-fill"></i>
                <span><strong>Complete Control:</strong> You choose the surcharge rate (e.g. $3.00 -
                $5.00/transaction).</span>
            </div>
            <div class="feature-check-item">
                <i class="bi bi-check-circle-fill"></i>
                <span><strong>Transaction Processing:</strong> Included transaction processing and daily batch deposit.</span>
            </div>
            </div>
            <div class="mt-4 pt-3 border-top border-line">
            <a href="<?php echo esc_url(home_url('/atm-machines/')); ?>" class="btn btn-outline-dark btn-sm w-100">Inquire Wholesale Purchase</a>
            </div>
        </div>
        </div>

        <!-- Option 2: Merchant-Filled Placement (Popular) -->
        <div class="col-lg-4">
        <div class="atm-pricing-card popular-tier">
            <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="badge bg-gms-navy text-white fw-bold">Option 2</span>
                <i class="bi bi-cash-stack text-gms-blue fs-3"></i>
            </div>
            <h3 class="h4 fw-bold text-gms-navy mb-2">Merchant-Filled Placement</h3>
            <div class="display-6 fw-extrabold text-gms-navy mb-3">50 / 50 <span
                class="fs-6 fw-normal text-muted">Revenue Split</span></div>
            <p class="small text-secondary mb-4">
                We deliver, install, and maintain a brand-new ATM in your store for <strong>$0 upfront cost</strong>.
                You keep the machine loaded with cash and receive 50% of all surcharge revenue.
            </p>
            <div class="feature-check-item">
                <i class="bi bi-check-circle-fill"></i>
                <span><strong>ATM &amp; Installation:</strong> Zero equipment investment or lease.</span>
            </div>
            <div class="feature-check-item">
                <i class="bi bi-check-circle-fill"></i>
                <span><strong>Maintenance &amp; Parts:</strong> We handle all repairs and warranty
                coverage.</span>
            </div>
            <div class="feature-check-item">
                <i class="bi bi-check-circle-fill"></i>
                <span><strong>Recycle Cash:</strong> Re-invest register cash directly into the ATM vault.</span>
            </div>
            </div>
            <div class="mt-4 pt-3 border-top border-line">
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-gms btn-sm w-100">Apply for Placement</a>
            </div>
        </div>
        </div>

        <!-- Option 3: Full-Service Turnkey -->
        <div class="col-lg-4">
        <div class="atm-pricing-card">
            <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="badge bg-gms-light text-gms-navy border border-line fw-bold">Option 3</span>
                <i class="bi bi-trophy-fill text-gms-blue fs-3"></i>
            </div>
            <h3 class="h4 fw-bold text-gms-navy mb-2">Full-Service Turnkey</h3>
            <div class="display-6 fw-extrabold text-gms-navy mb-3">100% <span
                class="fs-6 fw-normal text-muted">Effortless Income</span></div>
            <p class="small text-secondary mb-4">
                For high-traffic venues. We provide the ATM, armored cash replenishment, insurance, and 24/7
                monitoring. You earn passive monthly commission with zero responsibility.
            </p>
            <div class="feature-check-item">
                <i class="bi bi-check-circle-fill"></i>
                <span><strong>Zero Labor / Cash Needed:</strong> Armored couriers manage cash loading.</span>
            </div>
            <div class="feature-check-item">
                <i class="bi bi-check-circle-fill"></i>
                <span><strong>100% Insured &amp; Serviced:</strong> Full liability &amp; maintenance coverage.</span>
            </div>
            <div class="feature-check-item">
                <i class="bi bi-check-circle-fill"></i>
                <span><strong>Monthly Direct Deposit:</strong> Automated royalty payout directly to your bank.</span>
            </div>
            </div>
            <div class="mt-4 pt-3 border-top border-line">
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-outline-dark btn-sm w-100">Request Turnkey Evaluation</a>
            </div>
        </div>
        </div>
    </div>

    <!-- ATM Models Showcase Grid -->
    <h3 class="h5 fw-bold text-gms-navy mb-3">Top ATM Hardware Brands We Supply &amp; Service</h3>
    <div class="row g-3 mb-4">
        <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-gms-light rounded-3 border border-line text-center h-100">
            <i class="bi bi-cash text-gms-blue fs-3 mb-2 d-block"></i>
            <div class="fw-bold text-gms-navy small">Hyosung Halo 2</div>
            <div class="text-muted" style="font-size: 0.75rem;">Retail Best Seller</div>
        </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-gms-light rounded-3 border border-line text-center h-100">
            <i class="bi bi-shield-check text-gms-blue fs-3 mb-2 d-block"></i>
            <div class="fw-bold text-gms-navy small">Hyosung Force</div>
            <div class="text-muted" style="font-size: 0.75rem;">High-Security Vault</div>
        </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-gms-light rounded-3 border border-line text-center h-100">
            <i class="bi bi-phone text-gms-blue fs-3 mb-2 d-block"></i>
            <div class="fw-bold text-gms-navy small">Genmega G2500</div>
            <div class="text-muted" style="font-size: 0.75rem;">8" High-Res LCD</div>
        </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-gms-light rounded-3 border border-line text-center h-100">
            <i class="bi bi-gem text-gms-blue fs-3 mb-2 d-block"></i>
            <div class="fw-bold text-gms-navy small">Genmega Onyx</div>
            <div class="text-muted" style="font-size: 0.75rem;">Sleek Modern Styling</div>
        </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-gms-light rounded-3 border border-line text-center h-100">
            <i class="bi bi-cpu text-gms-blue fs-3 mb-2 d-block"></i>
            <div class="fw-bold text-gms-navy small">Triton Argo</div>
            <div class="text-muted" style="font-size: 0.75rem;">Eco-Friendly Footprint</div>
        </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-gms-light rounded-3 border border-line text-center h-100">
            <i class="bi bi-building text-gms-blue fs-3 mb-2 d-block"></i>
            <div class="fw-bold text-gms-navy small">Hantle 4000t</div>
            <div class="text-muted" style="font-size: 0.75rem;">Heavy Throughput</div>
        </div>
        </div>
    </div>

    <div class="text-center">
        <a href="<?php echo esc_url(home_url('/atm-machines/')); ?>" class="btn btn-gms btn-sm">
        <i class="bi bi-arrow-right-circle-fill me-1"></i> Explore Full ATM Catalog &amp; Placement Program
        </a>
    </div>
    </div>
</section>

<!-- SECTION 4: MOBILE & WIRELESS ON-THE-GO PAYMENTS -->
<section id="mobile-payments" class="py-5 bg-gms-light border-top border-bottom border-line">
    <div class="container py-lg-3">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">
        <span
            class="badge bg-white text-gms-blue border border-line px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
            Portable Mobility
        </span>
        <h2 class="display-6 fw-bold text-gms-navy mb-3">
            Mobile &amp; Wireless Payment Systems
        </h2>
        <p class="text-secondary lead fs-6 mb-3">
            Take payments anywhere your business goes—curbside, table-side, pop-up events, trade shows, or at the
            customer's doorstep.
        </p>
        <p class="text-secondary mb-4" style="line-height: 1.7;">
            Transform your smartphone or tablet into a secure POS terminal or utilize dedicated 4G LTE handheld
            devices with built-in thermal printers. Enjoy instant transaction authorization, digital SMS/email
            receipts, and offline queuing.
        </p>

        <div class="row g-3 mb-4">
            <div class="col-sm-6">
            <div class="p-3 bg-white rounded-3 border border-line shadow-sm">
                <i class="bi bi-phone-vibrate-fill text-gms-blue fs-4 mb-1 d-block"></i>
                <div class="fw-bold text-gms-navy small">Smartphone Card Readers</div>
                <div class="text-muted small">Bluetooth EMV &amp; NFC swipe</div>
            </div>
            </div>
            <div class="col-sm-6">
            <div class="p-3 bg-white rounded-3 border border-line shadow-sm">
                <i class="bi bi-wifi text-gms-blue fs-4 mb-1 d-block"></i>
                <div class="fw-bold text-gms-navy small">Standalone 4G Handhelds</div>
                <div class="text-muted small">Built-in printer &amp; cellular SIM</div>
            </div>
            </div>
            <div class="col-sm-6">
            <div class="p-3 bg-white rounded-3 border border-line shadow-sm">
                <i class="bi bi-receipt text-gms-blue fs-4 mb-1 d-block"></i>
                <div class="fw-bold text-gms-navy small">Invoicing &amp; Text-to-Pay</div>
                <div class="text-muted small">One-click customer payment links</div>
            </div>
            </div>
            <div class="col-sm-6">
            <div class="p-3 bg-white rounded-3 border border-line shadow-sm">
                <i class="bi bi-truck text-gms-blue fs-4 mb-1 d-block"></i>
                <div class="fw-bold text-gms-navy small">Field Service Integration</div>
                <div class="text-muted small">Sync with QuickBooks &amp; CRM</div>
            </div>
            </div>
        </div>

        <div class="d-flex flex-wrap gap-3">
            <a href="<?php echo esc_url(home_url('/mobile-payment-system/')); ?>" class="btn btn-gms btn-sm">
            Explore Mobile Payment Systems <i class="bi bi-arrow-right ms-1"></i>
            </a>
            <a href="<?php echo esc_url(home_url('/services/virtual-terminal/')); ?>" class="btn btn-outline-dark btn-sm">
            Virtual Terminal Solutions
            </a>
        </div>
        </div>

        <div class="col-lg-6">
        <div class="p-4 p-md-5 bg-white rounded-4 border border-line shadow-sm">
            <h3 class="h4 fw-bold text-gms-navy mb-4">Ideal Mobile Industries</h3>

            <div class="d-flex align-items-center gap-3 p-3 bg-gms-light rounded-3 mb-3">
            <div class="rounded-circle bg-gms-navy text-white p-2 d-flex align-items-center justify-content-center"
                style="width: 44px; height: 44px;">
                <i class="bi bi-truck-front-fill text-gms-blue fs-5"></i>
            </div>
            <div>
                <div class="fw-bold text-gms-navy">Food Trucks &amp; Catering</div>
                <div class="small text-muted">Lightning-fast line busting with wireless touchscreens.</div>
            </div>
            </div>

            <div class="d-flex align-items-center gap-3 p-3 bg-gms-light rounded-3 mb-3">
            <div class="rounded-circle bg-gms-navy text-white p-2 d-flex align-items-center justify-content-center"
                style="width: 44px; height: 44px;">
                <i class="bi bi-tools text-gms-blue fs-5"></i>
            </div>
            <div>
                <div class="fw-bold text-gms-navy">Contractors &amp; Home Services</div>
                <div class="small text-muted">Collect card payments on-site immediately upon job completion.</div>
            </div>
            </div>

            <div class="d-flex align-items-center gap-3 p-3 bg-gms-light rounded-3 mb-3">
            <div class="rounded-circle bg-gms-navy text-white p-2 d-flex align-items-center justify-content-center"
                style="width: 44px; height: 44px;">
                <i class="bi bi-shop-window text-gms-blue fs-5"></i>
            </div>
            <div>
                <div class="fw-bold text-gms-navy">Pop-Up Stores &amp; Markets</div>
                <div class="small text-muted">No fixed landline required; works seamlessly over cellular 4G/5G.</div>
            </div>
            </div>

            <div class="d-flex align-items-center gap-3 p-3 bg-gms-light rounded-3">
            <div class="rounded-circle bg-gms-navy text-white p-2 d-flex align-items-center justify-content-center"
                style="width: 44px; height: 44px;">
                <i class="bi bi-cup-hot text-gms-blue fs-5"></i>
            </div>
            <div>
                <div class="fw-bold text-gms-navy">Pay-At-The-Table Restaurants</div>
                <div class="small text-muted">Allow diners to pay, split bills, and add tips right at their seat.
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>

<!-- SECTION 5: INTERACTIVE HARDWARE MATCHER -->
<section id="hardware-matcher" class="py-5 bg-white">
    <div class="container py-lg-3">
    <div class="text-center mb-5">
        <span
        class="badge bg-gms-light text-gms-blue border border-line px-3 py-2 rounded-pill fw-bold text-uppercase">
        Hardware Matcher
        </span>
        <h2 class="display-6 fw-bold text-gms-navy mt-2 mb-3">Find The Ideal Setup for Your Business</h2>
        <p class="text-secondary mx-auto mb-0 fs-6" style="max-width: 680px;">
        Select your industry below to see our recommended hardware combinations and tailored payment setups.
        </p>
    </div>

    <!-- Matcher Tabs Container -->
    <div class="d-flex flex-wrap gap-2 justify-content-center mb-4" id="matcherTabs" role="tablist">
        <button class="matcher-tab-btn active" id="tab-retail-btn" data-bs-toggle="pill" data-bs-target="#tab-retail"
        type="button" role="tab">
        <i class="bi bi-bag-check-fill"></i> Retail &amp; Boutiques
        </button>
        <button class="matcher-tab-btn" id="tab-restaurant-btn" data-bs-toggle="pill" data-bs-target="#tab-restaurant"
        type="button" role="tab">
        <i class="bi bi-cup-straw"></i> Restaurants &amp; Bars
        </button>
        <button class="matcher-tab-btn" id="tab-cstore-btn" data-bs-toggle="pill" data-bs-target="#tab-cstore"
        type="button" role="tab">
        <i class="bi bi-fuel-pump-fill"></i> C-Stores &amp; Bodegas
        </button>
        <button class="matcher-tab-btn" id="tab-contractor-btn" data-bs-toggle="pill" data-bs-target="#tab-contractor"
        type="button" role="tab">
        <i class="bi bi-wrench-adjustable-circle-fill"></i> Field &amp; Mobile Pros
        </button>
    </div>

    <!-- Tab Panes Content -->
    <div class="tab-content" id="matcherTabContent">
        <!-- Retail -->
        <div class="tab-pane fade show active" id="tab-retail" role="tabpanel">
        <div class="p-4 p-md-5 bg-gms-light rounded-4 border border-line">
            <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="badge bg-gms-navy text-white mb-2">Recommended Setup</span>
                <h3 class="h3 fw-bold text-gms-navy mb-3">Clover Station Duo + Barcode Scanner + VX520 Backup
                </h3>
                <p class="text-secondary mb-3">
                Fast scanning, dynamic barcode generation, customer-facing touch screen, and inventory matrix
                tracking for apparel, specialty shops, and department stores.
                </p>
                <div class="row g-2 mb-4">
                <div class="col-sm-6">
                    <div class="p-2 bg-white rounded border border-line small fw-semibold"><i
                        class="bi bi-check-lg text-gms-blue me-1"></i> Barcode &amp; Matrix Inventory</div>
                </div>
                <div class="col-sm-6">
                    <div class="p-2 bg-white rounded border border-line small fw-semibold"><i
                        class="bi bi-check-lg text-gms-blue me-1"></i> Customer Loyalty Rewards</div>
                </div>
                <div class="col-sm-6">
                    <div class="p-2 bg-white rounded border border-line small fw-semibold"><i
                        class="bi bi-check-lg text-gms-blue me-1"></i> Cash Drawer &amp; Fast Printer</div>
                </div>
                <div class="col-sm-6">
                    <div class="p-2 bg-white rounded border border-line small fw-semibold"><i
                        class="bi bi-check-lg text-gms-blue me-1"></i> 0% Fee Cash Discounting</div>
                </div>
                </div>
                <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-gms btn-sm">Get Custom Retail Quote</a>
            </div>
            <div class="col-lg-5 text-center">
                <div class="p-4 bg-white rounded-4 border border-line shadow-sm">
                <i class="bi bi-shop fs-1 text-gms-blue mb-2 d-block"></i>
                <h4 class="h6 fw-bold text-gms-navy">Complete Retail POS Bundle</h4>
                <p class="small text-muted mb-0">Includes hardware configuration, menu/inventory upload, employee
                    codes setup, and staff onboarding training.</p>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- Restaurant -->
        <div class="tab-pane fade" id="tab-restaurant" role="tabpanel">
        <div class="p-4 p-md-5 bg-gms-light rounded-4 border border-line">
            <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="badge bg-gms-navy text-white mb-2">Recommended Setup</span>
                <h3 class="h3 fw-bold text-gms-navy mb-3">MYNT POS or Clover Station + Kitchen Printer &amp; Flex
                Handhelds</h3>
                <p class="text-secondary mb-3">
                Full table management, coursing, kitchen display routing, fast split-bills, and pay-at-the-table
                wireless handhelds for high-volume dining and bars.
                </p>
                <div class="row g-2 mb-4">
                <div class="col-sm-6">
                    <div class="p-2 bg-white rounded border border-line small fw-semibold"><i
                        class="bi bi-check-lg text-gms-blue me-1"></i> Tableside Ordering &amp; Pay</div>
                </div>
                <div class="col-sm-6">
                    <div class="p-2 bg-white rounded border border-line small fw-semibold"><i
                        class="bi bi-check-lg text-gms-blue me-1"></i> Thermal Kitchen Ticket Routing</div>
                </div>
                <div class="col-sm-6">
                    <div class="p-2 bg-white rounded border border-line small fw-semibold"><i
                        class="bi bi-check-lg text-gms-blue me-1"></i> Automated Tip Suggestions</div>
                </div>
                <div class="col-sm-6">
                    <div class="p-2 bg-white rounded border border-line small fw-semibold"><i
                        class="bi bi-check-lg text-gms-blue me-1"></i> Multi-station Bartender Mode</div>
                </div>
                </div>
                <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-gms btn-sm">Get Custom Restaurant Quote</a>
            </div>
            <div class="col-lg-5 text-center">
                <div class="p-4 bg-white rounded-4 border border-line shadow-sm">
                <i class="bi bi-cup-hot-fill fs-1 text-gms-blue mb-2 d-block"></i>
                <h4 class="h6 fw-bold text-gms-navy">Hospitality Hardware Bundle</h4>
                <p class="small text-muted mb-0">Built-in durability with liquid-resistant screens, spill-proof
                    order stations, and high-speed receipt printing.</p>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- C-Store -->
        <div class="tab-pane fade" id="tab-cstore" role="tabpanel">
        <div class="p-4 p-md-5 bg-gms-light rounded-4 border border-line">
            <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="badge bg-gms-navy text-white mb-2">Recommended Setup</span>
                <h3 class="h3 fw-bold text-gms-navy mb-3">NRS Touch POS + Hyosung Halo 2 ATM + Verifone VX805 PIN Pad
                </h3>
                <p class="text-secondary mb-3">
                Maximum profit density for convenience stores. Accept EBT/SNAP, verify IDs with 2D scanners, get
                scan-data manufacturer rebates, and earn passive ATM surcharges.
                </p>
                <div class="row g-2 mb-4">
                <div class="col-sm-6">
                    <div class="p-2 bg-white rounded border border-line small fw-semibold"><i
                        class="bi bi-check-lg text-gms-blue me-1"></i> EBT / SNAP &amp; WIC Supported</div>
                </div>
                <div class="col-sm-6">
                    <div class="p-2 bg-white rounded border border-line small fw-semibold"><i
                        class="bi bi-check-lg text-gms-blue me-1"></i> Tobacco / Alcohol ID Scanner</div>
                </div>
                <div class="col-sm-6">
                    <div class="p-2 bg-white rounded border border-line small fw-semibold"><i
                        class="bi bi-check-lg text-gms-blue me-1"></i> ATM Placement Available</div>
                </div>
                <div class="col-sm-6">
                    <div class="p-2 bg-white rounded border border-line small fw-semibold"><i
                        class="bi bi-check-lg text-gms-blue me-1"></i> Customer Ad Screen Displays</div>
                </div>
                </div>
                <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-gms btn-sm">Get Custom C-Store Bundle</a>
            </div>
            <div class="col-lg-5 text-center">
                <div class="p-4 bg-white rounded-4 border border-line shadow-sm">
                <i class="bi bi-fuel-pump fs-1 text-gms-blue mb-2 d-block"></i>
                <h4 class="h6 fw-bold text-gms-navy">C-Store Profit Pack</h4>
                <p class="small text-muted mb-0">High-speed dual checkouts that keep queues moving during peak
                    morning and evening rushes.</p>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- Mobile / Contractors -->
        <div class="tab-pane fade" id="tab-contractor" role="tabpanel">
        <div class="p-4 p-md-5 bg-gms-light rounded-4 border border-line">
            <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="badge bg-gms-navy text-white mb-2">Recommended Setup</span>
                <h3 class="h3 fw-bold text-gms-navy mb-3">Verifone VX680 4G Handheld + Virtual Terminal &amp;
                Invoicing</h3>
                <p class="text-secondary mb-3">
                Ideal for electricians, plumbers, landscapers, mobile auto detailers, and delivery fleets needing
                durable on-site credit card processing and text-to-pay invoicing.
                </p>
                <div class="row g-2 mb-4">
                <div class="col-sm-6">
                    <div class="p-2 bg-white rounded border border-line small fw-semibold"><i
                        class="bi bi-check-lg text-gms-blue me-1"></i> 4G Cellular All-Day Battery</div>
                </div>
                <div class="col-sm-6">
                    <div class="p-2 bg-white rounded border border-line small fw-semibold"><i
                        class="bi bi-check-lg text-gms-blue me-1"></i> Card-On-File Recurring Billing</div>
                </div>
                <div class="col-sm-6">
                    <div class="p-2 bg-white rounded border border-line small fw-semibold"><i
                        class="bi bi-check-lg text-gms-blue me-1"></i> SMS &amp; Email Invoicing</div>
                </div>
                <div class="col-sm-6">
                    <div class="p-2 bg-white rounded border border-line small fw-semibold"><i
                        class="bi bi-check-lg text-gms-blue me-1"></i> Zero Mobile Surcharge Add-ons</div>
                </div>
                </div>
                <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-gms btn-sm">Get Mobile Setup</a>
            </div>
            <div class="col-lg-5 text-center">
                <div class="p-4 bg-white rounded-4 border border-line shadow-sm">
                <i class="bi bi-tools fs-1 text-gms-blue mb-2 d-block"></i>
                <h4 class="h6 fw-bold text-gms-navy">Field Service Mobility</h4>
                <p class="small text-muted mb-0">Get paid on the spot and eliminate 30-day net invoicing delays with
                    instant payment confirmations.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>

<!-- SECTION 6: EQUIPMENT, SUPPLIES & ACCESSORIES -->
<section id="supplies" class="py-5 bg-gms-light border-top border-bottom border-line">
    <div class="container py-lg-3">
    <div class="text-center mb-5">
        <span class="badge bg-white text-gms-blue border border-line px-3 py-2 rounded-pill fw-bold text-uppercase">
        Wholesale Accessories
        </span>
        <h2 class="display-6 fw-bold text-gms-navy mt-2 mb-3">POS Equipment, Supplies &amp; Parts</h2>
        <p class="text-secondary mx-auto mb-0 fs-6" style="max-width: 680px;">
        Stock up on genuine replacement parts, thermal paper rolls, swivel stands, and certified peripherals at
        wholesale merchant pricing.
        </p>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-md-6 col-lg-3">
        <div class="p-4 bg-white rounded-4 border border-line h-100 text-center shadow-sm">
            <i class="bi bi-receipt-cutoff text-gms-blue fs-1 mb-2 d-block"></i>
            <h4 class="h6 fw-bold text-gms-navy mb-1">Thermal Paper Rolls</h4>
            <p class="small text-muted mb-3">BPA-safe high sensitivity thermal paper for Verifone, Clover, PAX, and
            ATM printers.</p>
            <span class="badge bg-gms-light text-gms-navy border border-line">Wholesale Bulk Cases</span>
        </div>
        </div>

        <div class="col-md-6 col-lg-3">
        <div class="p-4 bg-white rounded-4 border border-line h-100 text-center shadow-sm">
            <i class="bi bi-arrow-repeat text-gms-blue fs-1 mb-2 d-block"></i>
            <h4 class="h6 fw-bold text-gms-navy mb-1">Swivel Counter Stands</h4>
            <p class="small text-muted mb-3">Locking metal swivel &amp; tilt stands for countertop terminals and
            customer PIN pads.</p>
            <span class="badge bg-gms-light text-gms-navy border border-line">Heavy-Duty Steel</span>
        </div>
        </div>

        <div class="col-md-6 col-lg-3">
        <div class="p-4 bg-white rounded-4 border border-line h-100 text-center shadow-sm">
            <i class="bi bi-upc-scan text-gms-blue fs-1 mb-2 d-block"></i>
            <h4 class="h6 fw-bold text-gms-navy mb-1">1D &amp; 2D Barcode Scanners</h4>
            <p class="small text-muted mb-3">High-speed handheld and presentation scanners for retail checkouts and
            driver license ID checks.</p>
            <span class="badge bg-gms-light text-gms-navy border border-line">USB &amp; Wireless</span>
        </div>
        </div>

        <div class="col-md-6 col-lg-3">
        <div class="p-4 bg-white rounded-4 border border-line h-100 text-center shadow-sm">
            <i class="bi bi-plug-fill text-gms-blue fs-1 mb-2 d-block"></i>
            <h4 class="h6 fw-bold text-gms-navy mb-1">Cables, Power &amp; Docks</h4>
            <p class="small text-muted mb-3">OEM power supplies, Ethernet splitters, multi-charging cradles, and
            battery packs.</p>
            <span class="badge bg-gms-light text-gms-navy border border-line">OEM Certified</span>
        </div>
        </div>
    </div>

    <div class="text-center">
        <a href="<?php echo esc_url(home_url('/equipment-supplies/')); ?>" class="btn btn-outline-dark btn-sm">
        <i class="bi bi-box-seam me-1"></i> View All Equipment &amp; Supplies
        </a>
    </div>
    </div>
</section>

<!-- SECTION 7: ENTERPRISE GUARANTEE & SERVICE PILLARS -->
<section class="py-5 bg-white">
    <div class="container py-lg-3">
    <div class="text-center mb-5">
        <span
        class="badge bg-gms-light text-gms-blue border border-line px-3 py-2 rounded-pill fw-bold text-uppercase">
        The Global Merchant Difference
        </span>
        <h2 class="display-6 fw-bold text-gms-navy mt-2 mb-3">Why Businesses Choose Our Hardware</h2>
        <p class="text-secondary mx-auto mb-0 fs-6" style="max-width: 680px;">
        We don't just ship hardware—we provide end-to-end technical onboarding, rapid replacement guarantees, and
        transparent merchant processing.
        </p>
    </div>

    <div class="row g-4">
        <div class="col-md-6 col-lg-3">
        <div class="p-4 rounded-4 border border-line bg-white h-100 shadow-sm">
            <div
            class="rounded-circle bg-gms-light text-gms-blue p-3 d-inline-flex align-items-center justify-content-center mb-3"
            style="width: 54px; height: 54px;">
            <i class="bi bi-truck fs-4"></i>
            </div>
            <h4 class="h5 fw-bold text-gms-navy mb-2">Overnight Replacement</h4>
            <p class="small text-secondary mb-0">
            If a terminal or hardware component ever experiences an issue, we provide rapid overnight swap-out to
            ensure zero downtime.
            </p>
        </div>
        </div>

        <div class="col-md-6 col-lg-3">
        <div class="p-4 rounded-4 border border-line bg-white h-100 shadow-sm">
            <div
            class="rounded-circle bg-gms-light text-gms-blue p-3 d-inline-flex align-items-center justify-content-center mb-3"
            style="width: 54px; height: 54px;">
            <i class="bi bi-headset fs-4"></i>
            </div>
            <h4 class="h5 fw-bold text-gms-navy mb-2">24/7/365 US Support</h4>
            <p class="small text-secondary mb-0">
            Direct access to seasoned technical support specialists who can assist with settlement batches, network
            setup, and configuration.
            </p>
        </div>
        </div>

        <div class="col-md-6 col-lg-3">
        <div class="p-4 rounded-4 border border-line bg-white h-100 shadow-sm">
            <div
            class="rounded-circle bg-gms-light text-gms-blue p-3 d-inline-flex align-items-center justify-content-center mb-3"
            style="width: 54px; height: 54px;">
            <i class="bi bi-shield-check fs-4"></i>
            </div>
            <h4 class="h5 fw-bold text-gms-navy mb-2">PCI Level 1 Security</h4>
            <p class="small text-secondary mb-0">
            Full end-to-end encryption (P2PE) and EMV tokenization keeps your business 100% compliant and protected
            against fraud liability.
            </p>
        </div>
        </div>

        <div class="col-md-6 col-lg-3">
        <div class="p-4 rounded-4 border border-line bg-white h-100 shadow-sm">
            <div
            class="rounded-circle bg-gms-light text-gms-blue p-3 d-inline-flex align-items-center justify-content-center mb-3"
            style="width: 54px; height: 54px;">
            <i class="bi bi-cash-coin fs-4"></i>
            </div>
            <h4 class="h5 fw-bold text-gms-navy mb-2">Zero Hidden Fees</h4>
            <p class="small text-secondary mb-0">
            Transparent interchange rates, no bogus terminal lease agreements, and zero junk fees. Keep more of your
            hard-earned revenue.
            </p>
        </div>
        </div>
    </div>
    </div>
</section>

<!-- SECTION 8: FREQUENTLY ASKED QUESTIONS -->
<section class="py-5 bg-gms-light border-top border-bottom border-line">
    <div class="container py-lg-3">
    <div class="text-center mb-5">
        <span class="badge bg-white text-gms-blue border border-line px-3 py-2 rounded-pill fw-bold text-uppercase">
        Got Questions?
        </span>
        <h2 class="display-6 fw-bold text-gms-navy mt-2 mb-3">Frequently Asked Questions</h2>
        <p class="text-secondary mx-auto mb-0 fs-6" style="max-width: 680px;">
        Here are answers to common questions about our terminals, POS software, and ATM equipment.
        </p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-9">
        <div class="accordion accordion-flush" id="productsFaqAccordion">
            <!-- FAQ 1 -->
            <div class="accordion-item bg-white border border-line rounded-3 mb-3 overflow-hidden shadow-sm">
            <h3 class="accordion-header" id="faq-heading-1">
                <button class="accordion-button collapsed fw-bold text-gms-navy fs-6" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="false"
                aria-controls="faq-collapse-1">
                How do I qualify for the Verifone VX520 Terminal offer?
                </button>
            </h3>
            <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-heading-1"
                data-bs-parent="#productsFaqAccordion">
                <div class="accordion-body text-secondary small pt-0">
                When you sign up for merchant processing with Global Merchant Services, you qualify for a
                complimentary Verifone VX520 countertop terminal. There are no equipment lease fees or upfront
                purchase requirements. Simply request a statement analysis or application to get started.
                </div>
            </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item bg-white border border-line rounded-3 mb-3 overflow-hidden shadow-sm">
            <h3 class="accordion-header" id="faq-heading-2">
                <button class="accordion-button collapsed fw-bold text-gms-navy fs-6" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="false"
                aria-controls="faq-collapse-2">
                Can I keep my existing POS software and just switch card processing?
                </button>
            </h3>
            <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-heading-2"
                data-bs-parent="#productsFaqAccordion">
                <div class="accordion-body text-secondary small pt-0">
                In most cases, yes! We can reprogram or integrate with a wide variety of existing POS systems,
                payment gateways (Authorize.Net, NMI), and standalone terminals. Our technicians will review your
                setup during your statement consultation.
                </div>
            </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item bg-white border border-line rounded-3 mb-3 overflow-hidden shadow-sm">
            <h3 class="accordion-header" id="faq-heading-3">
                <button class="accordion-button collapsed fw-bold text-gms-navy fs-6" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="false"
                aria-controls="faq-collapse-3">
                Which ATM placement option is best for my business?
                </button>
            </h3>
            <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-heading-3"
                data-bs-parent="#productsFaqAccordion">
                <div class="accordion-body text-secondary small pt-0">
                If you want maximum profit and can load cash daily, the <strong>Direct Purchase</strong> (100%
                surcharge) or <strong>Merchant-Filled Placement</strong> (included machine, 50% surcharge) is ideal. If
                you operate a high-foot-traffic location and prefer zero operational hassle, our
                <strong>Full-Service Turnkey</strong> program handles cash armored delivery and maintenance
                completely.
                </div>
            </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item bg-white border border-line rounded-3 mb-3 overflow-hidden shadow-sm">
            <h3 class="accordion-header" id="faq-heading-4">
                <button class="accordion-button collapsed fw-bold text-gms-navy fs-6" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="false"
                aria-controls="faq-collapse-4">
                Do your terminals support 0% Cash Discount programs?
                </button>
            </h3>
            <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-heading-4"
                data-bs-parent="#productsFaqAccordion">
                <div class="accordion-body text-secondary small pt-0">
                Yes! All our Verifone, Clover, and Smart Android terminals are fully compatible with our Cash
                Discount Program, allowing you to pass processing costs automatically and eliminate up to 100% of
                your credit card processing fees compliantly.
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>

<!-- SECTION 9: CALL TO ACTION SECTION -->
<section class="cta-strip-modern">
    <div class="container">
    <div class="row align-items-center g-4 text-center text-lg-start">
        <div class="col-lg-8">
        <span class="badge bg-gms-blue text-white px-3 py-1 rounded-pill fw-semibold mb-2">
            Ready to Upgrade Your Hardware?
        </span>
        <h2 class="mb-2">Get Started With Modern Hardware &amp; Lowest Processing Rates</h2>
        <p class="text-white-50 mb-0 fs-6" style="max-width: 650px;">
            Contact our product specialists today for a custom rate review, equipment quote, or ATM site survey.
        </p>
        </div>
        <div class="col-lg-4 text-lg-end">
        <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-lg-end">
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-gms btn-lg px-4">
            Request a Quote <i class="bi bi-arrow-right ms-2"></i>
            </a>
            <a href="tel:5164222002" class="btn btn-gms-outline-white btn-lg px-3">
            <i class="bi bi-telephone-fill me-1"></i> 516-422-2002
            </a>
        </div>
        </div>
    </div>
    </div>
</section>
<?php get_footer(); ?>