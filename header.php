<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Global Merchant Services — Payment processing, ATM placement, smart POS terminals, and zero-fee payment solutions for businesses nationwide.">
    <title>Global Merchant Services | Zero-Fee Credit Card Processing &amp; Smart Payment Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link href="<?php echo esc_url(get_template_directory_uri().'/css/style.css?v='.filemtime(get_template_directory().'/css/style.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri().'/style.css?v='.filemtime(get_template_directory().'/style.css')); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-base="">
    <?php wp_body_open(); ?>
    <div class="top-bar">
      <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
          <div class="d-flex flex-wrap align-items-center gap-3">
            <a href="tel:5164222002"><i class="bi bi-telephone-fill me-1"></i>516 422 2002</a>
            <span class="d-none d-md-inline opacity-50">|</span>
            <span><i class="bi bi-geo-alt-fill me-1"></i>324 Jericho Tpke, Syosset, NY 11791</span>
          </div>
          <div class="d-flex align-items-center gap-3">
            <a href="mailto:support@globalmerchantservicesny.com" class="d-none d-sm-inline">
              <i class="bi bi-envelope-fill me-1"></i>support@globalmerchantservicesny.com
            </a>
            <a href=#" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light btn-xs px-2 py-0 fs-7 rounded">
              <i class="bi bi-person-lock me-1"></i>Agent Login
            </a>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-gms sticky-top">
      <div class="container position-relative">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo esc_url(get_template_directory_uri().'/assets/logo.png'); ?>" alt="Global Merchant Services" class="brand-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
          aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav ms-auto align-items-lg-center">
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            
            <!-- Multi-Level Mega Menu for Services -->
            <li class="nav-item dropdown dropdown-mega position-static">
              <a class="nav-link dropdown-toggle" href="<?php echo esc_url( home_url( '/services/' ) ); ?>" data-bs-toggle="dropdown" role="button" aria-expanded="false">Services</a>
              <div class="dropdown-menu mega-menu-dropdown w-100 shadow-lg border-0 rounded-4 mt-2">
                <div class="container py-2">
                  <!-- Mega Menu Top Bar with All Services Link -->
                  <div class="d-flex flex-wrap justify-content-between align-items-center pb-2 mb-3 border-bottom">
                    <div class="d-flex align-items-center gap-2">
                      <span class="fw-bold text-gms-navy"><i class="bi bi-grid-fill text-gms-blue me-1.5"></i>Our Payment Services</span>
                      <span class="text-muted small d-none d-md-inline">| Reliable, zero-fee &amp; low-rate payment solutions</span>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-gms-outline btn-sm px-3 py-1 fw-bold">
                      <i class="bi bi-collection-fill me-1"></i> All Services <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                  </div>

                  <div class="row g-4">
                    
                    <!-- Column 1: Card Processing -->
                    <div class="col-lg-4">
                      <div class="mega-menu-header mb-3 text-gms-navy border-bottom pb-2">
                        <i class="bi bi-credit-card-2-back-fill text-gms-blue me-2"></i>
                        <span class="fw-bold">Card Processing</span>
                      </div>
                      <ul class="list-unstyled mega-menu-list m-0">
                        <li class="mb-2">
                          <a class="mega-menu-link" href="<?php echo esc_url( home_url( '/services/card-processing/' ) ); ?>">
                            <div class="fw-bold">Credit Card Processing Solutions</div>
                            <div class="small text-muted">Zero-fee &amp; lowest interchange rates</div>
                          </a>
                        </li>
                        <li class="mb-2">
                          <a class="mega-menu-link" href="<?php echo esc_url( home_url( '/services/gift-cards/' ) ); ?>">
                            <div class="fw-bold">Gift Cards</div>
                            <div class="small text-muted">Custom branded gift card programs</div>
                          </a>
                        </li>
                        <li class="mb-2">
                          <a class="mega-menu-link" href="<?php echo esc_url( home_url( '/services/cash-discount-program/' ) ); ?>">
                            <div class="fw-bold">Cash Discount Program</div>
                            <div class="small text-muted">Eliminate 100% of processing fees</div>
                          </a>
                        </li>
                        <li class="mb-2">
                          <a class="mega-menu-link" href="<?php echo esc_url( home_url( '/services/same-day-funding/' ) ); ?>">
                            <div class="fw-bold">Same Day Funding</div>
                            <div class="small text-muted">Accelerate your daily cash flow</div>
                          </a>
                        </li>
                      </ul>
                    </div>

                    <!-- Column 2: Merchant Solutions -->
                    <div class="col-lg-4">
                      <div class="mega-menu-header mb-3 text-gms-navy border-bottom pb-2">
                        <i class="bi bi-shop text-gms-blue me-2"></i>
                        <span class="fw-bold">Merchant Solutions</span>
                      </div>
                      <ul class="list-unstyled mega-menu-list m-0">
                        <li class="mb-2">
                          <a class="mega-menu-link" href="<?php echo esc_url( home_url( '/services/merchant-services/' ) ); ?>">
                            <div class="fw-bold">Merchant Services</div>
                            <div class="small text-muted">Complete payment processing accounts</div>
                          </a>
                        </li>
                        <li class="mb-2">
                          <a class="mega-menu-link" href="<?php echo esc_url( home_url( '/services/e-commerce/' ) ); ?>">
                            <div class="fw-bold">E-Commerce</div>
                            <div class="small text-muted">Shopping cart &amp; online payment gateway</div>
                          </a>
                        </li>
                        <li class="mb-2">
                          <a class="mega-menu-link" href="<?php echo esc_url( home_url( '/services/virtual-terminal/' ) ); ?>">
                            <div class="fw-bold">Virtual Terminal</div>
                            <div class="small text-muted">Accept phone &amp; mail card payments</div>
                          </a>
                        </li>
                        <li class="mb-2">
                          <a class="mega-menu-link" href="<?php echo esc_url( home_url( '/services/internet-processing/' ) ); ?>">
                            <div class="fw-bold">Internet Processing</div>
                            <div class="small text-muted">Secure web transaction APIs</div>
                          </a>
                        </li>
                      </ul>
                    </div>

                    <!-- Column 3: Others & All Services Overview -->
                    <div class="col-lg-4">
                      <div class="mega-menu-header mb-3 text-gms-navy border-bottom pb-2">
                        <i class="bi bi-gear-fill text-gms-blue me-2"></i>
                        <span class="fw-bold">Others &amp; Capital</span>
                      </div>
                      <ul class="list-unstyled mega-menu-list m-0">
                        <li class="mb-2">
                          <a class="mega-menu-link" href="<?php echo esc_url( home_url( '/services/atm-machine-processing/' ) ); ?>">
                            <div class="fw-bold">ATM Machine Processing</div>
                            <div class="small text-muted">Wholesale ATM placement &amp; vaulting</div>
                          </a>
                        </li>
                        <li class="mb-2">
                          <a class="mega-menu-link" href="<?php echo esc_url( home_url( '/services/cash-advances/' ) ); ?>">
                            <div class="fw-bold">Cash Advances</div>
                            <div class="small text-muted">Flexible working capital loans</div>
                          </a>
                        </li>
                        <li class="mb-2">
                          <a class="mega-menu-link" href="<?php echo esc_url( home_url( '/services/' ) ); ?>">
                            <div class="fw-bold text-gms-blue"><i class="bi bi-grid-3x3-gap-fill me-1"></i> All Services Overview</div>
                            <div class="small text-muted">Explore all 10+ merchant solutions</div>
                          </a>
                        </li>
                      </ul>
                    </div>

                  </div>
                </div>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">Products</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">All Products</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/credit-card-terminals-michigan/' ) ); ?>">Credit Card Terminals</a></li>
                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/emv-credit-card-terminals/' ) ); ?>">EMV Credit Card Terminals</a></li>
                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/point-of-sale-system/' ) ); ?>">Point of Sale System</a></li>
                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/equipment-supplies/' ) ); ?>">Equipment &amp; Supplies</a></li>
                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/atm-machines/' ) ); ?>">ATM Machines</a></li>
                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/mobile-payment-system/' ) ); ?>">Mobile Payment System</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">Programs</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/agent-program/' ) ); ?>">Agent Program</a></li>
                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/partnership-opportunity/' ) ); ?>">Partnership Opportunity</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/faqs/' ) ); ?>">FAQ</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a></li>
            <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
              <a class="btn btn-gms-navy btn-sm" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Statement Analysis</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <main>