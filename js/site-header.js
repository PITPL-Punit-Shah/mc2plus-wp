(function () {
  const base = document.body.getAttribute("data-base") || "";
  const header = document.getElementById("site-header");
  if (!header) return;

  header.innerHTML = `
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
            <a href="#" target="_blank" rel="nofollow" class="btn btn-outline-light btn-xs px-2 py-0 fs-7 rounded">
              <i class="bi bi-person-lock me-1"></i>Agent Login
            </a>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-gms sticky-top">
      <div class="container position-relative">
        <a class="navbar-brand" href="${base}index.html">
          <img src="<?php echo esc_url(get_template_directory_uri().'/assets/logo.png'); ?>" alt="Global Merchant Services" class="brand-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
          aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav ms-auto align-items-lg-center">
            <li class="nav-item"><a class="nav-link" href="${base}index.html">Home</a></li>
            
            <!-- Multi-Level Mega Menu for Services -->
            <li class="nav-item dropdown dropdown-mega position-static">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">Services</a>
              <div class="dropdown-menu mega-menu-dropdown w-100 shadow-lg border-0 rounded-4 mt-2">
                <div class="container py-2">
                  <div class="row g-4">
                    
                    <!-- Column 1: Card Processing -->
                    <div class="col-lg-4">
                      <div class="mega-menu-header mb-3 text-gms-navy border-bottom pb-2">
                        <i class="bi bi-credit-card-2-back-fill text-gms-blue me-2"></i>
                        <span class="fw-bold">Card Processing</span>
                      </div>
                      <ul class="list-unstyled mega-menu-list m-0">
                        <li class="mb-2">
                          <a class="mega-menu-link" href="${base}services/card-processing.html">
                            <div class="fw-bold">Credit Card Processing Solutions</div>
                            <div class="small text-muted">Zero-fee &amp; lowest interchange rates</div>
                          </a>
                        </li>
                        <li class="mb-2">
                          <a class="mega-menu-link" href="${base}services/gift-cards.html">
                            <div class="fw-bold">Gift Cards</div>
                            <div class="small text-muted">Custom branded gift card programs</div>
                          </a>
                        </li>
                        <li class="mb-2">
                          <a class="mega-menu-link" href="${base}services/cash-discount-program.html">
                            <div class="fw-bold">Cash Discount Program</div>
                            <div class="small text-muted">Eliminate 100% of processing fees</div>
                          </a>
                        </li>
                        <li class="mb-2">
                          <a class="mega-menu-link" href="${base}services/same-day-funding.html">
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
                          <a class="mega-menu-link" href="${base}services/merchant-services.html">
                            <div class="fw-bold">Merchant Services</div>
                            <div class="small text-muted">Complete payment processing accounts</div>
                          </a>
                        </li>
                        <li class="mb-2">
                          <a class="mega-menu-link" href="${base}services/e-commerce.html">
                            <div class="fw-bold">E-Commerce</div>
                            <div class="small text-muted">Shopping cart &amp; online payment gateway</div>
                          </a>
                        </li>
                        <li class="mb-2">
                          <a class="mega-menu-link" href="${base}services/virtual-terminal.html">
                            <div class="fw-bold">Virtual Terminal</div>
                            <div class="small text-muted">Accept phone &amp; mail card payments</div>
                          </a>
                        </li>
                        <li class="mb-2">
                          <a class="mega-menu-link" href="${base}services/internet-processing.html">
                            <div class="fw-bold">Internet Processing</div>
                            <div class="small text-muted">Secure web transaction APIs</div>
                          </a>
                        </li>
                      </ul>
                    </div>

                    <!-- Column 3: Others -->
                    <div class="col-lg-4">
                      <div class="mega-menu-header mb-3 text-gms-navy border-bottom pb-2">
                        <i class="bi bi-gear-fill text-gms-blue me-2"></i>
                        <span class="fw-bold">Others</span>
                      </div>
                      <ul class="list-unstyled mega-menu-list m-0">
                        <li class="mb-2">
                          <a class="mega-menu-link" href="${base}services/atm-machine-processing.html">
                            <div class="fw-bold">ATM Machine Processing</div>
                            <div class="small text-muted">Wholesale ATM placement &amp; vaulting</div>
                          </a>
                        </li>
                        <li class="mb-2">
                          <a class="mega-menu-link" href="${base}services/cash-advances.html">
                            <div class="fw-bold">Cash Advances</div>
                            <div class="small text-muted">Flexible working capital loans</div>
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
                <li><a class="dropdown-item" href="${base}products/index.html">All Products</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="${base}credit-card-terminals-michigan.html">Credit Card Terminals</a></li>
                <li><a class="dropdown-item" href="${base}emv-credit-card-terminals.html">EMV Credit Card Terminals</a></li>
                <li><a class="dropdown-item" href="${base}point-of-sale-system.html">Point of Sale System</a></li>
                <li><a class="dropdown-item" href="${base}equipment-supplies.html">Equipment &amp; Supplies</a></li>
                <li><a class="dropdown-item" href="${base}atm-machines.html">ATM Machines</a></li>
                <li><a class="dropdown-item" href="${base}mobile-payment-system.html">Mobile Payment System</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">Programs</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="${base}agent-program.html">Agent Program</a></li>
                <li><a class="dropdown-item" href="${base}partnership-opportunity.html">Partnership Opportunity</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="${base}about.html">About</a></li>
            <li class="nav-item"><a class="nav-link" href="${base}faq.html">FAQ</a></li>
            <li class="nav-item"><a class="nav-link" href="/contact-us/">Contact Us</a></li>
            <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
              <a class="btn btn-gms-navy btn-sm" href="/contact-us/">Statement Analysis</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  `;
})();
