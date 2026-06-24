<?php

declare(strict_types=1);
?>
<section class="hero" id="home">
    <div class="hero__bg" style="background-image: url('<?= asset_url('Assets/Images/HeroBg.png') ?>');"></div>
    <div class="hero__overlay"></div>

    <div class="hero__content container">
        <img
            src="<?= asset_url('Assets/Images/pacenexuslogo_white.png') ?>"
            alt="<?= htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8') ?>"
            class="hero__logo"
            width="220"
            height="80"
        >

        <p class="hero__eyebrow">International Conference</p>
        <h1 class="hero__title"><?= htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8') ?></h1>
        <p class="hero__subtitle"><?= htmlspecialchars($site['tagline'], ENT_QUOTES, 'UTF-8') ?></p>

        <div class="hero__meta">
            <div class="hero__meta-item">
                <span class="hero__meta-label">Conference Dates</span>
                <strong><?= htmlspecialchars($site['dates'], ENT_QUOTES, 'UTF-8') ?></strong>
                <span><?= htmlspecialchars($site['dates_detail'], ENT_QUOTES, 'UTF-8') ?></span>
            </div>
            <div class="hero__meta-item">
                <span class="hero__meta-label">Venue</span>
                <strong><?= htmlspecialchars($site['venue'], ENT_QUOTES, 'UTF-8') ?></strong>
            </div>
        </div>

        <div class="hero__actions">
            <a href="<?= page_url('submission.php') ?>" class="btn btn--primary">Submit Paper</a>
            <a href="<?= page_url('registration.php') ?>" class="btn btn--outline">Register Now</a>
        </div>
    </div>

    <a href="#welcome" class="hero__scroll" aria-label="Scroll to welcome section">
        <span>Welcome</span>
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M12 5v14M5 12l7 7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </a>
</section>
