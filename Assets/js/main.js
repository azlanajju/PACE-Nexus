(function () {
    const header = document.getElementById('site-header');
    const toggle = document.getElementById('nav-toggle');
    const menu = document.getElementById('nav-menu');

    const setHeaderState = function () {
        if (!header) {
            return;
        }

        if (window.scrollY > 24) {
            header.classList.add('is-scrolled');
        } else {
            header.classList.remove('is-scrolled');
        }
    };

    setHeaderState();
    window.addEventListener('scroll', setHeaderState, { passive: true });

    if (toggle && menu) {
        toggle.addEventListener('click', function () {
            const isOpen = menu.classList.toggle('is-open');
            toggle.classList.toggle('is-open', isOpen);
            toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });

        menu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                menu.classList.remove('is-open');
                toggle.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
            });
        });
    }

    document.querySelectorAll('.pace-carousel').forEach(function (carousel) {
        const slides = carousel.querySelectorAll('.pace-carousel__slide');
        const dots = carousel.querySelectorAll('.pace-carousel__dot');

        if (slides.length <= 1) {
            return;
        }

        let current = 0;
        let timer;

        const goTo = function (index) {
            slides[current].classList.remove('is-active');
            if (dots[current]) {
                dots[current].classList.remove('is-active');
                dots[current].setAttribute('aria-selected', 'false');
            }

            current = (index + slides.length) % slides.length;

            slides[current].classList.add('is-active');
            if (dots[current]) {
                dots[current].classList.add('is-active');
                dots[current].setAttribute('aria-selected', 'true');
            }
        };

        const start = function () {
            timer = window.setInterval(function () {
                goTo(current + 1);
            }, 5000);
        };

        const reset = function () {
            window.clearInterval(timer);
            start();
        };

        dots.forEach(function (dot, index) {
            dot.addEventListener('click', function () {
                goTo(index);
                reset();
            });
        });

        start();
    });

    if (typeof AOS === 'undefined' || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    const animationMap = {
        '.section__header': 'fade-up',
        '.dates-header': 'fade-up',
        '.page-hero': 'fade-up',
        '.prose-content': 'fade-up',
        '.about-showcase__brand': 'fade-right',
        '.about-showcase__content': 'fade-left',
        '.about-publication': 'fade-up',
        '.pace-college__visual': 'fade-right',
        '.pace-college__body': 'fade-left',
        '.date-card': 'fade-up',
        '.sponsor-card': 'zoom-in',
        '.content-card': 'fade-up',
        '.tracks-section__header': 'fade-up',
        '.track-card': 'fade-up',
        '.person-card': 'fade-up',
        '.info-panel': 'fade-up',
        '.portal-banner': 'fade-up',
        '.alert-callout': 'fade-up',
        '.maintenance-box': 'fade-up',
        '.policy-card': 'fade-up',
        '.fee-table-wrap': 'fade-up',
        '.cfp-cta': 'fade-up',
        '.step-list__item': 'fade-up',
        '.check-list li': 'fade-up',
        '.footer__block': 'fade-up',
        '.footer__info-block': 'fade-up',
        '.footer__bottom-inner': 'fade-up',
        '.launching-soon__logo': 'zoom-in',
        '.launching-soon__badge': 'fade-up',
        '.launching-soon__ieee': 'fade-up',
        '.launching-soon__title': 'fade-up',
        '.launching-soon__tagline': 'fade-up',
        '.launching-soon__meta-item': 'fade-up',
        '.launching-soon__message': 'fade-up',
        '.launching-soon__contact': 'fade-up',
        '.launching-soon__footer': 'fade-up',
        '.intelex-page__card': 'fade-up',
    };

    const staggerSelectors = new Set([
        '.date-card',
        '.track-card',
        '.person-card',
        '.policy-card',
        '.step-list__item',
        '.check-list li',
        '.footer__block',
        '.footer__info-block',
        '.launching-soon__meta-item',
    ]);

    Object.keys(animationMap).forEach(function (selector) {
        const parentCounts = new WeakMap();

        document.querySelectorAll(selector).forEach(function (el) {
            if (el.hasAttribute('data-aos') || el.closest('#site-header')) {
                return;
            }

            el.setAttribute('data-aos', animationMap[selector]);
            el.setAttribute('data-aos-duration', '700');
            el.setAttribute('data-aos-easing', 'ease-out-cubic');

            if (staggerSelectors.has(selector)) {
                const parent = el.parentElement;

                if (parent) {
                    const index = parentCounts.get(parent) || 0;
                    parentCounts.set(parent, index + 1);
                    el.setAttribute('data-aos-delay', String(Math.min(index * 80, 400)));
                }
            }
        });
    });

    AOS.init({
        duration: 700,
        easing: 'ease-out-cubic',
        once: false,
        mirror: true,
        offset: 60,
        anchorPlacement: 'top-bottom',
    });
})();
