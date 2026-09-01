<?php
/**
 * Front Page Template
 */
get_header(); ?>
    <!-- Modern Hero Slick Slider Section (Streamlined & 1-Scroll Compact) -->
    <section class="bg-mesh-dark position-relative hero-slider-section">
      <div class="hero-slick-slider">
        <!-- SLIDE 1: Zero Fee Payment Solutions -->
        <div class="py-2 text-white">
          <div class="container py-1">
            <div class="row align-items-center g-3 g-lg-4 justify-content-between">
              <!-- Left Text Column -->
              <div class="col-lg-6 text-center text-lg-start">
                <span class="badge bg-gms-blue text-white px-3 py-1 rounded-pill fw-semibold mb-2 d-inline-flex align-items-center gap-1" style="font-size: 0.78rem;">
                  <span class="live-dot"></span> 0% Fee Cash Discount Program
                </span>
                <h1 class="hero-slide-title fw-extrabold text-white mb-2">
                  Zero-Fee Credit Card <span class="gradient-text-blue">Processing</span>
                </h1>
                <p class="hero-slide-subtitle text-white-50 mb-3">
                  Eliminate up to 100% of your merchant fees legally with zero-cost cash discount solutions and complimentary EMV smart countertop terminal placement.
                </p>

                <!-- Value Props Pills -->
                <div class="d-flex flex-wrap gap-1.5 justify-content-center justify-content-lg-start mb-3">
                  <span class="hero-feature-pill"><i class="bi bi-check-circle-fill text-gms-blue"></i> Zero Processing Fees</span>
                  <span class="hero-feature-pill"><i class="bi bi-check-circle-fill text-gms-blue"></i> EMV Smart Hardware</span>
                  <span class="hero-feature-pill"><i class="bi bi-check-circle-fill text-gms-blue"></i> Next-Day Deposits</span>
                </div>

                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-2">
                  <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-gms px-3.5 py-2 shadow-lg fw-bold" style="font-size: 0.92rem;">
                    <i class="bi bi-calculator me-1.5"></i>Statement Analysis
                  </a>
                  <a href="<?php echo esc_url( home_url( '/services/card-processing/' ) ); ?>" class="btn btn-gms-outline-white px-3.5 py-2" style="font-size: 0.92rem;">
                    Explore Services <i class="bi bi-arrow-right ms-1"></i>
                  </a>
                </div>
              </div>

              <!-- Right Image Media Column -->
              <div class="col-lg-6">
                <div class="hero-slide-media-wrap mx-auto">
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-slide-terminal.jpg' ); ?>" alt="Credit Card Processing EMV Terminal" class="hero-slide-img">
                  <div class="hero-floating-chip">
                    <div class="rounded-circle bg-gms-blue text-white d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; min-width: 30px; font-size: 0.85rem;">
                      <i class="bi bi-credit-card-2-front-fill"></i>
                    </div>
                    <div>
                      <div class="fw-bold text-white" style="font-size: 0.82rem;">EMV &amp; Contactless Processing</div>
                      <div class="text-white-50" style="font-size: 0.72rem;">Zero markups • 100% legal cash discounting</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- SLIDE 2: Smart POS & Wholesale ATMs -->
        <div class="py-2 text-white">
          <div class="container py-1">
            <div class="row align-items-center g-3 g-lg-4 justify-content-between">
              <!-- Left Text Column -->
              <div class="col-lg-6 text-center text-lg-start">
                <span class="badge bg-gms-blue text-white px-3 py-1 rounded-pill fw-semibold mb-2 d-inline-flex align-items-center gap-1" style="font-size: 0.78rem;">
                  <i class="bi bi-cpu-fill"></i> Cloud POS &amp; Smart Registers
                </span>
                <h1 class="hero-slide-title fw-extrabold text-white mb-2">
                  Next-Gen <span class="gradient-text-accent">POS Systems</span> For Business
                </h1>
                <p class="hero-slide-subtitle text-white-50 mb-3">
                  Streamline front-of-house orders and back-of-house operations with Clover Station, Clover Mini, and custom POS registers tailored for fast order flow.
                </p>

                <!-- Value Props Pills -->
                <div class="d-flex flex-wrap gap-1.5 justify-content-center justify-content-lg-start mb-3">
                  <span class="hero-feature-pill"><i class="bi bi-check-circle-fill text-gms-blue"></i> Dual Touchscreens</span>
                  <span class="hero-feature-pill"><i class="bi bi-check-circle-fill text-gms-blue"></i> Real-Time Inventory</span>
                  <span class="hero-feature-pill"><i class="bi bi-check-circle-fill text-gms-blue"></i> Cloud Analytics</span>
                </div>

                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-2">
                  <a href="<?php echo esc_url( home_url( '/point-of-sale-system/' ) ); ?>" class="btn btn-gms px-3.5 py-2 shadow-lg fw-bold" style="font-size: 0.92rem;">
                    <i class="bi bi-terminal-fill me-1.5"></i>Explore POS Hardware
                  </a>
                  <a href="<?php echo esc_url( home_url( '/atm-machines/' ) ); ?>" class="btn btn-gms-outline-white px-3.5 py-2" style="font-size: 0.92rem;">
                    ATM Placement <i class="bi bi-arrow-right ms-1"></i>
                  </a>
                </div>
              </div>

              <!-- Right Image Media Column -->
              <div class="col-lg-6">
                <div class="hero-slide-media-wrap mx-auto">
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-slide-pos.jpg' ); ?>" alt="Smart Cloud POS Systems" class="hero-slide-img">
                  <div class="hero-floating-chip">
                    <div class="rounded-circle bg-gms-blue text-white d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; min-width: 30px; font-size: 0.85rem;">
                      <i class="bi bi-shop"></i>
                    </div>
                    <div>
                      <div class="fw-bold text-white" style="font-size: 0.82rem;">Clover &amp; Custom POS Hardware</div>
                      <div class="text-white-50" style="font-size: 0.72rem;">Optimized for retail, restaurant &amp; service businesses</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- SLIDE 3: Wholesale ATM Placement & Processing -->
        <div class="py-2 text-white">
          <div class="container py-1">
            <div class="row align-items-center g-3 g-lg-4 justify-content-between">
              <!-- Left Text Column -->
              <div class="col-lg-6 text-center text-lg-start">
                <span class="badge bg-gms-blue text-white px-3 py-1 rounded-pill fw-semibold mb-2 d-inline-flex align-items-center gap-1" style="font-size: 0.78rem;">
                  <i class="bi bi-cash-stack"></i> Turnkey ATM Placement
                </span>
                <h1 class="hero-slide-title fw-extrabold text-white mb-2">
                  Wholesale ATM <span class="gradient-text-blue">Machines &amp; Processing</span>
                </h1>
                <p class="hero-slide-subtitle text-white-50 mb-3">
                  Transform retail floor space into passive cash revenue. Complete Genmega &amp; Hyosung sales, zero-cost placement, vault cash loading, and 100% surcharge profit sharing.
                </p>

                <!-- Value Props Pills -->
                <div class="d-flex flex-wrap gap-1.5 justify-content-center justify-content-lg-start mb-3">
                  <span class="hero-feature-pill"><i class="bi bi-check-circle-fill text-gms-blue"></i> Turnkey ATM Placement</span>
                  <span class="hero-feature-pill"><i class="bi bi-check-circle-fill text-gms-blue"></i> 100% Surcharge Payout</span>
                  <span class="hero-feature-pill"><i class="bi bi-check-circle-fill text-gms-blue"></i> 24/7 Monitoring</span>
                </div>

                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-2">
                  <a href="<?php echo esc_url( home_url( '/atm-machines/' ) ); ?>" class="btn btn-gms px-3.5 py-2 shadow-lg fw-bold" style="font-size: 0.92rem;">
                    <i class="bi bi-cash-coin me-1.5"></i>ATM Placement Options
                  </a>
                  <a href="<?php echo esc_url( home_url( '/services/atm-machine-processing/' ) ); ?>" class="btn btn-gms-outline-white px-3.5 py-2" style="font-size: 0.92rem;">
                    ATM Processing <i class="bi bi-arrow-right ms-1"></i>
                  </a>
                </div>
              </div>

              <!-- Right Image Media Column -->
              <div class="col-lg-6">
                <div class="hero-slide-media-wrap mx-auto">
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-slide-atm.jpg' ); ?>" alt="Wholesale Retail ATM Machines" class="hero-slide-img">
                  <div class="hero-floating-chip">
                    <div class="rounded-circle bg-gms-blue text-white d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; min-width: 30px; font-size: 0.85rem;">
                      <i class="bi bi-cash"></i>
                    </div>
                    <div>
                      <div class="fw-bold text-white" style="font-size: 0.82rem;">Top Tier Genmega &amp; Hyosung ATMs</div>
                      <div class="text-white-50" style="font-size: 0.72rem;">Turnkey delivery, installation &amp; vault cash loading</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- SLIDE 4: Partner With A Winning Team (ISO Agent Program) -->
        <div class="py-2 text-white">
          <div class="container py-1">
            <div class="row align-items-center g-3 g-lg-4 justify-content-between">
              <!-- Left Text Column -->
              <div class="col-lg-6 text-center text-lg-start">
                <span class="badge bg-gms-blue text-white px-3 py-1 rounded-pill fw-semibold mb-2 d-inline-flex align-items-center gap-1" style="font-size: 0.78rem;">
                  <i class="bi bi-briefcase-fill"></i> ISO Partner Opportunity
                </span>
                <h1 class="hero-slide-title fw-extrabold text-white mb-2">
                  Partner With A <span class="gradient-text-blue">Winning</span> Team
                </h1>
                <p class="hero-slide-subtitle text-white-50 mb-3">
                  Build long-term recurring wealth in merchant services with 50/50 residual splits, daily upfront bonuses, and dedicated US-based sales and operational support.
                </p>

                <!-- Value Props Pills -->
                <div class="d-flex flex-wrap gap-1.5 justify-content-center justify-content-lg-start mb-3">
                  <span class="hero-feature-pill"><i class="bi bi-check-circle-fill text-gms-blue"></i> 50/50 Residual Splits</span>
                  <span class="hero-feature-pill"><i class="bi bi-check-circle-fill text-gms-blue"></i> Daily Advance Payouts</span>
                  <span class="hero-feature-pill"><i class="bi bi-check-circle-fill text-gms-blue"></i> Dedicated CRM Portal</span>
                </div>

                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-2">
                  <a href="<?php echo esc_url( home_url( '/agent-program/' ) ); ?>" class="btn btn-gms px-3.5 py-2 shadow-lg fw-bold" style="font-size: 0.92rem;">
                    <i class="bi bi-people-fill me-1.5"></i>Join Agent Program
                  </a>
                  <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-gms-outline-white px-3.5 py-2" style="font-size: 0.92rem;">
                    Schedule Intro Call <i class="bi bi-arrow-right ms-1"></i>
                  </a>
                </div>
              </div>

              <!-- Right Image Media Column -->
              <div class="col-lg-6">
                <div class="hero-slide-media-wrap mx-auto">
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-slide-agent.jpg' ); ?>" alt="ISO Merchant Services Agent Program" class="hero-slide-img">
                  <div class="hero-floating-chip">
                    <div class="rounded-circle bg-gms-blue text-white d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; min-width: 30px; font-size: 0.85rem;">
                      <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <div>
                      <div class="fw-bold text-white" style="font-size: 0.82rem;">Nationwide ISO Agent Program</div>
                      <div class="text-white-50" style="font-size: 0.72rem;">Trusted payment processing leader</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- SLIDE 5: Web Developers & Agency Partnerships -->
        <div class="py-2 text-white">
          <div class="container py-1">
            <div class="row align-items-center g-3 g-lg-4 justify-content-between">
              <!-- Left Text Column -->
              <div class="col-lg-6 text-center text-lg-start">
                <span class="badge bg-gms-blue text-white px-3 py-1 rounded-pill fw-semibold mb-2 d-inline-flex align-items-center gap-1" style="font-size: 0.78rem;">
                  <i class="bi bi-code-slash"></i> Developer &amp; Agency API
                </span>
                <h1 class="hero-slide-title fw-extrabold text-white mb-2">
                  Seamless Payments For <span class="gradient-text-blue">Web Developers</span>
                </h1>
                <p class="hero-slide-subtitle text-white-50 mb-3">
                  Integrate cutting-edge credit card processing, virtual gateways, and recurring billing into the websites you build while generating ongoing revenue for your agency.
                </p>

                <!-- Value Props Pills -->
                <div class="d-flex flex-wrap gap-1.5 justify-content-center justify-content-lg-start mb-3">
                  <span class="hero-feature-pill"><i class="bi bi-check-circle-fill text-gms-blue"></i> REST API &amp; Webhooks</span>
                  <span class="hero-feature-pill"><i class="bi bi-check-circle-fill text-gms-blue"></i> E-Commerce Gateways</span>
                  <span class="hero-feature-pill"><i class="bi bi-check-circle-fill text-gms-blue"></i> Recurring Revenue</span>
                </div>

                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-2">
                  <a href="<?php echo esc_url( home_url( '/partnership-opportunity/' ) ); ?>" class="btn btn-gms px-3.5 py-2 shadow-lg fw-bold" style="font-size: 0.92rem;">
                    <i class="bi bi-code-square me-1.5"></i>Developer Program
                  </a>
                  <a href="<?php echo esc_url( home_url( '/services/e-commerce/' ) ); ?>" class="btn btn-gms-outline-white px-3.5 py-2" style="font-size: 0.92rem;">
                    E-Commerce Gateways <i class="bi bi-arrow-right ms-1"></i>
                  </a>
                </div>
              </div>

              <!-- Right Image Media Column -->
              <div class="col-lg-6">
                <div class="hero-slide-media-wrap mx-auto">
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-slide-developer.jpg' ); ?>" alt="Web Developer Payment Integration" class="hero-slide-img">
                  <div class="hero-floating-chip">
                    <div class="rounded-circle bg-gms-blue text-white d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; min-width: 30px; font-size: 0.85rem;">
                      <i class="bi bi-laptop"></i>
                    </div>
                    <div>
                      <div class="fw-bold text-white" style="font-size: 0.82rem;">Developer &amp; Agency Integration</div>
                      <div class="text-white-50" style="font-size: 0.72rem;">Fast API sandbox, webhooks &amp; revenue share</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Supported Card & Payment Ecosystem Bar (#F3F8FC) -->
    <!-- <section class="py-4 bg-gms-light border-bottom shadow-sm">
      <div class="container">
        <div
          class="d-flex flex-wrap justify-content-center justify-content-lg-between align-items-center gap-4 text-center">
          <span class="fw-bold text-gms-navy text-uppercase small tracking-wider">Accepted Payment Methods &amp;
            Gateways:</span>
          <div class="d-flex flex-wrap align-items-center justify-content-center gap-3 fs-5">
            <span class="tech-pill"><i class="bi bi-credit-card-fill text-gms-blue me-1"></i> Visa</span>
            <span class="tech-pill"><i class="bi bi-credit-card-2-back-fill text-gms-blue me-1"></i> Mastercard</span>
            <span class="tech-pill"><i class="bi bi-credit-card text-gms-blue me-1"></i> American Express</span>
            <span class="tech-pill"><i class="bi bi-credit-card-2-front text-gms-blue me-1"></i> Discover</span>
            <span class="tech-pill"><i class="bi bi-apple text-dark me-1"></i> Apple Pay</span>
            <span class="tech-pill"><i class="bi bi-google text-gms-blue me-1"></i> Google Pay</span>
            <span class="tech-pill"><i class="bi bi-phone-fill text-gms-blue me-1"></i> Contactless Tap</span>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Core 3-Service Spotlight Cards (Featured Redesigned Section) -->
    <section class="py-5 bg-white position-relative">
      <div class="container py-lg-4">
        <!-- Section Header -->
        <div class="text-center mb-5">
          <span class="section-label">Core Payment Solutions</span>
          <h2 class="section-title text-gms-navy mt-1">Accelerate Your Cash Flow &amp; Profitability</h2>
          <p class="text-secondary mx-auto" style="max-width: 650px;">
            Equip your business with modern card processing, smart merchant terminals, and cash-generating wholesale ATM
            placements.
          </p>
        </div>

        <div class="row g-4">
          <!-- Spotlight Card 1: Credit Card Processing -->
          <div class="col-lg-4 col-md-6">
            <div class="spotlight-service-card">
              <div class="spotlight-card-media">
                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/credit-card-processing.jpg'); ?>" alt="Credit Card Processing Terminal"
                  class="spotlight-card-img">
                <div class="spotlight-card-overlay"></div>
                <!-- <span class="spotlight-badge-overlay bg-gms-blue text-white">
                  Zero-Fee Eligible
                </span> -->
              </div>
              <div class="spotlight-card-body">
                <h3 class="spotlight-card-title">Credit Card Processing</h3>
                <p class="spotlight-card-desc">
                  Is paying high merchant fees eating into your margins? Lower your costs with transparent rates or
                  eliminate fees completely with cash discounting.
                </p>
                <div class="spotlight-card-footer">
                  <a href="<?php echo esc_url( home_url( '/services/card-processing/' ) ); ?>" class="btn btn-gms-outline w-100 fw-bold py-2">
                    Learn More <i class="bi bi-arrow-right ms-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Spotlight Card 2: Merchant Services -->
          <div class="col-lg-4 col-md-6">
            <div class="spotlight-service-card">
              <div class="spotlight-card-media">
                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/merchant-services.jpg'); ?>" alt="Merchant Services POS Counter"
                  class="spotlight-card-img">
                <div class="spotlight-card-overlay"></div>
                <!-- <span class="spotlight-badge-overlay bg-primary text-white">
                  <i class="bi bi-star-fill me-1"></i> Smart Hardware
                </span> -->
              </div>
              <div class="spotlight-card-body">
                <h3 class="spotlight-card-title">Merchant Services</h3>
                <p class="spotlight-card-desc">
                  Complete payment ecosystem tailored for retail, restaurants, and e-commerce with modern POS terminals,
                  wireless readers, and virtual gateways.
                </p>
                <div class="spotlight-card-footer">
                  <a href="<?php echo esc_url( home_url( '/services/merchant-services/' ) ); ?>" class="btn btn-gms-outline w-100 fw-bold py-2">
                    Learn More <i class="bi bi-arrow-right ms-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Spotlight Card 3: ATM Machines -->
          <div class="col-lg-4 col-md-6">
            <div class="spotlight-service-card">
              <div class="spotlight-card-media">
                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/atm-machines.jpg'); ?>" alt="ATM Machine Service" class="spotlight-card-img">
                <div class="spotlight-card-overlay"></div>
                <!-- <span class="spotlight-badge-overlay bg-success text-white">
                  <i class="bi bi-cash-coin me-1"></i> Cash Generator
                </span> -->
              </div>
              <div class="spotlight-card-body">
                <h3 class="spotlight-card-title">ATM Machines</h3>
                <p class="spotlight-card-desc">
                  Turn floor space into passive cash revenue. We partner with top manufacturers for wholesale ATM sales,
                  turnkey placement, loading, and maintenance.
                </p>
                <div class="spotlight-card-footer">
                  <a href="<?php echo esc_url( home_url( '/services/atm-machine-processing/' ) ); ?>" class="btn btn-gms-outline w-100 fw-bold py-2">
                    Learn More <i class="bi bi-arrow-right ms-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Comprehensive Payment Services Checklist Section (#F3F8FC) -->
    <section class="py-5 bg-gms-light">
      <div class="container py-lg-4">
        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <span class="section-label">All-In-One Payment Solutions</span>
            <h2 class="section-title text-gms-navy mt-1">We Are Here To Provide You With All Of Your Company's Payment
              Service Needs!</h2>
            <p class="text-secondary mb-4">
              From retail point-of-sale systems to e-commerce integration and wholesale ATM placement, Global Merchant
              Services delivers customized payment frameworks for every business model.
            </p>

            <div class="row g-3 mb-4">
              <div class="col-6 col-sm-4">
                <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-3 border border-line">
                  <i class="bi bi-check-circle-fill text-gms-blue fs-5"></i>
                  <span class="fw-semibold text-gms-navy small">Retail Solutions</span>
                </div>
              </div>
              <div class="col-6 col-sm-4">
                <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-3 border border-line">
                  <i class="bi bi-check-circle-fill text-gms-blue fs-5"></i>
                  <span class="fw-semibold text-gms-navy small">Online Processing</span>
                </div>
              </div>
              <div class="col-6 col-sm-4">
                <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-3 border border-line">
                  <i class="bi bi-check-circle-fill text-gms-blue fs-5"></i>
                  <span class="fw-semibold text-gms-navy small">Card Terminals</span>
                </div>
              </div>
              <div class="col-6 col-sm-4">
                <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-3 border border-line">
                  <i class="bi bi-check-circle-fill text-gms-blue fs-5"></i>
                  <span class="fw-semibold text-gms-navy small">ATM Processing</span>
                </div>
              </div>
              <div class="col-6 col-sm-4">
                <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-3 border border-line">
                  <i class="bi bi-check-circle-fill text-gms-blue fs-5"></i>
                  <span class="fw-semibold text-gms-navy small">POS Systems</span>
                </div>
              </div>
              <div class="col-6 col-sm-4">
                <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-3 border border-line">
                  <i class="bi bi-check-circle-fill text-gms-blue fs-5"></i>
                  <span class="fw-semibold text-gms-navy small">Gift Cards</span>
                </div>
              </div>
              <div class="col-6 col-sm-4">
                <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-3 border border-line">
                  <i class="bi bi-check-circle-fill text-gms-blue fs-5"></i>
                  <span class="fw-semibold text-gms-navy small">No Fee Surcharge</span>
                </div>
              </div>
              <div class="col-6 col-sm-4">
                <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-3 border border-line">
                  <i class="bi bi-check-circle-fill text-gms-blue fs-5"></i>
                  <span class="fw-semibold text-gms-navy small">Cash Advance</span>
                </div>
              </div>
              <div class="col-6 col-sm-4">
                <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-3 border border-line">
                  <i class="bi bi-check-circle-fill text-gms-blue fs-5"></i>
                  <span class="fw-semibold text-gms-navy small">Shopify Integration</span>
                </div>
              </div>
            </div>

            <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>" class="btn btn-gms btn-lg px-4 fw-bold">
              Explore Our Services <i class="bi bi-arrow-right ms-2"></i>
            </a>
          </div>

          <div class="col-lg-6">
            <div class="glass-card p-4 bg-gms-navy text-white rounded-4 shadow-lg position-relative">
              <div class="d-flex align-items-center gap-3 mb-4">
                <div class="service-icon-circle bg-gms-blue text-white p-3 m-0">
                  <i class="bi bi-award-fill fs-2"></i>
                </div>
                <div>
                  <h3 class="h5 text-white mb-0 fw-bold">Proven Industry Leader</h3>
                  <span class="small text-white-50">Global Processing Inc</span>
                </div>
              </div>
              <p class="small text-white-50 mb-4" style="line-height: 1.7;">
                Our team is dedicated to helping businesses both large and small to accept payments from their customers
                efficiently, securely, and cost-effectively with zero hidden surcharges.
              </p>
              <div class="p-3 bg-white bg-opacity-10 rounded-3 border border-white border-opacity-15 mb-3">
                <div class="d-flex justify-content-between align-items-center">
                  <span class="small text-white">Dedicated Support Desk</span>
                  <span class="badge bg-success text-white">24/7 Available</span>
                </div>
              </div>
              <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-gms-outline-white w-100 fw-bold py-2">
                Request Consultation
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Dual Action Quote Banners (Featured Live Site Content) -->
    <section class="py-5 bg-white">
      <div class="container py-lg-2">
        <div class="text-center mb-5">
          <span class="section-label">Sign Up Now</span>
          <h2 class="section-title text-gms-navy">Get Started With Global Merchant Services</h2>
          <p class="text-muted mx-auto" style="max-width: 750px;">
            Global Merchant Services is a dynamic company and a leader in the payment processing and ATM industry nationwide.
          </p>
        </div>

        <div class="row g-4">
          <!-- CTA Card 1: Statement Analysis -->
          <div class="col-md-6">
            <div class="cta-card cta-card--navy p-4 p-lg-5 shadow-lg d-flex flex-column justify-content-between h-100"
              style="border-left: 6px solid var(--gms-blue);">
              <div>
                <span class="badge bg-gms-blue text-white fw-bold px-3 py-1 mb-3 rounded-pill">No-Obligation Audit</span>
                <h3 class="h3 text-white fw-extrabold mb-3">STATEMENT ANALYSIS</h3>
                <p class="text-white-50 mb-4 fs-6">
                  Let us save you money on your credit card processing. Send us your recent merchant statement and our
                  experts will provide a line-by-line breakdown of hidden markups.
                </p>
              </div>
              <div>
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-gms btn-lg px-4 py-3 fw-bold">
                  Get Started <i class="bi bi-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- CTA Card 2: Start Processing Quote -->
          <div class="col-md-6">
            <div class="cta-card p-4 p-lg-5 shadow-lg d-flex flex-column justify-content-between h-100"
              style="background: linear-gradient(135deg, #001638 0%, #002d73 100%); border-left: 6px solid var(--gms-footer-link);">
              <div>
                <span class="badge bg-light text-gms-navy fw-bold px-3 py-1 mb-3 rounded-pill">No Obligation</span>
                <h3 class="h3 text-white fw-extrabold mb-3">START PROCESSING</h3>
                <p class="text-white-50 mb-4 fs-6">
                  Let us provide you a <strong>no-obligation</strong> credit card processing quote tailored for your
                  retail storefront, restaurant, or e-commerce platform.
                </p>
              </div>
              <div>
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-gms-outline-white btn-lg px-4 py-3 fw-bold">
                  Get Started <i class="bi bi-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Key Advantage Pillars Grid (#F3F8FC) -->
    <section class="py-5 bg-gms-light">
      <div class="container py-lg-4">
        <div class="text-center mb-5">
          <span class="section-label">Why Choose Global Merchant Services</span>
          <h2 class="section-title text-gms-navy">Comprehensive Processing Built For Growth</h2>
          <p class="text-muted mx-auto" style="max-width: 680px;">
            We equip companies nationwide with cost-effective payment frameworks, modern hardware, and transparent
            pricing.
          </p>
        </div>

        <div class="row g-4">
          <!-- Card 1: Zero-Fee Program -->
          <div class="col-md-6 col-lg-4">
            <div class="modern-service-card">
              <div class="modern-icon-box">
                <i class="bi bi-percent"></i>
              </div>
              <h3 class="h5 fw-bold text-gms-navy mb-2">Zero-Fee Cash Discount Program</h3>
              <p class="text-secondary small mb-0">
                Eliminate up to 100% of your credit card processing fees legally. Pass processing costs to cardholders
                while giving cash-paying customers an instant discount.
              </p>
            </div>
          </div>

          <!-- Card 2: Terminal Placement -->
          <div class="col-md-6 col-lg-4">
            <div class="modern-service-card">
              <div class="modern-icon-box">
                <i class="bi bi-terminal-fill"></i>
              </div>
              <h3 class="h5 fw-bold text-gms-navy mb-2">Terminal Placement Program</h3>
              <p class="text-secondary small mb-0">
                Receive pre-programmed EMV chip and NFC contactless payment terminals for the entire length of
                your merchant agreement with zero upfront hardware costs.
              </p>
            </div>
          </div>

          <!-- Card 3: Same-Day Funding -->
          <div class="col-md-6 col-lg-4">
            <div class="modern-service-card">
              <div class="modern-icon-box">
                <i class="bi bi-lightning-charge-fill"></i>
              </div>
              <h3 class="h5 fw-bold text-gms-navy mb-2">Same-Day &amp; Next-Day Funding</h3>
              <p class="text-secondary small mb-0">
                Accelerate cash flow into your business bank account. Settle transaction batches daily and receive funds
                directly in your account in as little as 24 hours.
              </p>
            </div>
          </div>

          <!-- Card 4: Wholesale ATM Placement -->
          <div class="col-md-6 col-lg-4">
            <div class="modern-service-card">
              <div class="modern-icon-box">
                <i class="bi bi-cash-stack"></i>
              </div>
              <h3 class="h5 fw-bold text-gms-navy mb-2">Wholesale ATM Placement Solutions</h3>
              <p class="text-secondary small mb-0">
                Turn unused floor space into passive surcharge revenue. We offer complete wholesale ATM sales,
                installation, cash vault loading, and processing services.
              </p>
            </div>
          </div>

          <!-- Card 5: E-Commerce & Virtual Gateways -->
          <div class="col-md-6 col-lg-4">
            <div class="modern-service-card">
              <div class="modern-icon-box">
                <i class="bi bi-globe-americas"></i>
              </div>
              <h3 class="h5 fw-bold text-gms-navy mb-2">E-Commerce &amp; Virtual Gateways</h3>
              <p class="text-secondary small mb-0">
                Accept online payments seamlessly with secure shopping cart integration, virtual terminals, recurring
                billing engines, and developer-friendly REST APIs.
              </p>
            </div>
          </div>

          <!-- Card 6: 24/7 Dedicated US Support -->
          <div class="col-md-6 col-lg-4">
            <div class="modern-service-card">
              <div class="modern-icon-box">
                <i class="bi bi-headset"></i>
              </div>
              <h3 class="h5 fw-bold text-gms-navy mb-2">24/7 Dedicated US Support</h3>
              <p class="text-secondary small mb-0">
                Never wait on hold when running your business. Our Syosset, NY team provides around-the-clock technical
                troubleshooting, statement guidance, and terminal care.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Interactive Fee Savings Calculator Section (#FFFFFF) -->
    <section class="py-5 bg-white">
      <div class="container py-lg-4">
        <div class="row align-items-center g-5">
          <div class="col-lg-5">
            <span class="section-label">Real-Time Fee Calculator</span>
            <h2 class="section-title text-gms-navy mt-1">Calculate Your Processing Savings Instantly</h2>
            <p class="text-secondary mb-4">
              Slide to your monthly credit card processing volume to see how much money you can save by switching to our
              zero-fee cash discount processing structure.
            </p>
            <div class="p-3 bg-gms-light rounded-3 border border-line shadow-sm">
              <div class="d-flex align-items-center gap-3">
                <i class="bi bi-shield-check text-gms-blue fs-2"></i>
                <div>
                  <div class="fw-bold text-gms-navy">100% Compliant &amp; Transparent</div>
                  <div class="small text-muted">Fully compliant with Visa, Mastercard &amp; state regulations.</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="calc-box">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <label for="calc-volume" class="fw-bold text-white fs-5">Monthly Card Volume:</label>
                <span id="calc-volume-display" class="fs-4 fw-extrabold text-gms-footer-link">$50,000</span>
              </div>

              <input type="range" class="form-range mb-4" id="calc-volume" min="5000" max="250000" step="5000"
                value="50000" style="accent-color: #1E81C8;">

              <div class="row g-3 mb-4">
                <div class="col-md-6">
                  <div class="p-3 rounded-3 bg-white bg-opacity-10 border border-white border-opacity-15 text-center">
                    <div class="small text-white-50 text-uppercase tracking-wider">Estimated Monthly Savings</div>
                    <div id="calc-savings-monthly" class="fs-3 fw-bold text-white">$1,600</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="savings-display">
                    <div class="small text-white-50 text-uppercase tracking-wider">Estimated Annual Savings</div>
                    <div id="calc-savings-annual" class="savings-amount text-gms-footer-link">$19,200</div>
                  </div>
                </div>
              </div>

              <div class="text-center">
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-gms btn-lg px-5 fw-bold shadow">
                  <i class="bi bi-file-earmark-check me-2"></i> Claim Your Fee Audit
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Traditional Processors vs. GMS Comparison Matrix (#F3F8FC) -->
    <section class="py-5 bg-gms-light">
      <div class="container py-lg-4">
        <div class="text-center mb-5">
          <span class="section-label">Transparent Comparison</span>
          <h2 class="section-title text-gms-navy">Traditional Processors vs. Global Merchant Services</h2>
          <p class="text-muted mx-auto" style="max-width: 650px;">
            See why over 4,000+ businesses nationwide choose our transparent, zero-fee payment ecosystem.
          </p>
        </div>

        <div class="comparison-container-modern shadow-lg">
          <div class="table-responsive">
            <table class="comparison-table-modern">
              <thead>
                <tr class="bg-gms-navy text-white">
                  <th style="width: 34%;" class="comparison-header-cell text-white">Feature / Benefit</th>
                  <th style="width: 33%; background: #001638;" class="comparison-header-cell text-white-50">Traditional
                    Processors</th>
                  <th style="width: 33%;" class="comparison-header-cell comparison-header-gms">
                    <div class="d-flex align-items-center justify-content-between">
                      <span>Global Merchant Services</span>
                      <span class="badge bg-gms-blue text-white px-2 py-1 small rounded-pill">RECOMMENDED</span>
                    </div>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="comparison-row-modern">
                  <td class="fw-bold text-gms-navy fs-6"><i class="bi bi-percent text-gms-blue me-2"></i> Processing
                    Fees</td>
                  <td class="text-danger"><i class="bi bi-x-circle-fill me-2"></i> 2.8% - 3.9% + per transaction</td>
                  <td class="comparison-cell-gms text-gms-blue"><i class="bi bi-check-circle-fill me-2"></i> 0% Net Fees
                    (Zero-Fee Program)</td>
                </tr>
                <tr class="comparison-row-modern">
                  <td class="fw-bold text-gms-navy fs-6"><i class="bi bi-terminal text-gms-blue me-2"></i> Terminal
                    Hardware</td>
                  <td class="text-secondary"><i class="bi bi-x-circle-fill text-muted me-2"></i> Expensive leases or
                    $400+ buyouts</td>
                  <td class="comparison-cell-gms text-gms-blue"><i class="bi bi-check-circle-fill me-2"></i> Included ($0 Upfront)
                    Terminal Placement</td>
                </tr>
                <tr class="comparison-row-modern">
                  <td class="fw-bold text-gms-navy fs-6"><i class="bi bi-file-earmark-text text-gms-blue me-2"></i>
                    Contract Agreement</td>
                  <td class="text-secondary"><i class="bi bi-x-circle-fill text-muted me-2"></i> 3-year lock-in with
                    penalty fees</td>
                  <td class="comparison-cell-gms text-gms-blue"><i class="bi bi-check-circle-fill me-2"></i> Flexible
                    Month-to-Month</td>
                </tr>
                <tr class="comparison-row-modern">
                  <td class="fw-bold text-gms-navy fs-6"><i class="bi bi-receipt text-gms-blue me-2"></i> Rate
                    Transparency</td>
                  <td class="text-danger"><i class="bi bi-x-circle-fill me-2"></i> Padded rates &amp; hidden surcharges
                  </td>
                  <td class="comparison-cell-gms text-gms-blue"><i class="bi bi-check-circle-fill me-2"></i> Clear
                    Line-Item Statement Audits</td>
                </tr>
                <tr class="comparison-row-modern">
                  <td class="fw-bold text-gms-navy fs-6"><i class="bi bi-headset text-gms-blue me-2"></i> Technical
                    Support</td>
                  <td class="text-secondary"><i class="bi bi-x-circle-fill text-muted me-2"></i> Offshore centers &amp;
                    long hold times</td>
                  <td class="comparison-cell-gms text-gms-blue"><i class="bi bi-check-circle-fill me-2"></i> 24/7
                    Dedicated US-Based Support</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- Animated Statistics Banner (#002055) -->
    <section class="stats-section py-5 bg-gms-navy">
      <div class="container">
        <div class="row g-4 text-center">
          <div class="col-md-3 col-6">
            <div class="stat-box">
              <div class="stat-num stat-counter text-gms-blue" data-count="50" data-suffix="+">50+</div>
              <div class="stat-label">States Served Nationwide</div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="stat-box">
              <div class="stat-num stat-counter text-gms-blue" data-count="658" data-prefix="$" data-suffix="M+">$658M+
              </div>
              <div class="stat-label">Processed Payments</div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="stat-box">
              <div class="stat-num stat-counter text-gms-blue" data-count="4000" data-suffix="+">4,000+</div>
              <div class="stat-label">Satisfied Merchants</div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="stat-box">
              <div class="stat-num text-gms-footer-link">24/7</div>
              <div class="stat-label">Dedicated US Customer Support</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Join Our Network Of Satisfied Clients Logos Slider (#F3F8FC) -->
    <section class="py-5 bg-gms-light border-top border-bottom">
      <div class="container py-lg-3">
        <div class="text-center mb-4">
          <span class="section-label">Trusted Nationwide</span>
          <h2 class="section-title text-gms-navy">Join Our Network Of Satisfied Clients Today!</h2>
          <!-- <p class="text-muted mx-auto" style="max-width: 650px;">
            Over 4,000+ supermarkets, retail stores, restaurants, e-commerce platforms, and ISO partners rely on Global
            Merchant Services.
          </p> -->
        </div>

        <div class="client-logo-slider">
          <div>
            <div class="client-logo-card">
              <img src="/wp-content/uploads/2024/06/Company-logos-6-1.png" alt="">
            </div>
          </div>
          <div>
            <div class="client-logo-card">
              <img src="/wp-content/uploads/2024/06/Company-logos-8.png" alt="">
            </div>
          </div>
          <div>
            <div class="client-logo-card">
              <img src="/wp-content/uploads/2024/06/Company-logos-1-1.png" alt="">
            </div>
          </div>
          <div>
            <div class="client-logo-card">
              <img src="/wp-content/uploads/2024/06/Company-logos-2-1.png" alt="">
            </div>
          </div>
          <div>
            <div class="client-logo-card">
              <img src="/wp-content/uploads/2024/06/Company-logos-3-1.png" alt="">
            </div>
          </div>
          <div>
            <div class="client-logo-card">
              <img src="/wp-content/uploads/2024/06/Company-logos-4-1.png" alt="">
            </div>
          </div>
          <div>
            <div class="client-logo-card">
              <img src="/wp-content/uploads/2024/06/Company-logos-5-1-300x113.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Merchant Success Stories & Testimonials (#FFFFFF) -->
    <section class="py-5 bg-white">
      <div class="container py-lg-4">
        <div class="text-center mb-5">
          <span class="section-label">Client Reviews</span>
          <h2 class="section-title text-gms-navy">Trusted By Business Owners Nationwide</h2>
          <p class="text-muted mx-auto" style="max-width: 650px;">
            Here is what our retail, restaurant, and enterprise partners say about Global Merchant Services.
          </p>
        </div>

        <div class="client-reviews-slider-wrap position-relative">
          <div class="client-reviews-slider">
            <!-- Review 1: Retail / Supermarket -->
            <div>
              <div class="review-slide-card">
                <div>
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="star-rating">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <span class="badge bg-success-subtle text-success border border-success-subtle px-2.5 py-1 rounded-pill small fw-semibold">
                      <i class="bi bi-patch-check-fill me-1"></i>Verified Client
                    </span>
                  </div>
                  <p class="review-quote-text">
                    "Switching to GMS saved our supermarket over $1,400 per month in credit card fees. Their terminal setup was fast and customer service is always available whenever we need support."
                  </p>
                </div>
                <div class="review-author-wrap">
                  <div class="review-avatar">MS</div>
                  <div>
                    <h4 class="review-author-name">Marcus S.</h4>
                    <span class="review-author-role">Supermarket Owner • New York, NY</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Review 2: ISO Agent Partner -->
            <div>
              <div class="review-slide-card">
                <div>
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="star-rating">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <span class="badge bg-success-subtle text-success border border-success-subtle px-2.5 py-1 rounded-pill small fw-semibold">
                      <i class="bi bi-patch-check-fill me-1"></i>ISO Partner
                    </span>
                  </div>
                  <p class="review-quote-text">
                    "The 50/50 balance split on the agent residual program has allowed our agency to build a stable recurring revenue stream. Their support desk and CRM transparency are unmatched."
                  </p>
                </div>
                <div class="review-author-wrap">
                  <div class="review-avatar avatar-accent">DT</div>
                  <div>
                    <h4 class="review-author-name">David T.</h4>
                    <span class="review-author-role">ISO Agent Partner • Miami, FL</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Review 3: Hospitality & ATM Placement -->
            <div>
              <div class="review-slide-card">
                <div>
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="star-rating">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <span class="badge bg-success-subtle text-success border border-success-subtle px-2.5 py-1 rounded-pill small fw-semibold">
                      <i class="bi bi-patch-check-fill me-1"></i>Verified Client
                    </span>
                  </div>
                  <p class="review-quote-text">
                    "We had our wholesale ATM machines placed by GMS and they handled everything from vault cash loading to maintenance. It's a reliable monthly passive revenue stream."
                  </p>
                </div>
                <div class="review-author-wrap">
                  <div class="review-avatar avatar-secondary">RK</div>
                  <div>
                    <h4 class="review-author-name">Robert K.</h4>
                    <span class="review-author-role">Hospitality Group Director • Chicago, IL</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Review 4: Restaurant & Bar -->
            <div>
              <div class="review-slide-card">
                <div>
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="star-rating">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <span class="badge bg-success-subtle text-success border border-success-subtle px-2.5 py-1 rounded-pill small fw-semibold">
                      <i class="bi bi-patch-check-fill me-1"></i>Verified Client
                    </span>
                  </div>
                  <p class="review-quote-text">
                    "Upgrading to Clover POS systems transformed our table service and bar orders. Same-day funding keeps our cash flow steady and batching out is seamless every evening."
                  </p>
                </div>
                <div class="review-author-wrap">
                  <div class="review-avatar">AL</div>
                  <div>
                    <h4 class="review-author-name">Anthony L.</h4>
                    <span class="review-author-role">Bistro &amp; Lounge Owner • Long Island, NY</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Review 5: E-Commerce & Online Store -->
            <div>
              <div class="review-slide-card">
                <div>
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="star-rating">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <span class="badge bg-success-subtle text-success border border-success-subtle px-2.5 py-1 rounded-pill small fw-semibold">
                      <i class="bi bi-patch-check-fill me-1"></i>Verified Client
                    </span>
                  </div>
                  <p class="review-quote-text">
                    "The Authorize.Net gateway integration was completely effortless with our WooCommerce checkout. Transaction security and fraud prevention have given us true peace of mind."
                  </p>
                </div>
                <div class="review-author-wrap">
                  <div class="review-avatar avatar-accent">SM</div>
                  <div>
                    <h4 class="review-author-name">Sarah M.</h4>
                    <span class="review-author-role">E-Commerce Brand Founder • Austin, TX</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Review 6: Retail Boutique -->
            <div>
              <div class="review-slide-card">
                <div>
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="star-rating">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <span class="badge bg-success-subtle text-success border border-success-subtle px-2.5 py-1 rounded-pill small fw-semibold">
                      <i class="bi bi-patch-check-fill me-1"></i>Verified Client
                    </span>
                  </div>
                  <p class="review-quote-text">
                    "GMS eliminated all hidden junk fees from our processing bills. The Cash Discounting program alone pays for all our terminal hardware. Highly recommend to any retailer!"
                  </p>
                </div>
                <div class="review-author-wrap">
                  <div class="review-avatar avatar-secondary">EM</div>
                  <div>
                    <h4 class="review-author-name">Elena M.</h4>
                    <span class="review-author-role">Boutique Owner • Detroit, MI</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Frequently Asked Questions Accordion (#F3F8FC) -->
    <!-- <section class="py-5 bg-gms-light">
      <div class="container py-lg-4" style="max-width: 900px;">
        <div class="text-center mb-5">
          <span class="section-label">Got Questions?</span>
          <h2 class="section-title text-gms-navy">Frequently Asked Questions</h2>
          <p class="text-muted">Quick answers to common questions about switching your processing to GMS.</p>
        </div>

        <div class="accordion faq-section shadow-sm rounded-4 overflow-hidden" id="homeFaqAccordion">
          <div class="accordion-item border-0 border-bottom">
            <h3 class="accordion-header" id="faq-heading-1">
              <button class="accordion-button py-3 fs-6" type="button" data-bs-toggle="collapse"
                data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1">
                How does the Zero-Fee Cash Discount Program work?
              </button>
            </h3>
            <div id="faq-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-heading-1"
              data-bs-parent="#homeFaqAccordion">
              <div class="accordion-body text-secondary">
                Our cash discount program applies a small technology fee to credit card transactions while giving
                cash-paying customers an automatic discount. This completely offsets your processing fees, allowing you
                to retain 100% of your sale revenues.
              </div>
            </div>
          </div>

          <div class="accordion-item border-0 border-bottom">
            <h3 class="accordion-header" id="faq-heading-2">
              <button class="accordion-button collapsed py-3 fs-6" type="button" data-bs-toggle="collapse"
                data-bs-target="#faq-collapse-2" aria-expanded="false" aria-controls="faq-collapse-2">
                How fast is the merchant application and terminal setup?
              </button>
            </h3>
            <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-heading-2"
              data-bs-parent="#homeFaqAccordion">
              <div class="accordion-body text-secondary">
                Applications are processed and approved within 24 to 48 hours. Once approved, our technical team
                pre-programs your terminal hardware in our Syosset office and ships it directly to your store for
                immediate plug-and-play setup.
              </div>
            </div>
          </div>

          <div class="accordion-item border-0 border-bottom">
            <h3 class="accordion-header" id="faq-heading-3">
              <button class="accordion-button collapsed py-3 fs-6" type="button" data-bs-toggle="collapse"
                data-bs-target="#faq-collapse-3" aria-expanded="false" aria-controls="faq-collapse-3">
                How does the statement analysis work?
              </button>
            </h3>
            <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-heading-3"
              data-bs-parent="#homeFaqAccordion">
              <div class="accordion-body text-secondary">
                Our payment specialists perform a line-by-line audit of your current credit card processing statement to
                uncover hidden fees, interchange markups, and padded rates. We provide a detailed side-by-side
                comparison showing exact dollar savings with GMS.
              </div>
            </div>
          </div>

          <div class="accordion-item border-0">
            <h3 class="accordion-header" id="faq-heading-4">
              <button class="accordion-button collapsed py-3 fs-6" type="button" data-bs-toggle="collapse"
                data-bs-target="#faq-collapse-4" aria-expanded="false" aria-controls="faq-collapse-4">
                Do I need to sign a long-term contract?
              </button>
            </h3>
            <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-heading-4"
              data-bs-parent="#homeFaqAccordion">
              <div class="accordion-body text-secondary">
                No! We believe in earning your business every single day with top-tier service and low rates. We offer
                flexible agreements without restrictive multi-year lock-ins or hidden early termination fees.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- High Impact Call to Action Banner (#002055) -->
    <section class="py-5 bg-gms-light text-center position-relative overflow-hidden">
      <div class="container py-lg-4 position-relative z-1">
        <span class="badge bg-gms-blue fw-bold px-3 py-2 text-uppercase mb-3 rounded-pill">Start Saving
          Today</span>
        <h2 class="display-5 fw-extrabold mb-3">Ready to Lower Your Merchant Fees?</h2>
        <p class="lead mx-auto mb-4" style="max-width: 680px;">
          Send us your recent merchant processing statement and our experts will show you exactly how much money you can
          save every single month.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-gms btn-lg px-5 py-3 fw-bold fs-6 shadow-lg">
            <i class="bi bi-file-earmark-arrow-up me-2"></i> Get Statement Audit
          </a>
          <a href="tel:5164222002" class="btn btn-gms-outline btn-lg px-4 py-3 fs-6">
            <i class="bi bi-telephone-fill me-2"></i> Call 516 422 2002
          </a>
        </div>
      </div>
    </section>
<?php get_footer(); ?>