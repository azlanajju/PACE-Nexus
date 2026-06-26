<?php

declare(strict_types=1);

require_once __DIR__ . '/config/site.php';

$pageTitle = 'Launching Soon';
$pageDescription = $site['name'] . ' — Official website launching soon.';
$bodyClass = 'page-launching';

require __DIR__ . '/Components/Head.php';
?>

<div class="launching-soon">
    <div class="launching-soon__bg" style="background-image: url('<?= asset_url('Assets/Images/HeroBg.png') ?>');"></div>
    <div class="launching-soon__overlay"></div>

    <main class="launching-soon__content">
        <img
            src="<?= asset_url('Assets/Images/pacenexuslogo_white.png') ?>"
            alt="<?= htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8') ?>"
            class="launching-soon__logo"
            width="280"
            height="100"
        >

        <span class="launching-soon__badge">Launching Soon</span>

        <h1 class="launching-soon__title"><?= htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8') ?></h1>
        <p class="launching-soon__tagline"><?= htmlspecialchars($site['tagline'], ENT_QUOTES, 'UTF-8') ?></p>

        <div class="launching-soon__meta">
            <div class="launching-soon__meta-item">
                <span class="launching-soon__meta-label">Conference Dates</span>
                <strong><?= htmlspecialchars($site['dates'], ENT_QUOTES, 'UTF-8') ?></strong>
                <span><?= htmlspecialchars($site['dates_detail'], ENT_QUOTES, 'UTF-8') ?></span>
            </div>
            <div class="launching-soon__meta-item">
                <span class="launching-soon__meta-label">Venue</span>
                <strong><?= htmlspecialchars($site['venue'], ENT_QUOTES, 'UTF-8') ?></strong>
            </div>
        </div>

        <p class="launching-soon__message">
            Our official conference website is launching soon. Stay tuned for call for papers, registration, and program updates.
        </p>

        <a href="mailto:<?= htmlspecialchars($site['email'], ENT_QUOTES, 'UTF-8') ?>" class="launching-soon__contact">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.8"/>
                <path d="M3 7l9 6 9-6" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
            </svg>
            <?= htmlspecialchars($site['email'], ENT_QUOTES, 'UTF-8') ?>
        </a>
    </main>

    <footer class="launching-soon__footer">
        <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8') ?> &middot; P. A. College of Engineering, Mangaluru</p>
    </footer>
</div>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="<?= asset_url('Assets/js/main.js') ?>"></script>
</body>
</html>
