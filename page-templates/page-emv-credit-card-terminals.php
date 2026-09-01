<?php
/**
 * Template Name: EMV Credit Card Terminals Page
 */
get_header();
?>
    <!-- Simple & Modern Dark Mesh Hero Section -->
    <section class="bg-mesh-dark py-4 py-lg-5 text-white position-relative text-center">
      <div class="container py-2">
        <?php global_processing_breadcrumbs(); ?>
        <h1 class="display-5 fw-extrabold text-white mb-2">EMV Credit Card Terminals</h1>
        <p class="lead text-white-50 mx-auto mb-0 fs-6" style="max-width: 650px;">
          EMV Chip Card Solutions &amp; Fraud-Resistant Terminal Technology
        </p>
      </div>
    </section>

    <!-- Main Content & Image Showcase (#FFFFFF) -->
    <section class="py-5 bg-white">
      <div class="container py-lg-3">
        
        <!-- Row 1: What is the EMV Chip? -->
        <div class="row align-items-center g-5 mb-5">
          <div class="col-lg-6">
            <span class="section-label">Fraud Protection Standard</span>
            <h2 class="h3 fw-bold text-gms-navy mt-1 mb-3">What is the EMV Chip?</h2>
            <p class="text-secondary lead fs-6 mb-3">
              The EuroPay-Mastercard-Visa, or EMV chip is the new standard in credit and debit card technology.
            </p>
            <p class="text-secondary mb-0" style="line-height: 1.7;">
              The EMV chip is less vulnerable to fraud for in-person transactions because of the advanced technology in security and encryption. The EMV terminals have already been in place throughout the world and will become the standard in the United States in October of 2015.
            </p>
          </div>
          <div class="col-lg-6">
            <div class="position-relative">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/emv-terminal.jpg'); ?>" alt="EMV Credit Card Terminal Technology" class="img-fluid rounded-4 shadow-lg border border-line">
              <div class="position-absolute bottom-0 start-0 m-3 p-3 bg-gms-navy text-white rounded-3 shadow border border-white border-opacity-15 d-none d-sm-flex align-items-center gap-3">
                <i class="bi bi-shield-lock-fill text-gms-blue fs-3"></i>
                <div>
                  <div class="fw-bold small">PCI Level 1 Compliant</div>
                  <div class="small text-white-50">Encrypted Chip Technology</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Row 2: Are Your Terminals Processing EMV? & Checklist -->
        <div class="row g-4">
          <div class="col-lg-12">
            <div class="modern-service-card p-4 p-md-5 bg-gms-light border border-line rounded-4 shadow-sm">
              <span class="section-label">Compliance &amp; Security</span>
              <h2 class="h3 fw-bold text-gms-navy mt-1 mb-3">Are Your Terminals Processing EMV?</h2>
              
              <p class="text-secondary mb-4" style="line-height: 1.7;">
                By the end of 2015, the EMV chip will be the standard in credit and debit card security. If your business does not have the capability of processing EMV credit or debit cards, you are looking to lose many of your customers and be open for huge liability issues with the existing ones. Some 600 million EMV chip credit and debit cards will be in use by the start of 2016. To maintain a strong competitive hold in the market place, the latest technology must be implemented; and if you are a new business owner, it is imperative to start things off right from the get-go. Do not wait! Your customers are already making the switch and so should you.
              </p>

              <h3 class="h5 fw-bold text-gms-navy mb-3">Here is a small checklist to make sure you are ready:</h3>

              <div class="row g-3 mb-4">
                <div class="col-md-6">
                  <div class="p-3 bg-white rounded-3 border border-line d-flex align-items-center gap-3 shadow-sm">
                    <i class="bi bi-check-circle-fill text-gms-blue fs-4"></i>
                    <span class="fw-medium text-gms-navy">Your terminal accepts chip cards (EMV compliant)</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="p-3 bg-white rounded-3 border border-line d-flex align-items-center gap-3 shadow-sm">
                    <i class="bi bi-check-circle-fill text-gms-blue fs-4"></i>
                    <span class="fw-medium text-gms-navy">Your terminal supports contactless/NFC payments</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="p-3 bg-white rounded-3 border border-line d-flex align-items-center gap-3 shadow-sm">
                    <i class="bi bi-check-circle-fill text-gms-blue fs-4"></i>
                    <span class="fw-medium text-gms-navy">You understand liability shift for non-EMV transactions</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="p-3 bg-white rounded-3 border border-line d-flex align-items-center gap-3 shadow-sm">
                    <i class="bi bi-check-circle-fill text-gms-blue fs-4"></i>
                    <span class="fw-medium text-gms-navy">Your staff is trained on chip card processing</span>
                  </div>
                </div>
              </div>

              <div class="d-flex flex-wrap gap-3">
                <a href="credit-card-terminals-michigan.html" class="btn btn-gms btn-lg px-4 py-3 fw-bold shadow">
                  View EMV Terminals <i class="bi bi-arrow-right ms-1"></i>
                </a>
                <a href="/contact-us/" class="btn btn-gms-outline btn-lg px-4 py-3 fw-bold">
                  Contact Us <i class="bi bi-envelope-fill ms-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
<?php get_footer(); ?>