<?php

declare(strict_types=1);
?>
<section class="hero" id="home">
    <div
        class="hero__bg"
        style="background-image: url('<?= asset_url('Assets/Images/HeroBg.png') ?>');"
        data-aos="fade"
        data-aos-duration="1200"
        data-aos-easing="ease-out-cubic"
    ></div>
    <div
        class="hero__overlay"
        data-aos="fade"
        data-aos-duration="1000"
        data-aos-delay="100"
        data-aos-easing="ease-out-cubic"
    ></div>

    <div class="hero__content container">
        <img
            src="<?= asset_url('Assets/Images/pacenexuslogo_dark.png') ?>"
            alt="<?= htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8') ?>"
            class="hero__logo"
            width="220"
            height="80"
            data-aos="zoom-in"
            data-aos-duration="800"
            data-aos-easing="ease-out-cubic"
        >

        <p
            class="hero__eyebrow"
            data-aos="fade-up"
            data-aos-delay="150"
            data-aos-duration="700"
            data-aos-easing="ease-out-cubic"
        ><?= htmlspecialchars($site['ieee_cosponsor'], ENT_QUOTES, 'UTF-8') ?></p>

        <h1
            class="hero__title"
            data-aos="fade-up"
            data-aos-delay="250"
            data-aos-duration="700"
            data-aos-easing="ease-out-cubic"
        ><?= htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8') ?></h1>

        <p
            class="hero__subtitle"
            data-aos="fade-up"
            data-aos-delay="350"
            data-aos-duration="700"
            data-aos-easing="ease-out-cubic"
        ><?= htmlspecialchars($site['tagline'], ENT_QUOTES, 'UTF-8') ?></p>

        <div class="hero__meta">
            <div
                class="hero__meta-item"
                data-aos="fade-up"
                data-aos-delay="450"
                data-aos-duration="700"
                data-aos-easing="ease-out-cubic"
            >
                <span class="hero__meta-label">Conference Dates</span>
                <strong><?= htmlspecialchars($site['dates'], ENT_QUOTES, 'UTF-8') ?></strong>
                <span><?= htmlspecialchars($site['dates_detail'], ENT_QUOTES, 'UTF-8') ?></span>
            </div>
            <div
                class="hero__meta-item"
                data-aos="fade-up"
                data-aos-delay="550"
                data-aos-duration="700"
                data-aos-easing="ease-out-cubic"
            >
                <span class="hero__meta-label">Venue</span>
                <strong><?= htmlspecialchars($site['venue'], ENT_QUOTES, 'UTF-8') ?></strong>
            </div>
        </div>

        <div
            class="hero__actions"
            data-aos="fade-up"
            data-aos-delay="650"
            data-aos-duration="700"
            data-aos-easing="ease-out-cubic"
        >
            <a href="<?= page_url('submission.php') ?>" class="btn btn--primary">Submit Paper</a>
            <a href="<?= page_url('registration.php') ?>" class="btn btn--outline">Register Now</a>
        </div>
    </div>

    <div
        class="hero__scroll-wrap"
        data-aos="fade-up"
        data-aos-delay="750"
        data-aos-duration="700"
        data-aos-easing="ease-out-cubic"
    >
        <a href="#welcome" class="hero__scroll" aria-label="Scroll to welcome section">
            <span>Welcome</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M12 5v14M5 12l7 7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
</section>
