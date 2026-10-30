
<?php include 'head.php'; ?>

<div class="site-root">

    <?php include 'header.php'; ?>

    <main id="home">

        <section class="hero" aria-labelledby="hero-title">

            <div class="container hero-inner">

                <div class="hero-copy">

                    <h1 id="hero-title">
                        We Make 
                        <span class="highlight">Studying, Traveling, and Working</span>
                        Abroad Easier
                    </h1>

                    <div class="hero-actions">

                        <a class="button-primary" href="services.php">
                            Explore Our Services
                            <span class="arrow">↗</span>
                        </a>

                        <a class="button-secondary" href="about.php">
                            <span class="circle-arrow">▶</span>
                            Discover BOEC
                        </a>

                    </div>

                </div>

            </div>

        </section>
                
        <section class="about-section" id="about">
            <div class="container about-layout">

                <!-- First div: Text -->
                <div class="about-text">
                    <h2 class="about-heading">
                        About Us
                    </h2>

                    <div class="about-copy">
                        <p>
                            Dreaming of studying, working or exploring opportunities abroad?<br>
                            <br> 
                            <strong>Beacon Overseas Educational Consult (BOEC)</strong> provides guidance to help you take the next step.
                            <br>
                            <br>
                            From admissions and visa assistance to conferences, volunteer programmes, summer schools, 
                            loans, work, tours, visits and investment, we support students and professionals 
                            on their journey abroad.
                        </p>
                    </div>
                </div>

                <!-- Second div: Image -->
                <div class="about-image">
                    <img
                        src="assets/images/beacon-about-us.jpg"
                        alt="Students and professionals preparing for international opportunities"
                        loading="lazy"
                    >
                </div>

            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section" id="services">
            <div class="container">

                <div class="services-heading">
                    <h2 class="services-title">Our Services</h2>
                    <p class="services-intro">
                        The support you need to take your next step abroad.
                    </p>
                </div>

                <div class="services-grid">

                    <!-- Study Abroad -->
                    <article class="service-card">
                        <div class="service-icon">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <h3>Study Abroad</h3>
                        <p>Find the right international study options and get support through university admissions.</p>
                        <a href="#contact" class="service-link">Learn More <span>→</span></a>
                    </article>

                    <!-- Visa Assistance -->
                    <article class="service-card">
                        <div class="service-icon">
                            <i class="fa-solid fa-passport"></i>
                        </div>
                        <h3>Visa Assistance</h3>
                        <p>Prepare your documents and understand visa requirements with professional guidance.</p>
                        <a href="#contact" class="service-link">Learn More <span>→</span></a>
                    </article>

                    <!-- Work Abroad -->
                    <article class="service-card">
                        <div class="service-icon">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>
                        <h3>Work Abroad</h3>
                        <p>Explore overseas career pathways and find opportunities that match your ambitions.</p>
                        <a href="#contact" class="service-link">Learn More <span>→</span></a>
                    </article>

                    <!-- Tour and Visit Abroad -->
                    <article class="service-card">
                        <div class="service-icon">
                            <i class="fa-solid fa-plane-departure"></i>
                        </div>
                        <h3>Tour &amp; Visit Abroad</h3>
                        <p>Plan your international trip with practical support for a smoother travel experience.</p>
                        <a href="#contact" class="service-link">Learn More <span>→</span></a>
                    </article>

                </div>
            </div>
        </section>
        
        <!-- Destinations Section -->
        <section class="destinations-section" id="destinations" aria-labelledby="destinations-title">
            <div class="container">

                <div class="destinations-heading">

                    <h2 class="destinations-title" id="destinations-title">
                        Where Can Your Journey Take You?
                    </h2>

                    <p class="destinations-intro">
                        We help students and professionals explore study, work and
                        travel opportunities in destinations around the world.
                    </p>
                </div>

            </div>

            <!-- Scrolling flag marquee (full-bleed) -->
            <div class="destinations-marquee" aria-label="Destinations we support">
                <div class="marquee-track">

                    <!-- First set -->
                    <div class="marquee-group">
                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="United Kingdom flag">
                                    <rect width="60" height="40" fill="#012169"/>
                                    <path d="M0 0 L60 40 M60 0 L0 40" stroke="#fff" stroke-width="8"/>
                                    <path d="M0 0 L60 40 M60 0 L0 40" stroke="#C8102E" stroke-width="4"/>
                                    <path d="M30 0 V40 M0 20 H60" stroke="#fff" stroke-width="13"/>
                                    <path d="M30 0 V40 M0 20 H60" stroke="#C8102E" stroke-width="7"/>
                                </svg>
                            </span>
                            <span class="flag-name">United Kingdom</span>
                        </div>

                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="United States flag">
                                    <rect width="60" height="40" fill="#fff"/>
                                    <g fill="#B22234">
                                        <rect y="0" width="60" height="3.08"/>
                                        <rect y="6.15" width="60" height="3.08"/>
                                        <rect y="12.31" width="60" height="3.08"/>
                                        <rect y="18.46" width="60" height="3.08"/>
                                        <rect y="24.62" width="60" height="3.08"/>
                                        <rect y="30.77" width="60" height="3.08"/>
                                        <rect y="36.92" width="60" height="3.08"/>
                                    </g>
                                    <rect width="24" height="21.54" fill="#3C3B6E"/>
                                    <g fill="#fff">
                                        <circle cx="4" cy="4" r="1.2"/><circle cx="9" cy="4" r="1.2"/><circle cx="14" cy="4" r="1.2"/><circle cx="19" cy="4" r="1.2"/>
                                        <circle cx="6.5" cy="8" r="1.2"/><circle cx="11.5" cy="8" r="1.2"/><circle cx="16.5" cy="8" r="1.2"/>
                                        <circle cx="4" cy="12" r="1.2"/><circle cx="9" cy="12" r="1.2"/><circle cx="14" cy="12" r="1.2"/><circle cx="19" cy="12" r="1.2"/>
                                        <circle cx="6.5" cy="16" r="1.2"/><circle cx="11.5" cy="16" r="1.2"/><circle cx="16.5" cy="16" r="1.2"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="flag-name">United States</span>
                        </div>

                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Canada flag">
                                    <rect width="60" height="40" fill="#fff"/>
                                    <rect width="15" height="40" fill="#D80621"/>
                                    <rect x="45" width="15" height="40" fill="#D80621"/>
                                    <path d="M30 9l2.2 4.6 4.8-1.2-1.6 4.6 3.8 3-4.6 1.4.8 4.8-4.4-2.2-4.4 2.2.8-4.8-4.6-1.4 3.8-3-1.6-4.6 4.8 1.2z" fill="#D80621"/>
                                </svg>
                            </span>
                            <span class="flag-name">Canada</span>
                        </div>

                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Australia flag">
                                    <rect width="60" height="40" fill="#00247D"/>
                                    <path d="M0 0 L30 20 M30 0 L0 20" stroke="#fff" stroke-width="4"/>
                                    <path d="M0 0 L30 20 M30 0 L0 20" stroke="#CF142B" stroke-width="2"/>
                                    <path d="M15 0 V20 M0 10 H30" stroke="#fff" stroke-width="6"/>
                                    <path d="M15 0 V20 M0 10 H30" stroke="#CF142B" stroke-width="3"/>
                                    <g fill="#fff">
                                        <circle cx="45" cy="10" r="1.5"/>
                                        <circle cx="52" cy="18" r="1.5"/>
                                        <circle cx="45" cy="28" r="1.5"/>
                                        <circle cx="38" cy="18" r="1.5"/>
                                        <circle cx="48" cy="20" r="1"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="flag-name">Australia</span>
                        </div>

                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="China flag">
                                    <rect width="60" height="40" fill="#DE2910"/>
                                    <g fill="#FFDE00">
                                        <path d="M12 8l2.4 7.2H22l-6 4.5 2.3 7.1-6.3-4.6-6.3 4.6 2.3-7.1-6-4.5h7.6z"/>
                                        <circle cx="24" cy="6" r="1.6"/>
                                        <circle cx="28" cy="11" r="1.6"/>
                                        <circle cx="28" cy="17" r="1.6"/>
                                        <circle cx="24" cy="22" r="1.6"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="flag-name">China</span>
                        </div>

                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="France flag">
                                    <rect width="20" height="40" fill="#0055A4"/>
                                    <rect x="20" width="20" height="40" fill="#fff"/>
                                    <rect x="40" width="20" height="40" fill="#EF4135"/>
                                </svg>
                            </span>
                            <span class="flag-name">France</span>
                        </div>

                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Germany flag">
                                    <rect width="60" height="13.33" fill="#000"/>
                                    <rect y="13.33" width="60" height="13.33" fill="#DD0000"/>
                                    <rect y="26.66" width="60" height="13.34" fill="#FFCE00"/>
                                </svg>
                            </span>
                            <span class="flag-name">Germany</span>
                        </div>

                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Malaysia flag">
                                    <rect width="60" height="40" fill="#fff"/>
                                    <g fill="#CC0001">
                                        <rect y="0" width="60" height="2.86"/>
                                        <rect y="5.71" width="60" height="2.86"/>
                                        <rect y="11.43" width="60" height="2.86"/>
                                        <rect y="17.14" width="60" height="2.86"/>
                                        <rect y="22.86" width="60" height="2.86"/>
                                        <rect y="28.57" width="60" height="2.86"/>
                                        <rect y="34.29" width="60" height="2.86"/>
                                    </g>
                                    <rect width="30" height="20" fill="#010066"/>
                                    <circle cx="12" cy="10" r="6" fill="#FFCC00"/>
                                    <circle cx="14.5" cy="10" r="5" fill="#010066"/>
                                    <path d="M22 5l1 2.5 2.5.5-2 1.8.5 2.5-2-1.4-2 1.4.5-2.5-2-1.8 2.5-.5z" fill="#FFCC00"/>
                                </svg>
                            </span>
                            <span class="flag-name">Malaysia</span>
                        </div>

                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Turkey flag">
                                    <rect width="60" height="40" fill="#E30A17"/>
                                    <circle cx="24" cy="20" r="8" fill="#fff"/>
                                    <circle cx="26.5" cy="20" r="6.5" fill="#E30A17"/>
                                    <path d="M38 20l-2.4 1.6.9 2.8-2.4-1.7-2.4 1.7.9-2.8L30 20l2.6-.1.6-2.6 1.7 2.1 2.6-.7-1.1 2.4z" fill="#fff"/>
                                </svg>
                            </span>
                            <span class="flag-name">Turkey</span>
                        </div>

                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="United Arab Emirates flag">
                                    <rect width="15" height="40" fill="#FF0000"/>
                                    <rect x="15" width="45" height="13.33" fill="#00732F"/>
                                    <rect x="15" y="13.33" width="45" height="13.33" fill="#fff"/>
                                    <rect x="15" y="26.66" width="45" height="13.34" fill="#000"/>
                                </svg>
                            </span>
                            <span class="flag-name">Dubai, UAE</span>
                        </div>
                    </div>

                    <!-- Duplicate set (for seamless loop) -->
                    <div class="marquee-group" aria-hidden="true">
                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="60" height="40" fill="#012169"/>
                                    <path d="M0 0 L60 40 M60 0 L0 40" stroke="#fff" stroke-width="8"/>
                                    <path d="M0 0 L60 40 M60 0 L0 40" stroke="#C8102E" stroke-width="4"/>
                                    <path d="M30 0 V40 M0 20 H60" stroke="#fff" stroke-width="13"/>
                                    <path d="M30 0 V40 M0 20 H60" stroke="#C8102E" stroke-width="7"/>
                                </svg>
                            </span>
                            <span class="flag-name">United Kingdom</span>
                        </div>

                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="60" height="40" fill="#fff"/>
                                    <g fill="#B22234">
                                        <rect y="0" width="60" height="3.08"/>
                                        <rect y="6.15" width="60" height="3.08"/>
                                        <rect y="12.31" width="60" height="3.08"/>
                                        <rect y="18.46" width="60" height="3.08"/>
                                        <rect y="24.62" width="60" height="3.08"/>
                                        <rect y="30.77" width="60" height="3.08"/>
                                        <rect y="36.92" width="60" height="3.08"/>
                                    </g>
                                    <rect width="24" height="21.54" fill="#3C3B6E"/>
                                    <g fill="#fff">
                                        <circle cx="4" cy="4" r="1.2"/><circle cx="9" cy="4" r="1.2"/><circle cx="14" cy="4" r="1.2"/><circle cx="19" cy="4" r="1.2"/>
                                        <circle cx="6.5" cy="8" r="1.2"/><circle cx="11.5" cy="8" r="1.2"/><circle cx="16.5" cy="8" r="1.2"/>
                                        <circle cx="4" cy="12" r="1.2"/><circle cx="9" cy="12" r="1.2"/><circle cx="14" cy="12" r="1.2"/><circle cx="19" cy="12" r="1.2"/>
                                        <circle cx="6.5" cy="16" r="1.2"/><circle cx="11.5" cy="16" r="1.2"/><circle cx="16.5" cy="16" r="1.2"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="flag-name">United States</span>
                        </div>

                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="60" height="40" fill="#fff"/>
                                    <rect width="15" height="40" fill="#D80621"/>
                                    <rect x="45" width="15" height="40" fill="#D80621"/>
                                    <path d="M30 9l2.2 4.6 4.8-1.2-1.6 4.6 3.8 3-4.6 1.4.8 4.8-4.4-2.2-4.4 2.2.8-4.8-4.6-1.4 3.8-3-1.6-4.6 4.8 1.2z" fill="#D80621"/>
                                </svg>
                            </span>
                            <span class="flag-name">Canada</span>
                        </div>

                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="60" height="40" fill="#00247D"/>
                                    <path d="M0 0 L30 20 M30 0 L0 20" stroke="#fff" stroke-width="4"/>
                                    <path d="M0 0 L30 20 M30 0 L0 20" stroke="#CF142B" stroke-width="2"/>
                                    <path d="M15 0 V20 M0 10 H30" stroke="#fff" stroke-width="6"/>
                                    <path d="M15 0 V20 M0 10 H30" stroke="#CF142B" stroke-width="3"/>
                                    <g fill="#fff">
                                        <circle cx="45" cy="10" r="1.5"/>
                                        <circle cx="52" cy="18" r="1.5"/>
                                        <circle cx="45" cy="28" r="1.5"/>
                                        <circle cx="38" cy="18" r="1.5"/>
                                        <circle cx="48" cy="20" r="1"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="flag-name">Australia</span>
                        </div>

                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="60" height="40" fill="#DE2910"/>
                                    <g fill="#FFDE00">
                                        <path d="M12 8l2.4 7.2H22l-6 4.5 2.3 7.1-6.3-4.6-6.3 4.6 2.3-7.1-6-4.5h7.6z"/>
                                        <circle cx="24" cy="6" r="1.6"/>
                                        <circle cx="28" cy="11" r="1.6"/>
                                        <circle cx="28" cy="17" r="1.6"/>
                                        <circle cx="24" cy="22" r="1.6"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="flag-name">China</span>
                        </div>

                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="40" fill="#0055A4"/>
                                    <rect x="20" width="20" height="40" fill="#fff"/>
                                    <rect x="40" width="20" height="40" fill="#EF4135"/>
                                </svg>
                            </span>
                            <span class="flag-name">France</span>
                        </div>

                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="60" height="13.33" fill="#000"/>
                                    <rect y="13.33" width="60" height="13.33" fill="#DD0000"/>
                                    <rect y="26.66" width="60" height="13.34" fill="#FFCE00"/>
                                </svg>
                            </span>
                            <span class="flag-name">Germany</span>
                        </div>

                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="60" height="40" fill="#fff"/>
                                    <g fill="#CC0001">
                                        <rect y="0" width="60" height="2.86"/>
                                        <rect y="5.71" width="60" height="2.86"/>
                                        <rect y="11.43" width="60" height="2.86"/>
                                        <rect y="17.14" width="60" height="2.86"/>
                                        <rect y="22.86" width="60" height="2.86"/>
                                        <rect y="28.57" width="60" height="2.86"/>
                                        <rect y="34.29" width="60" height="2.86"/>
                                    </g>
                                    <rect width="30" height="20" fill="#010066"/>
                                    <circle cx="12" cy="10" r="6" fill="#FFCC00"/>
                                    <circle cx="14.5" cy="10" r="5" fill="#010066"/>
                                    <path d="M22 5l1 2.5 2.5.5-2 1.8.5 2.5-2-1.4-2 1.4.5-2.5-2-1.8 2.5-.5z" fill="#FFCC00"/>
                                </svg>
                            </span>
                            <span class="flag-name">Malaysia</span>
                        </div>

                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="60" height="40" fill="#E30A17"/>
                                    <circle cx="24" cy="20" r="8" fill="#fff"/>
                                    <circle cx="26.5" cy="20" r="6.5" fill="#E30A17"/>
                                    <path d="M38 20l-2.4 1.6.9 2.8-2.4-1.7-2.4 1.7.9-2.8L30 20l2.6-.1.6-2.6 1.7 2.1 2.6-.7-1.1 2.4z" fill="#fff"/>
                                </svg>
                            </span>
                            <span class="flag-name">Turkey</span>
                        </div>

                        <div class="flag-item">
                            <span class="flag-icon">
                                <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="15" height="40" fill="#FF0000"/>
                                    <rect x="15" width="45" height="13.33" fill="#00732F"/>
                                    <rect x="15" y="13.33" width="45" height="13.33" fill="#fff"/>
                                    <rect x="15" y="26.66" width="45" height="13.34" fill="#000"/>
                                </svg>
                            </span>
                            <span class="flag-name">Dubai, UAE</span>
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <section class="faq-section" id="faqs" aria-labelledby="faq-title">
            <div class="container faq-layout">

                <div class="faq-intro-content">
                    <div class="about-label">
                        Frequently Asked Questions
                    </div>

                    <h2 class="faq-heading" id="faq-title">
                        Questions about <span class="highlight">going abroad?</span>
                    </h2>

                    <p class="faq-intro">
                        Find answers to common questions about BOEC's services
                        and how to get started.
                    </p>
                </div>

                <div class="faq-list">

                    <details class="faq-item">
                        <summary class="faq-question">
                            What services does Beacon Overseas Educational Consult offer?
                        </summary>

                        <div class="faq-answer">
                            BOEC provides support for international university
                            admissions, visa applications, conferences, volunteer
                            programmes, summer schools, student loans, work
                            opportunities, tours, visits and investment
                            opportunities abroad.
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            Can BOEC help me secure a visa to travel abroad?
                        </summary>

                        <div class="faq-answer">
                            Yes. BOEC provides visa assistance and guidance to
                            help you understand the application process, prepare
                            the required documents and submit your application.
                            Visa approval is determined by the relevant embassy
                            or immigration authority.
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            How do I get started with BOEC's services?
                        </summary>

                        <div class="faq-answer">
                            Contact BOEC to discuss your goals. We will help you
                            identify the service you need and explain the next
                            steps, requirements and applicable fees.
                        </div>
                    </details>

                </div>
            </div>
        </section>

        <section class="cta-section" id="contact" aria-labelledby="cta-title">
            <div class="container cta-content">
                <div class="cta-eyebrow">Your next chapter starts now</div>

                <h2 class="cta-title" id="cta-title">
                    Ready to Begin Your Journey Abroad?
                </h2>

                <p class="cta-description">
                    Let Beacon Overseas Educational Consult help you explore your
                    options and take the next step towards your international goals.
                </p>

                <div class="cta-actions">
                    <a class="cta-button-primary"
                    href="mailto:info@beaconoverseas.com">
                        Book a Consultation
                        <span class="arrow" aria-hidden="true">↗</span>
                    </a>

                    <a class="cta-button-secondary" href="#services">
                        Explore Our Services
                        <span class="arrow" aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </section>

    </main>

</div>

<?php include 'footer.php'; ?>
