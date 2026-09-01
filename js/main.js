document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.querySelector(".navbar-gms");
  if (navbar) {
    const onScroll = () => navbar.classList.toggle("scrolled", window.scrollY > 20);
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
  }

  const currentFile = window.location.pathname.split("/").pop() || "index.html";
  document.querySelectorAll(".nav-link, .dropdown-item").forEach((link) => {
    const href = link.getAttribute("href");
    if (!href || href.startsWith("#") || href.startsWith("tel:") || href.startsWith("mailto:")) return;
    const linkFile = href.split("/").pop();
    if (linkFile === currentFile) {
      link.classList.add("active");
      const dropdown = link.closest(".dropdown");
      if (dropdown) {
        const toggle = dropdown.querySelector(".dropdown-toggle");
        if (toggle) toggle.classList.add("active");
      }
    }
  });

  // Interactive Fee Savings Calculator
  const volumeSlider = document.getElementById("calc-volume");
  const volumeValueDisplay = document.getElementById("calc-volume-display");
  const annualSavingsDisplay = document.getElementById("calc-savings-annual");
  const monthlySavingsDisplay = document.getElementById("calc-savings-monthly");

  if (volumeSlider && volumeValueDisplay && annualSavingsDisplay) {
    const updateSavings = () => {
      const volume = parseFloat(volumeSlider.value);
      volumeValueDisplay.textContent = "$" + volume.toLocaleString();
      
      // Calculate 3.2% average savings with Cash Discount / Zero Fee Processing
      const monthlySavings = volume * 0.032;
      const annualSavings = monthlySavings * 12;

      annualSavingsDisplay.textContent = "$" + Math.round(annualSavings).toLocaleString();
      if (monthlySavingsDisplay) {
        monthlySavingsDisplay.textContent = "$" + Math.round(monthlySavings).toLocaleString();
      }
    };

    volumeSlider.addEventListener("input", updateSavings);
    updateSavings();
  }

  // Stat Counter Animation when scrolled into view
  const statNumbers = document.querySelectorAll(".stat-counter");
  if (statNumbers.length > 0 && "IntersectionObserver" in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const target = entry.target;
          const countTo = parseFloat(target.getAttribute("data-count"));
          const prefix = target.getAttribute("data-prefix") || "";
          const suffix = target.getAttribute("data-suffix") || "";
          let currentCount = 0;
          const duration = 2000;
          const stepTime = 30;
          const steps = duration / stepTime;
          const increment = countTo / steps;

          const timer = setInterval(() => {
            currentCount += increment;
            if (currentCount >= countTo) {
              currentCount = countTo;
              clearInterval(timer);
            }
            target.textContent = prefix + Math.floor(currentCount).toLocaleString() + suffix;
          }, stepTime);

          observer.unobserve(target);
        }
      });
    }, { threshold: 0.3 });

    statNumbers.forEach((num) => observer.observe(num));
  }
});

// Slick Hero & Client Logo Sliders Initialization
const initSlickSlider = () => {
  if (typeof $ !== 'undefined' && $.fn && $.fn.slick) {
    // Hero Slider
    if ($('.hero-slick-slider').length > 0 && !$('.hero-slick-slider').hasClass('slick-initialized')) {
      $('.hero-slick-slider').slick({
        dots: true,
        infinite: true,
        speed: 600,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="bi bi-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="bi bi-chevron-right"></i></button>',
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false
            }
          }
        ]
      });
    }

    // Client Logo Slider
    if ($('.client-logo-slider').length > 0 && !$('.client-logo-slider').hasClass('slick-initialized')) {
      $('.client-logo-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2200,
        speed: 700,
        cssEase: 'cubic-bezier(0.25, 1, 0.5, 1)',
        infinite: true,
        arrows: false,
        dots: false,
        pauseOnHover: true,
        swipeToSlide: true,
        responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 4
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 3
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 2
            }
          }
        ]
      });
    }

    // Client Reviews / Testimonials Slider
    if ($('.client-reviews-slider').length > 0 && !$('.client-reviews-slider').hasClass('slick-initialized')) {
      $('.client-reviews-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4500,
        speed: 700,
        cssEase: 'cubic-bezier(0.25, 1, 0.5, 1)',
        infinite: true,
        arrows: true,
        dots: true,
        prevArrow: '<button type="button" class="slick-prev review-slick-arrow"><i class="bi bi-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next review-slick-arrow"><i class="bi bi-chevron-right"></i></button>',
        pauseOnHover: true,
        swipeToSlide: true,
        responsive: [
          {
            breakpoint: 1100,
            settings: {
              slidesToShow: 2
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              arrows: false
            }
          }
        ]
      });
    }
  }
};

if (typeof $ !== 'undefined') {
  $(document).ready(initSlickSlider);
} else {
  window.addEventListener('load', initSlickSlider);
}
