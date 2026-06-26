<?php

declare(strict_types=1);

require_once __DIR__ . '/config/site.php';

$pageTitle = 'Intelex Solutions';
$pageDescription = 'Intelex Solutions — software development services in Mangalore.';
$bodyClass = 'page-intelex';

require __DIR__ . '/Components/Head.php';
?>

<main class="intelex-page">
    <div class="intelex-page__card">
        <a href="<?= page_url('index.php') ?>" class="intelex-page__back">&larr; Back to <?= htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8') ?></a>

        <div class="intelex-page__logo-wrap">
            <img
                src="<?= asset_url($intelexSolutions['logo']) ?>"
                alt="<?= htmlspecialchars($intelexSolutions['name'], ENT_QUOTES, 'UTF-8') ?>"
                class="intelex-page__logo"
                width="240"
                height="70"
            >
        </div>

        <h1 class="intelex-page__title"><?= htmlspecialchars($intelexSolutions['name'], ENT_QUOTES, 'UTF-8') ?></h1>
        <p class="intelex-page__tagline"><?= htmlspecialchars($intelexSolutions['tagline'], ENT_QUOTES, 'UTF-8') ?></p>
        <p class="intelex-page__desc"><?= htmlspecialchars($intelexSolutions['description'], ENT_QUOTES, 'UTF-8') ?></p>

        <ul class="intelex-page__contact">
            <!-- <li>
                <span class="intelex-page__label">Email</span>
                <a href="mailto:<?= htmlspecialchars($intelexSolutions['email'], ENT_QUOTES, 'UTF-8') ?>">
                    <?= htmlspecialchars($intelexSolutions['email'], ENT_QUOTES, 'UTF-8') ?>
                </a>
            </li> -->
            <?php foreach ($intelexSolutions['phones'] as $phone): ?>
                <li>
                    <span class="intelex-page__label">Phone</span>
                    <a href="tel:<?= htmlspecialchars(preg_replace('/\s+/', '', $phone), ENT_QUOTES, 'UTF-8') ?>">
                        <?= htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') ?>
                    </a>
                </li>
            <?php endforeach; ?>
            <li>
                <span class="intelex-page__label">Location</span>
                <span><?= htmlspecialchars($intelexSolutions['location'], ENT_QUOTES, 'UTF-8') ?></span>
            </li>
            <!-- <li>
                <span class="intelex-page__label">Website</span>
                <a
                    href="<?= htmlspecialchars($intelexSolutions['website'], ENT_QUOTES, 'UTF-8') ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    intelexsolutions.co.in
                </a>
            </li> -->
        </ul>

        <!-- <a
            href="<?= htmlspecialchars($intelexSolutions['website'], ENT_QUOTES, 'UTF-8') ?>"
            class="btn btn--primary intelex-page__cta"
            target="_blank"
            rel="noopener noreferrer"
        >
            Visit Website
        </a> -->
    </div>
</main>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="<?= asset_url('Assets/js/main.js') ?>"></script>
</body>
</html>
