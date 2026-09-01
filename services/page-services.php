<?php
/**
 * Template Name: Services Page
 *
 * @package Global_Processing
 */

get_header();
?>

    <!-- Dark Mesh Hero Section -->
    <section class="bg-mesh-dark py-5 text-white position-relative text-center">
      <div class="container py-lg-4">
        <?php global_processing_breadcrumbs( 'd-flex justify-content-center mb-3' ); ?>
        
        <span class="badge bg-gms-blue text-white px-3 py-2 rounded-pill fw-semibold mb-3">
          <i class="bi bi-gear-wide-connected me-1"></i> End-to-End Payment Infrastructure
        </span>
        <h1 class="display-4 fw-extrabold text-white mb-3">
          Comprehensive Merchant <span class="gradient-text-blue">Services &amp; Solutions</span>
        </h1>
        <p class="lead text-white-50 mx-auto mb-4 fs-5" style="max-width: 780px;">
          From zero-fee cash discounting and smart countertop card processing to online virtual gateways, wholesale ATMs, and flexible capital, explore our complete payment solutions tailored for your business.
        </p>

        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-gms btn-lg px-4 py-3 fw-bold shadow-lg">
            <i class="bi bi-calculator me-2"></i>Statement Analysis
          </a>
          <a href="tel:5164222002" class="btn btn-gms-outline-white btn-lg px-4 py-3">
            <i class="bi bi-telephone-fill me-2"></i>Call (516) 422-2002
          </a>
        </div>
      </div>
    </section>

    <!-- Category 1: Core Processing & Zero-Fee Programs -->
    <section class="py-5 bg-white content-section" id="core-processing">
      <div class="container py-lg-3">
        <div class="text-center mb-5">
          <span class="section-label">Credit Card Processing</span>
          <h2 class="section-title text-gms-navy">Core Card Processing &amp; Fee-Elimination</h2>
          <p class="text-secondary mx-auto" style="max-width: 680px;">
            Reliable, secure, and low-rate payment processing engineered to maximize your take-home revenue with zero hidden charges.
          </p>
        </div>

        <div class="row g-4">
          <!-- Service 1: Card Processing -->
          <div class="col-lg-6">
            <div class="service-card p-4 p-lg-5 bg-white rounded-4 border border-line shadow-sm hover-lift d-flex flex-column justify-content-between h-100 position-relative">
              <div>
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-wrap bg-primary-subtle text-primary p-3 rounded-4">
                    <i class="bi bi-credit-card-2-front-fill fs-3 text-gms-blue"></i>
                  </div>
                  <span class="badge bg-gms-blue text-white rounded-pill px-3 py-1 small fw-bold">Interchange Plus</span>
                </div>
                <h3 class="h4 fw-bold text-gms-navy mb-2">
                  <a href="<?php echo esc_url( home_url( '/services/card-processing/' ) ); ?>" class="text-decoration-none text-gms-navy hover-blue">
                    Credit Card Processing
                  </a>
                </h3>
                <p class="text-secondary mb-4" style="line-height: 1.7;">
                  Accept Visa, Mastercard, Discover, and American Express at the lowest wholesale interchange rates with transparent month-to-month terms and no cancelation fees.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                  <li class="d-flex align-items-center gap-2 small text-secondary">
                    <i class="bi bi-check-circle-fill text-gms-blue"></i> Transparent line-by-line statements
                  </li>
                  <li class="d-flex align-items-center gap-2 small text-secondary">
                    <i class="bi bi-check-circle-fill text-gms-blue"></i> Terminal placement with zero upfront cost
                  </li>
                  <li class="d-flex align-items-center gap-2 small text-secondary">
                    <i class="bi bi-check-circle-fill text-gms-blue"></i> EMV chip, contactless Apple Pay &amp; Google Pay
                  </li>
                </ul>
              </div>
              <div>
                <a href="<?php echo esc_url( home_url( '/services/card-processing/' ) ); ?>" class="btn btn-gms-outline w-100 fw-bold py-2">
                  Learn More <i class="bi bi-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Service 2: Cash Discount Program -->
          <div class="col-lg-6">
            <div class="service-card p-4 p-lg-5 bg-white rounded-4 border border-line shadow-sm hover-lift d-flex flex-column justify-content-between h-100 position-relative" style="border-top: 4px solid var(--gms-blue) !important;">
              <div>
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-wrap bg-primary-subtle text-primary p-3 rounded-4">
                    <i class="bi bi-percent fs-3 text-gms-blue"></i>
                  </div>
                  <span class="badge bg-success text-white rounded-pill px-3 py-1 small fw-bold">Save Up to 100%</span>
                </div>
                <h3 class="h4 fw-bold text-gms-navy mb-2">
                  <a href="<?php echo esc_url( home_url( '/services/cash-discount-program/' ) ); ?>" class="text-decoration-none text-gms-navy hover-blue">
                    Cash Discount Program
                  </a>
                </h3>
                <p class="text-secondary mb-4" style="line-height: 1.7;">
                  Legally eliminate up to 100% of your credit card processing fees by providing an automated discount to customers who choose to pay with cash.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                  <li class="d-flex align-items-center gap-2 small text-secondary">
                    <i class="bi bi-check-circle-fill text-success"></i> 0% processing fees passed to cardholders
                  </li>
                  <li class="d-flex align-items-center gap-2 small text-secondary">
                    <i class="bi bi-check-circle-fill text-success"></i> Fully compliant with Visa/Mastercard &amp; US law
                  </li>
                  <li class="d-flex align-items-center gap-2 small text-secondary">
                    <i class="bi bi-check-circle-fill text-success"></i> Pre-programmed smart terminals provided
                  </li>
                </ul>
              </div>
              <div>
                <a href="<?php echo esc_url( home_url( '/services/cash-discount-program/' ) ); ?>" class="btn btn-gms w-100 fw-bold py-2">
                  Explore Cash Discount <i class="bi bi-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Service 3: Merchant Services -->
          <div class="col-lg-6">
            <div class="service-card p-4 p-lg-5 bg-white rounded-4 border border-line shadow-sm hover-lift d-flex flex-column justify-content-between h-100 position-relative">
              <div>
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-wrap bg-primary-subtle text-primary p-3 rounded-4">
                    <i class="bi bi-shop fs-3 text-gms-blue"></i>
                  </div>
                  <span class="badge bg-gms-light text-gms-navy border border-line rounded-pill px-3 py-1 small fw-bold">All Business Types</span>
                </div>
                <h3 class="h4 fw-bold text-gms-navy mb-2">
                  <a href="<?php echo esc_url( home_url( '/services/merchant-services/' ) ); ?>" class="text-decoration-none text-gms-navy hover-blue">
                    Merchant Services Accounts
                  </a>
                </h3>
                <p class="text-secondary mb-4" style="line-height: 1.7;">
                  A complete payments infrastructure designed for retail storefronts, dining venues, service providers, and multi-location franchises with dedicated account management.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                  <li class="d-flex align-items-center gap-2 small text-secondary">
                    <i class="bi bi-check-circle-fill text-gms-blue"></i> Fast 24-hour merchant underwriting
                  </li>
                  <li class="d-flex align-items-center gap-2 small text-secondary">
                    <i class="bi bi-check-circle-fill text-gms-blue"></i> Seamless integration with leading POS systems
                  </li>
                  <li class="d-flex align-items-center gap-2 small text-secondary">
                    <i class="bi bi-check-circle-fill text-gms-blue"></i> Dedicated New York customer support team
                  </li>
                </ul>
              </div>
              <div>
                <a href="<?php echo esc_url( home_url( '/services/merchant-services/' ) ); ?>" class="btn btn-gms-outline w-100 fw-bold py-2">
                  Learn More <i class="bi bi-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Service 4: Same Day Funding -->
          <div class="col-lg-6">
            <div class="service-card p-4 p-lg-5 bg-white rounded-4 border border-line shadow-sm hover-lift d-flex flex-column justify-content-between h-100 position-relative">
              <div>
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-wrap bg-primary-subtle text-primary p-3 rounded-4">
                    <i class="bi bi-lightning-charge-fill fs-3 text-gms-blue"></i>
                  </div>
                  <span class="badge bg-warning text-dark rounded-pill px-3 py-1 small fw-bold">Fast Cash Flow</span>
                </div>
                <h3 class="h4 fw-bold text-gms-navy mb-2">
                  <a href="<?php echo esc_url( home_url( '/services/same-day-funding/' ) ); ?>" class="text-decoration-none text-gms-navy hover-blue">
                    Same Day &amp; Next Day Funding
                  </a>
                </h3>
                <p class="text-secondary mb-4" style="line-height: 1.7;">
                  Never wait days for your money. Fast-access funding delivers daily credit card transaction deposits into your business checking account in as little as 5 hours.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                  <li class="d-flex align-items-center gap-2 small text-secondary">
                    <i class="bi bi-check-circle-fill text-gms-blue"></i> Deposits as quick as 5 hours from batch
                  </li>
                  <li class="d-flex align-items-center gap-2 small text-secondary">
                    <i class="bi bi-check-circle-fill text-gms-blue"></i> Weekend batching and funding options
                  </li>
                  <li class="d-flex align-items-center gap-2 small text-secondary">
                    <i class="bi bi-check-circle-fill text-gms-blue"></i> Eliminate payroll and inventory cash crunches
                  </li>
                </ul>
              </div>
              <div>
                <a href="<?php echo esc_url( home_url( '/services/same-day-funding/' ) ); ?>" class="btn btn-gms-outline w-100 fw-bold py-2">
                  Learn More <i class="bi bi-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Category 2: Online, Virtual & Web Gateways -->
    <section class="py-5 bg-gms-light" id="online-gateways">
      <div class="container py-lg-4">
        <div class="text-center mb-5">
          <span class="section-label">Digital Payment Gateways</span>
          <h2 class="section-title text-gms-navy">E-Commerce, Virtual Terminals &amp; Web APIs</h2>
          <p class="text-secondary mx-auto" style="max-width: 680px;">
            Secure internet processing solutions designed to accept credit cards over the phone, through online stores, and via developer webhooks.
          </p>
        </div>

        <div class="row g-4">
          <!-- Service 5: E-Commerce -->
          <div class="col-lg-4 col-md-6">
            <div class="service-card p-4 bg-white rounded-4 border border-line shadow-sm hover-lift d-flex flex-column justify-content-between h-100">
              <div>
                <div class="icon-wrap bg-primary-subtle text-primary p-3 rounded-4 mb-3">
                  <i class="bi bi-cart-check-fill fs-3 text-gms-blue"></i>
                </div>
                <h3 class="h5 fw-bold text-gms-navy mb-2">
                  <a href="<?php echo esc_url( home_url( '/services/e-commerce/' ) ); ?>" class="text-decoration-none text-gms-navy hover-blue">
                    E-Commerce Gateways
                  </a>
                </h3>
                <p class="text-secondary small mb-3" style="line-height: 1.6;">
                  Accept online orders 24/7 with encrypted checkout gateways compatible with Shopify, WooCommerce, Magento, and custom web carts.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-1.5 mb-4 small text-secondary">
                  <li><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Hosted payment pages &amp; iframe checkout</li>
                  <li><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Level 1 PCI-DSS tokenized security</li>
                  <li><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Fraud protection &amp; chargeback defense</li>
                </ul>
              </div>
              <div>
                <a href="<?php echo esc_url( home_url( '/services/e-commerce/' ) ); ?>" class="btn btn-gms-outline w-100 fw-bold btn-sm py-2">
                  Explore E-Commerce <i class="bi bi-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Service 6: Virtual Terminal -->
          <div class="col-lg-4 col-md-6">
            <div class="service-card p-4 bg-white rounded-4 border border-line shadow-sm hover-lift d-flex flex-column justify-content-between h-100">
              <div>
                <div class="icon-wrap bg-primary-subtle text-primary p-3 rounded-4 mb-3">
                  <i class="bi bi-laptop fs-3 text-gms-blue"></i>
                </div>
                <h3 class="h5 fw-bold text-gms-navy mb-2">
                  <a href="<?php echo esc_url( home_url( '/services/virtual-terminal/' ) ); ?>" class="text-decoration-none text-gms-navy hover-blue">
                    Virtual Terminal
                  </a>
                </h3>
                <p class="text-secondary small mb-3" style="line-height: 1.6;">
                  Turn any web browser on your PC, Mac, or tablet into a secure credit card processing terminal for phone and mail (MOTO) orders.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-1.5 mb-4 small text-secondary">
                  <li><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Zero hardware equipment needed</li>
                  <li><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Automated recurring &amp; subscription billing</li>
                  <li><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Send digital invoices with 1-click payment</li>
                </ul>
              </div>
              <div>
                <a href="<?php echo esc_url( home_url( '/services/virtual-terminal/' ) ); ?>" class="btn btn-gms-outline w-100 fw-bold btn-sm py-2">
                  Explore Virtual Terminal <i class="bi bi-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Service 7: Internet Processing -->
          <div class="col-lg-4 col-md-6">
            <div class="service-card p-4 bg-white rounded-4 border border-line shadow-sm hover-lift d-flex flex-column justify-content-between h-100">
              <div>
                <div class="icon-wrap bg-primary-subtle text-primary p-3 rounded-4 mb-3">
                  <i class="bi bi-globe-americas fs-3 text-gms-blue"></i>
                </div>
                <h3 class="h5 fw-bold text-gms-navy mb-2">
                  <a href="<?php echo esc_url( home_url( '/services/internet-processing/' ) ); ?>" class="text-decoration-none text-gms-navy hover-blue">
                    Internet Processing &amp; APIs
                  </a>
                </h3>
                <p class="text-secondary small mb-3" style="line-height: 1.6;">
                  Custom RESTful API payment engines and webhooks designed for software platforms, SaaS billing, and mobile app integrations.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-1.5 mb-4 small text-secondary">
                  <li><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Developer sandbox &amp; SDK toolkits</li>
                  <li><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Real-time webhooks &amp; transaction logs</li>
                  <li><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Automated multi-currency processing</li>
                </ul>
              </div>
              <div>
                <a href="<?php echo esc_url( home_url( '/services/internet-processing/' ) ); ?>" class="btn btn-gms-outline w-100 fw-bold btn-sm py-2">
                  Explore Web APIs <i class="bi bi-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Category 3: ATM Machines, Capital & Customer Loyalty -->
    <section class="py-5 bg-white content-section" id="business-solutions">
      <div class="container py-lg-4">
        <div class="text-center mb-5">
          <span class="section-label">Business Growth &amp; Loyalty</span>
          <h2 class="section-title text-gms-navy">ATM Hardware, Working Capital &amp; Gift Cards</h2>
          <p class="text-secondary mx-auto" style="max-width: 680px;">
            Additional revenue-generating solutions to increase in-store spending, drive repeat traffic, and fund expansion.
          </p>
        </div>

        <div class="row g-4">
          <!-- Service 8: ATM Machine Processing -->
          <div class="col-lg-4 col-md-6">
            <div class="service-card p-4 bg-white rounded-4 border border-line shadow-sm hover-lift d-flex flex-column justify-content-between h-100">
              <div>
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-wrap bg-primary-subtle text-primary p-3 rounded-4">
                    <i class="bi bi-cash-coin fs-3 text-gms-blue"></i>
                  </div>
                  <span class="badge bg-success text-white rounded-pill px-2.5 py-1 small fw-bold">Passive Income</span>
                </div>
                <h3 class="h5 fw-bold text-gms-navy mb-2">
                  <a href="<?php echo esc_url( home_url( '/services/atm-machine-processing/' ) ); ?>" class="text-decoration-none text-gms-navy hover-blue">
                    ATM Machine Processing
                  </a>
                </h3>
                <p class="text-secondary small mb-3" style="line-height: 1.6;">
                  Turn unused retail floor space into steady passive surcharge revenue with turnkey ATM placement, wholesale hardware sales, and vault cash loading.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-1.5 mb-4 small text-secondary">
                  <li><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Genmega &amp; Hyosung hardware</li>
                  <li><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> 100% surcharge revenue payouts</li>
                  <li><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Complete installation &amp; maintenance</li>
                </ul>
              </div>
              <div>
                <a href="<?php echo esc_url( home_url( '/services/atm-machine-processing/' ) ); ?>" class="btn btn-gms-outline w-100 fw-bold btn-sm py-2">
                  Explore ATMs <i class="bi bi-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Service 9: Cash Advances -->
          <div class="col-lg-4 col-md-6">
            <div class="service-card p-4 bg-white rounded-4 border border-line shadow-sm hover-lift d-flex flex-column justify-content-between h-100">
              <div>
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-wrap bg-primary-subtle text-primary p-3 rounded-4">
                    <i class="bi bi-wallet2 fs-3 text-gms-blue"></i>
                  </div>
                  <span class="badge bg-gms-blue text-white rounded-pill px-2.5 py-1 small fw-bold">72-Hr Funding</span>
                </div>
                <h3 class="h5 fw-bold text-gms-navy mb-2">
                  <a href="<?php echo esc_url( home_url( '/services/cash-advances/' ) ); ?>" class="text-decoration-none text-gms-navy hover-blue">
                    Merchant Cash Advances
                  </a>
                </h3>
                <p class="text-secondary small mb-3" style="line-height: 1.6;">
                  Flexible working capital up to $40,000 deposited in 72 hours without lengthy bank paperwork, collateral requirements, or fixed monthly loan stress.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-1.5 mb-4 small text-secondary">
                  <li><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> High approval rates for merchants</li>
                  <li><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Repay automatically from daily sales</li>
                  <li><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Use for inventory, payroll, or expansion</li>
                </ul>
              </div>
              <div>
                <a href="<?php echo esc_url( home_url( '/services/cash-advances/' ) ); ?>" class="btn btn-gms-outline w-100 fw-bold btn-sm py-2">
                  Explore Cash Advances <i class="bi bi-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Service 10: Gift Cards -->
          <div class="col-lg-4 col-md-6">
            <div class="service-card p-4 bg-white rounded-4 border border-line shadow-sm hover-lift d-flex flex-column justify-content-between h-100">
              <div>
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-wrap bg-primary-subtle text-primary p-3 rounded-4">
                    <i class="bi bi-gift-fill fs-3 text-gms-blue"></i>
                  </div>
                  <span class="badge bg-gms-light text-gms-navy border border-line rounded-pill px-2.5 py-1 small fw-bold">Customer Loyalty</span>
                </div>
                <h3 class="h5 fw-bold text-gms-navy mb-2">
                  <a href="<?php echo esc_url( home_url( '/services/gift-cards/' ) ); ?>" class="text-decoration-none text-gms-navy hover-blue">
                    Gift Cards &amp; Loyalty Programs
                  </a>
                </h3>
                <p class="text-secondary small mb-3" style="line-height: 1.6;">
                  Custom branded physical and digital e-gift cards tailored with your logo to acquire new customers, boost gift spending, and drive repeat visits.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-1.5 mb-4 small text-secondary">
                  <li><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Custom full-color card designs</li>
                  <li><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Real-time balance lookup on POS</li>
                  <li><i class="bi bi-check-circle-fill text-gms-blue me-1"></i> Reloadable consumer loyalty balances</li>
                </ul>
              </div>
              <div>
                <a href="<?php echo esc_url( home_url( '/services/gift-cards/' ) ); ?>" class="btn btn-gms-outline w-100 fw-bold btn-sm py-2">
                  Explore Gift Cards <i class="bi bi-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose Us Pillars Section (#F3F8FC) -->
    <section class="py-5 bg-gms-light">
      <div class="container py-lg-4">
        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <span class="section-label">The GMS Advantage</span>
            <h2 class="section-title text-gms-navy mt-1">Why Thousands of Merchants Trust Global Merchant Services</h2>
            <p class="text-secondary mb-4" style="line-height: 1.7;">
              Global Merchant Services has empowered business owners across the United States with reliable payment solutions, honest pricing, and outstanding customer care.
            </p>

            <div class="row g-3">
              <div class="col-sm-6">
                <div class="p-3 bg-white rounded-3 border border-line h-100">
                  <div class="d-flex align-items-center gap-2 mb-2">
                    <i class="bi bi-shield-check text-gms-blue fs-4"></i>
                    <h4 class="h6 fw-bold text-gms-navy mb-0">No Hidden Fees</h4>
                  </div>
                  <p class="small text-secondary mb-0">Transparent interchange pricing or 0% cash discounting with no surprise markups.</p>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="p-3 bg-white rounded-3 border border-line h-100">
                  <div class="d-flex align-items-center gap-2 mb-2">
                    <i class="bi bi-headset text-gms-blue fs-4"></i>
                    <h4 class="h6 fw-bold text-gms-navy mb-0">24/7 Dedicated Support</h4>
                  </div>
                  <p class="small text-secondary mb-0">Direct access to our Syosset, NY specialists whenever you need technical support.</p>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="p-3 bg-white rounded-3 border border-line h-100">
                  <div class="d-flex align-items-center gap-2 mb-2">
                    <i class="bi bi-terminal-fill text-gms-blue fs-4"></i>
                    <h4 class="h6 fw-bold text-gms-navy mb-0">Smart Terminals</h4>
                  </div>
                  <p class="small text-secondary mb-0">Pre-programmed EMV chip and NFC contactless card readers placed at zero upfront cost.</p>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="p-3 bg-white rounded-3 border border-line h-100">
                  <div class="d-flex align-items-center gap-2 mb-2">
                    <i class="bi bi-lightning-fill text-gms-blue fs-4"></i>
                    <h4 class="h6 fw-bold text-gms-navy mb-0">Fast Account Setup</h4>
                  </div>
                  <p class="small text-secondary mb-0">Quick 24-hour approval and plug-and-play hardware shipped directly to your door.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="p-4 p-lg-5 bg-gms-navy text-white rounded-4 shadow-lg position-relative overflow-hidden" style="border-left: 6px solid var(--gms-blue);">
              <span class="badge bg-gms-blue text-white fw-bold px-3 py-1 mb-3 rounded-pill">Expert Consultation</span>
              <h3 class="h3 text-white fw-extrabold mb-3">Ready to Lower Your Processing Costs?</h3>
              <p class="text-white-50 mb-4" style="line-height: 1.7;">
                Send us a copy of your recent merchant processing statement and our experts will provide a comprehensive, side-by-side cost breakdown showing your exact monthly and annual savings.
              </p>

              <div class="d-flex flex-column gap-3 mb-4">
                <div class="d-flex align-items-center gap-2 text-white small">
                  <i class="bi bi-check-circle-fill text-gms-blue"></i> No long-term contracts or cancellation penalties
                </div>
                <div class="d-flex align-items-center gap-2 text-white small">
                  <i class="bi bi-check-circle-fill text-gms-blue"></i> Statement audit with zero obligation
                </div>
                <div class="d-flex align-items-center gap-2 text-white small">
                  <i class="bi bi-check-circle-fill text-gms-blue"></i> Dedicated account manager assigned to your business
                </div>
              </div>

              <div class="d-flex flex-wrap gap-3">
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-gms btn-lg px-4 py-3 fw-bold">
                  Get Statement Audit <i class="bi bi-arrow-right ms-2"></i>
                </a>
                <a href="tel:5164222002" class="btn btn-gms-outline-white btn-lg px-4 py-3">
                  <i class="bi bi-telephone-fill me-2"></i> (516) 422-2002
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
get_footer();