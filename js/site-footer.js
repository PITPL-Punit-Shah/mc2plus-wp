(function () {
  const base = document.body.getAttribute("data-base") || "";
  const footer = document.getElementById("site-footer");
  if (!footer) return;

  footer.innerHTML = `
    <!-- Top CTA Banner Strip -->
    <section class="cta-strip-modern">
      <div class="container">
        <div class="row align-items-center g-4">
          <div class="col-lg-8">
            <span class="badge bg-gms-blue text-white fw-bold px-3 py-1 mb-2 rounded-pill text-uppercase">Proven Industry Leadership</span>
            <h2 class="mb-2 text-white fw-extrabold">Ready to Upgrade Your Payment System?</h2>
            <p class="text-white-50 mb-0 fs-6">We provide a comprehensive suite of zero-fee payment processing, POS terminals, and wholesale ATM solutions nationwide!</p>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a href="/contact-us/" class="btn btn-gms btn-lg px-4 py-3 fw-bold shadow-lg">
              <i class="bi bi-file-earmark-check me-2"></i>Get Started Today
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Main Footer Grid -->
    <footer class="site-footer pt-5 pb-3">
      <div class="container">
        <div class="row g-4 mb-4">
          
          <!-- Column 1: Company Profile -->
          <div class="col-lg-4 col-md-6">
            <a href="${base}index.html" class="d-inline-block mb-3">
              <img src="${base}assets/logo.png" alt="Global Merchant Services" class="brand-logo" style="filter: brightness(0) invert(1);">
            </a>
            <p class="small text-white-50 mb-4" style="line-height: 1.7;">
              Global Processing Inc / Global Merchant Services is a dynamic leader in payment processing and ATM placement nationwide. We empower merchants with guaranteed lowest rates and zero-fee processing.
            </p>
            
            <div class="footer-contact-item">
              <i class="bi bi-geo-alt-fill"></i>
              <span>324 Jericho Tpke, Syosset, NY 11791</span>
            </div>
            <div class="footer-contact-item">
              <i class="bi bi-telephone-fill"></i>
              <a href="tel:5164222002">516 422 2002</a>
            </div>
            <div class="footer-contact-item">
              <i class="bi bi-envelope-fill"></i>
              <a href="mailto:support@globalmerchantservicesny.com">support@globalmerchantservicesny.com</a>
            </div>

            <!-- Social Media Buttons -->
            <div class="d-flex gap-2 mt-4">
              <a href="javascript:void(0);" class="footer-social-btn" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
              <a href="javascript:void(0);" class="footer-social-btn" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
              <a href="javascript:void(0);" class="footer-social-btn" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
              <a href="tel:5164222002" class="footer-social-btn" aria-label="Call Us"><i class="bi bi-telephone"></i></a>
            </div>
          </div>

          <!-- Column 2: Payment Services -->
          <div class="col-lg-3 col-6">
            <h5 class="footer-heading">Payment Services</h5>
            <ul class="list-unstyled footer-links">
              <li><a href="${base}services/card-processing.html"><i class="bi bi-chevron-right me-1 text-gms-blue"></i> Card Processing</a></li>
              <li><a href="${base}services/merchant-services.html"><i class="bi bi-chevron-right me-1 text-gms-blue"></i> Merchant Services</a></li>
              <li><a href="${base}services/cash-discount-program.html"><i class="bi bi-chevron-right me-1 text-gms-blue"></i> Cash Discount Program</a></li>
              <li><a href="${base}services/same-day-funding.html"><i class="bi bi-chevron-right me-1 text-gms-blue"></i> Same Day Funding</a></li>
              <li><a href="${base}services/e-commerce.html"><i class="bi bi-chevron-right me-1 text-gms-blue"></i> E-Commerce Gateways</a></li>
              <li><a href="${base}services/virtual-terminal.html"><i class="bi bi-chevron-right me-1 text-gms-blue"></i> Virtual Terminal</a></li>
              <li><a href="${base}services/atm-machine-processing.html"><i class="bi bi-chevron-right me-1 text-gms-blue"></i> ATM Processing</a></li>
            </ul>
          </div>

          <!-- Column 3: Products & POS Hardware -->
          <div class="col-lg-2 col-6">
            <h5 class="footer-heading">Products</h5>
            <ul class="list-unstyled footer-links">
              <li><a href="${base}point-of-sale-system.html"><i class="bi bi-chevron-right me-1 text-gms-blue"></i> POS Systems</a></li>
              <li><a href="${base}atm-machines.html"><i class="bi bi-chevron-right me-1 text-gms-blue"></i> ATM Machines</a></li>
              <li><a href="${base}credit-card-terminals-michigan.html"><i class="bi bi-chevron-right me-1 text-gms-blue"></i> Card Terminals</a></li>
              <li><a href="${base}emv-credit-card-terminals.html"><i class="bi bi-chevron-right me-1 text-gms-blue"></i> EMV Chips</a></li>
              <li><a href="${base}mobile-payment-system.html"><i class="bi bi-chevron-right me-1 text-gms-blue"></i> Mobile Payments</a></li>
              <li><a href="${base}equipment-supplies.html"><i class="bi bi-chevron-right me-1 text-gms-blue"></i> Supplies</a></li>
            </ul>
          </div>

          <!-- Column 4: Quick Links & Partner Programs + Official Seal Logos -->
          <div class="col-lg-3 col-md-6">
            <h5 class="footer-heading">Partners &amp; Trust</h5>
            <ul class="list-unstyled footer-links mb-3">
              <li><a href="${base}agent-program.html"><i class="bi bi-chevron-right me-1 text-gms-blue"></i> ISO Agent Program</a></li>
              <li><a href="${base}partnership-opportunity.html"><i class="bi bi-chevron-right me-1 text-gms-blue"></i> Developer Opportunity</a></li>
              <li><a href="#" target="_blank" rel="nofollow"><i class="bi bi-lock-fill me-1 text-gms-blue"></i> Iris CRM Agent Login</a></li>
              <li><a href="${base}about.html"><i class="bi bi-chevron-right me-1 text-gms-blue"></i> About GMS</a></li>
              <li><a href="${base}faq.html"><i class="bi bi-chevron-right me-1 text-gms-blue"></i> FAQ</a></li>
              <li><a href="/contact-us/"><i class="bi bi-chevron-right me-1 text-gms-blue"></i> Contact Us</a></li>
            </ul>

            <!-- Official Promise & Partner Badges -->
            <div class="pt-2 border-top border-white border-opacity-10">
              <div class="small text-white-50 mb-2 font-weight-bold">Guaranteed Trust &amp; Partnership:</div>
              <div class="d-flex flex-wrap align-items-center gap-2">
                <img src="/wp-content/themes/global-processing/images/customer-promise-logo.png" alt="Customer Promise Guarantee" style="max-height: 44px; width: auto; object-fit: contain;">
                <img src="/wp-content/themes/global-processing/images/Company-logos-8.png" alt="Partner Logo" style="max-height: 44px; width: auto; object-fit: contain; background: #ffffff; padding: 4px 8px; border-radius: 6px;">
              </div>
            </div>
          </div>

        </div>

        <!-- Bottom Footer Legal Bar -->
        <div class="footer-bottom d-flex flex-wrap justify-content-between align-items-center gap-3">
          <div>
            &copy; ${new Date().getFullYear()} Global Merchant Services (Global Processing Inc). All rights reserved.
          </div>
          <div class="d-flex flex-wrap align-items-center gap-3">
            <span class="small text-white-50">Accepted Payments:</span>
            <span class="badge bg-white bg-opacity-10 text-white border border-white border-opacity-15 px-2 py-1"><i class="bi bi-credit-card-fill text-gms-blue me-1"></i> Visa</span>
            <span class="badge bg-white bg-opacity-10 text-white border border-white border-opacity-15 px-2 py-1"><i class="bi bi-credit-card-2-back-fill text-gms-blue me-1"></i> Mastercard</span>
            <span class="badge bg-white bg-opacity-10 text-white border border-white border-opacity-15 px-2 py-1"><i class="bi bi-credit-card me-1"></i> Amex</span>
            <span class="badge bg-white bg-opacity-10 text-white border border-white border-opacity-15 px-2 py-1"><i class="bi bi-apple me-1"></i> Apple Pay</span>
          </div>
        </div>

      </div>
    </footer>
  `;
})();
