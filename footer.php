
      <footer class="site-footer">
        <div class="container footer-container">

          <!-- About Us -->
          <div class="footer-column footer-about">
            <h3>About Us</h3>
            <p>
              Beacon Overseas Educational Consult is a study and travel
              abroad company that specializes in helping students and
              professionals alike secure successful visas abroad.
            </p>
          </div>

          <!-- Contact Information -->
          <div class="footer-column footer-contact">
            <h3>Contact Us</h3>
            <p><strong>Location:</strong> Pokuase, Accra, Ghana</p>
            <p>
              <strong>Tel:</strong>
              <a href="tel:+233241234567">+233 20 336 7384</a>
            </p>
            <p>
              <strong>Email:</strong>
              <a href="mailto:info@boec.com">info@boec.com</a>
            </p>
          </div>

       <!-- Social Media -->
        <div class="footer-column footer-socials">
        <h3>Socials</h3>
        <p>Follow us and stay connected.</p>

        <div class="social-links">
            <a
            href="https://www.facebook.com/oeconsultonline"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Facebook"
            title="Facebook"
            >
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M22 12.06C22 6.5 17.52 2 12 2S2 6.5 2 12.06c0 5.02 3.66 9.18 8.44 9.94v-7.03H7.9v-2.91h2.54V9.85c0-2.52 1.49-3.91 3.77-3.91 1.09 0 2.24.2 2.24.2v2.47h-1.26c-1.24 0-1.63.78-1.63 1.57v1.88h2.78l-.45 2.91h-2.33V22c4.78-.76 8.44-4.92 8.44-9.94z"/>
            </svg>
            </a>

            <a
            href="https://wa.me/233203367384"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="WhatsApp"
            title="WhatsApp"
            >
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M17.47 14.38c-.3-.15-1.75-.86-2.02-.96-.27-.1-.47-.15-.67.15-.2.3-.77.96-.94 1.16-.17.2-.35.22-.65.07-.3-.15-1.25-.46-2.38-1.47-.88-.78-1.47-1.75-1.64-2.05-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.08-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51-.17-.01-.37-.01-.57-.01-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.48 0 1.46 1.06 2.88 1.21 3.08.15.2 2.09 3.2 5.07 4.49.71.31 1.26.49 1.69.63.71.23 1.36.2 1.87.12.57-.08 1.75-.71 2-1.4.25-.69.25-1.28.17-1.4-.07-.12-.27-.2-.57-.35zM12.04 21.5h-.01a9.44 9.44 0 0 1-4.81-1.32l-.35-.2-3.58.94.96-3.49-.23-.36a9.42 9.42 0 0 1-1.45-5.03c0-5.2 4.24-9.44 9.46-9.44 2.53 0 4.9.99 6.68 2.77a9.39 9.39 0 0 1 2.77 6.68c0 5.21-4.24 9.45-9.44 9.45zM20.52 3.48A11.9 11.9 0 0 0 12.04.02C5.48.02.14 5.36.13 11.93c0 2.1.55 4.15 1.6 5.95L.03 24l6.27-1.64a11.9 11.9 0 0 0 5.73 1.46h.01c6.56 0 11.9-5.34 11.9-11.9 0-3.18-1.24-6.17-3.42-8.44z"/>
            </svg>
            </a>
        </div>
        </div>

        </div>

        <div class="footer-bottom">
          <div class="container">
            <p>
              &copy; <span id="copyright-year"></span>
              Beacon Overseas Educational Consult. All rights reserved.
            </p>
          </div>
        </div>
      </footer>

<script>
    const toggle = document.getElementById('mobile-toggle');
    const nav = document.getElementById('main-nav');

    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            const isOpen = nav.classList.toggle('is-open');

            toggle.setAttribute('aria-expanded', String(isOpen));

            toggle.setAttribute(
                'aria-label',
                isOpen
                    ? 'Close navigation menu'
                    : 'Open navigation menu'
            );

            toggle.innerHTML = isOpen
                ? `<svg viewBox="0 0 24 24" fill="none"
                       stroke="currentColor" stroke-width="1.8"
                       stroke-linecap="round">
                       <path d="m6 6 12 12M18 6 6 18"/>
                   </svg>`
                : `<svg viewBox="0 0 24 24" fill="none"
                       stroke="currentColor" stroke-width="1.8"
                       stroke-linecap="round">
                       <path d="M4 7h16M4 12h16M4 17h16"/>
                   </svg>`;
        });

        nav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                nav.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
                toggle.setAttribute(
                    'aria-label',
                    'Open navigation menu'
                );

                toggle.innerHTML = `
                    <svg viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.8"
                         stroke-linecap="round">
                        <path d="M4 7h16M4 12h16M4 17h16"/>
                    </svg>
                `;
            });
        });
    }
</script>

</body>
</html>
