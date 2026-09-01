<?php
get_header();
?>
<section class="error-hero d-flex align-items-center ambient-glow-wrapper tech-grid-pattern">
  <!-- Background Glow Orbs -->
  <div class="glow-orb glow-orb-primary" aria-hidden="true"></div>
  <div class="glow-orb glow-orb-secondary" aria-hidden="true"></div>
  <div class="container position-relative" style="z-index: 2;">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 text-center text-lg-start" data-reveal="slide-left">
        <span class="error-badge">
          <span class="live-pulse-dot me-1"></span> Oops! Page Not Found
        </span>
        <h1 class="error-number">404</h1>
        <h2 class="error-title">Page Not Found</h2>
        <p class="error-description">
          The page you're looking for may have been moved, deleted, or never existed.
          Try searching below or return to the homepage.
        </p>

        <div class="error-search my-4">
          <?php get_search_form(); ?>
        </div>

        <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-lg px-4 btn-custom btn-dark-green">Back to Home</a>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline-brand btn-lg px-4 btn-custom btn-outline">Contact Us</a>
        </div>
      </div>

      <div class="col-lg-6 text-center" data-reveal="slide-right" data-reveal-delay="150">
        <div class="error-illustration">
          <svg viewBox="0 0 700 500" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <linearGradient id="grad" x1="0%" x2="100%">
                <stop offset="0%" stop-color="#0c211b"/>
                <stop offset="100%" stop-color="#198754"/>
              </linearGradient>
            </defs>

            <circle cx="350" cy="250" r="180" fill="#198754" opacity=".08"/>
            <circle cx="350" cy="250" r="125" fill="url(#grad)" opacity=".12"/>

            <text x="350" y="285" text-anchor="middle"
              font-size="130" font-family="Arial"
              font-weight="700" fill="url(#grad)">404</text>

            <circle cx="180" cy="110" r="10" fill="#198754">
              <animate attributeName="cy" values="110;80;110" dur="4s" repeatCount="indefinite"/>
            </circle>

            <circle cx="540" cy="370" r="16" fill="#0c211b">
              <animate attributeName="cy" values="370;340;370" dur="5s" repeatCount="indefinite"/>
            </circle>

            <circle cx="560" cy="170" r="8" fill="#8a6a4b">
              <animate attributeName="cy" values="170;145;170" dur="3s" repeatCount="indefinite"/>
            </circle>
          </svg>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

<style>
.error-hero{min-height:100vh;display:flex;align-items:center;background:linear-gradient(135deg,var(--bg-color) 0%,#fbfaf7 100%);overflow:hidden;position:relative;padding:100px 0}
.error-hero:before{content:"";position:absolute;top:-120px;right:-120px;width:420px;height:420px;border-radius:50%;background:rgba(25,135,84,.08);filter:blur(30px)}
.error-hero:after{content:"";position:absolute;bottom:-150px;left:-150px;width:420px;height:420px;border-radius:50%;background:rgba(12,33,27,.05)}
.error-badge{display:inline-block;padding:10px 18px;border-radius:40px;background:rgba(25,135,84,.08);border:1px solid rgba(25,135,84,.2);color:var(--color-accent-green);font-weight:600;margin-bottom:20px}
.error-number{font-size:9rem;line-height:1;font-weight:800;color:var(--primary-green);text-shadow:4px 4px rgba(25,135,84,.08);animation:float404 3s ease-in-out infinite}
.error-title{font-size:2.8rem;color:var(--primary-green);font-weight:700}
.error-description{max-width:560px;color:var(--text-gray);line-height:1.8}
.error-search form{display:flex;gap:12px;flex-wrap:wrap}
.error-search input[type=search]{flex:1;min-width:240px;padding:14px 20px;border-radius:50px;border:2px solid var(--border-color);background:#fff}
.error-search input[type=search]:focus{outline:none;border-color:var(--color-accent-green);box-shadow:0 0 0 .2rem rgba(25,135,84,.15)}
.error-search input[type=submit]{padding:14px 28px;border:none;border-radius:50px;background:var(--color-accent-green);color:#fff;font-weight:600}
.error-search input[type=submit]:hover{background:var(--color-accent-hover)}
.error-hero .btn-primary{background:var(--primary-green);border-color:var(--primary-green);border-radius:50px; z-index: 9999;}
.error-hero .btn-primary:hover{background:var(--color-accent-green);border-color:var(--color-accent-green);transform:translateY(-3px)}
.btn-outline-brand{border:2px solid var(--primary-green);color:var(--primary-green);background:transparent;border-radius:50px}
.btn-outline-brand:hover{background:var(--primary-green);color:#fff}
.error-illustration{animation:floatSVG 5s ease-in-out infinite}
.error-illustration svg{width:100%;max-width:560px}
@keyframes float404{0%{transform:translateY(0)}50%{transform:translateY(-10px)}100%{transform:translateY(0)}}
@keyframes floatSVG{0%{transform:translateY(0)}50%{transform:translateY(-18px)}100%{transform:translateY(0)}}
@media(max-width:991px){.error-hero{text-align:center}.error-number{font-size:7rem}.error-title{font-size:2.2rem}}
@media(max-width:575px){.error-number{font-size:5rem}.error-search form{flex-direction:column}.error-search input[type=submit]{width:100%}}
</style>
