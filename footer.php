  </main>
  <footer data-astro-cid-jo6i4kqk>
    <div class="container top" data-astro-cid-jo6i4kqk>
      <div class="brand" data-astro-cid-jo6i4kqk>
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Mc2&#32;Logo.png'); ?>" width="9000" height="4861" alt="MC Square Plus" aria-hidden="true" class="logo logo--footer" data-astro-cid-f7espo7c>
        <p data-astro-cid-jo6i4kqk>Multiply. Collaborate. Create. India's flagship energy innovation platform – a
          Section 8 not-for-profit, led by the <span class="nowrap" data-astro-cid-jo6i4kqk>Ministry of Petroleum &amp;
            Natural Gas</span> and backed by energy majors.</p>
        <div class="socials" data-astro-cid-jo6i4kqk><a href="https://x.com/MCSquarePlus" target="_blank"
            rel="noopener noreferrer" aria-label="X" data-astro-cid-jo6i4kqk><svg viewBox="0 0 24 24" fill="none"
              aria-hidden="true" data-astro-cid-jo6i4kqk>
              <path
                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"
                fill="currentColor" data-astro-cid-jo6i4kqk></path>
            </svg></a><a href="https://www.linkedin.com/company/mcsquareplus/" target="_blank" rel="noopener noreferrer"
            aria-label="LinkedIn" data-astro-cid-jo6i4kqk><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"
              data-astro-cid-jo6i4kqk>
              <path
                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 1 1 0-4.124 2.062 2.062 0 0 1 0 4.124zM7.114 20.452H3.56V9h3.554v11.452z"
                fill="currentColor" data-astro-cid-jo6i4kqk></path>
            </svg></a></div>
      </div>
      <nav class="links" aria-label="Footer" data-astro-cid-jo6i4kqk>
        <div data-astro-cid-jo6i4kqk>
          <h2 data-astro-cid-jo6i4kqk>Explore</h2>
          <ul data-astro-cid-jo6i4kqk>
            <li data-astro-cid-jo6i4kqk><a href="about.html" data-astro-cid-jo6i4kqk>About</a></li>
            <li data-astro-cid-jo6i4kqk><a href="team.html" data-astro-cid-jo6i4kqk>Team</a></li>
            <li data-astro-cid-jo6i4kqk><a href="initiatives.html" data-astro-cid-jo6i4kqk>Initiatives</a></li>
            <li data-astro-cid-jo6i4kqk><a href="support.html" data-astro-cid-jo6i4kqk>Support</a></li>
            <li data-astro-cid-jo6i4kqk><a href="portfolio.html" data-astro-cid-jo6i4kqk>Portfolio</a></li>
          </ul>
        </div>
        <div data-astro-cid-jo6i4kqk>
          <h2 data-astro-cid-jo6i4kqk>Engage</h2>
          <ul data-astro-cid-jo6i4kqk>
            <li data-astro-cid-jo6i4kqk><a href="https://app.mc2plus.in/ext/form/24027/1/apply" target="_blank"
                rel="noopener noreferrer" data-astro-cid-jo6i4kqk>Apply</a></li>
            <li data-astro-cid-jo6i4kqk><a href="contact.html" data-astro-cid-jo6i4kqk>Contact</a></li>
            <li data-astro-cid-jo6i4kqk><a href="engagements/news-media.html" data-astro-cid-jo6i4kqk>News &amp;
                Media</a></li>
            <li data-astro-cid-jo6i4kqk><a href="engagements/career.html" data-astro-cid-jo6i4kqk>Career</a></li>
            <li data-astro-cid-jo6i4kqk><a href="engagements/procurements.html" data-astro-cid-jo6i4kqk>Procurements</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="bottom" data-astro-cid-jo6i4kqk>
      <div class="container bottom-row" data-astro-cid-jo6i4kqk>
        <p data-astro-cid-jo6i4kqk>© 2026 MC2 FOUNDATION | New Delhi, India</p><span class="privacy-link"
          data-astro-cid-jo6i4kqk>Privacy Policy</span>
        <p data-astro-cid-jo6i4kqk>Multiply · Collaborate · Create</p>
      </div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri() . '/assets/js/custom.js'); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const explorer = document.querySelector('.explorer');

    if (!explorer) {
        return;
    }

    const chips = Array.from(explorer.querySelectorAll('.chip'));
    const rows = Array.from(explorer.querySelectorAll('.row'));
    const resultsCount = explorer.querySelector('.results-count');
    const emptyState = explorer.querySelector('.empty-state');
    const sectorSelect = explorer.querySelector('.sector-select');

    const activeFilters = {
        backer: 'All',
        sector: 'All'
    };

    function updateChipState(filterType, selectedValue) {
        chips.forEach(function (chip) {
            if (chip.dataset.filter !== filterType) {
                return;
            }

            chip.setAttribute(
                'aria-pressed',
                chip.dataset.value === selectedValue ? 'true' : 'false'
            );
        });
    }

    function applyFilters() {
        let visibleCount = 0;

        rows.forEach(function (row) {
            const rowBacker = row.dataset.backer || '';
            const rowSector = row.dataset.sector || '';

            const backerMatches =
                activeFilters.backer === 'All' ||
                rowBacker === activeFilters.backer;

            const sectorMatches =
                activeFilters.sector === 'All' ||
                rowSector === activeFilters.sector;

            const shouldShow = backerMatches && sectorMatches;

            if (shouldShow) {
                row.hidden = false;
                row.style.removeProperty('display');
                visibleCount++;
            } else {
                row.hidden = true;
                row.style.setProperty('display', 'none', 'important');
            }
        });

        if (resultsCount) {
            resultsCount.textContent =
                visibleCount === rows.length
                    ? 'Showing all ' + rows.length + ' ventures'
                    : 'Showing ' + visibleCount + ' of ' + rows.length + ' ventures';
        }

        if (emptyState) {
            emptyState.hidden = visibleCount !== 0;
        }
    }

    chips.forEach(function (chip) {
        chip.addEventListener('click', function (event) {
            event.preventDefault();

            const filterType = chip.dataset.filter;
            const filterValue = chip.dataset.value;

            if (!filterType || !filterValue) {
                return;
            }

            activeFilters[filterType] = filterValue;

            updateChipState(filterType, filterValue);

            if (filterType === 'sector' && sectorSelect) {
                sectorSelect.value = filterValue;
            }

            applyFilters();
        });
    });

    if (sectorSelect) {
        sectorSelect.addEventListener('change', function () {
            const filterValue = sectorSelect.value || 'All';

            activeFilters.sector = filterValue;
            updateChipState('sector', filterValue);
            applyFilters();
        });
    }

    // Set the initial active state.
    updateChipState('backer', activeFilters.backer);
    updateChipState('sector', activeFilters.sector);

    if (sectorSelect) {
        sectorSelect.value = activeFilters.sector;
    }

    // Apply the default filters on page load.
    applyFilters();
});
</script>
  <?php wp_footer(); ?>
</body>
</html>