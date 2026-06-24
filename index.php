<?php

declare(strict_types=1);

require_once __DIR__ . '/config/site.php';

$pageTitle = $site['name'];
$pageDescription = 'PACE NEXUS 2027 — International Conference on Next-Generation Technologies for Energy, Sustainability and Smart Systems at P. A. College of Engineering, Mangaluru.';
$bodyClass = 'page-home';

require __DIR__ . '/Components/Head.php';
require __DIR__ . '/Components/Navbar.php';
require __DIR__ . '/Components/Hero.php';
?>

<main>
    <section class="section section--welcome" id="welcome">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title"><?= htmlspecialchars($welcomeMessage['title'], ENT_QUOTES, 'UTF-8') ?></h2>
            </div>
            <div class="prose-content">
                <?php foreach ($welcomeMessage['paragraphs'] as $paragraph): ?>
                    <p><?= htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8') ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--about" id="about">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title">About <?= htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8') ?></h2>
                <p class="section__lead">
                    An international platform for researchers, academicians, industry professionals, innovators, and policymakers.
                </p>
            </div>

            <div class="about-grid">
                <div class="about-content">
                    <p>
                        <?= htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8') ?> aims to provide an international platform for researchers,
                        academicians, industry professionals, innovators, and policymakers to present and discuss recent advancements
                        in next-generation technologies that support sustainable development and smart systems.
                    </p>
                    <p>
                        The conference focuses on emerging trends in Artificial Intelligence, Computing, Cyber Security, Biotechnology,
                        Sustainable Infrastructure, Advanced Communication Technologies, Renewable Energy, and Smart Manufacturing.
                    </p>
                    <p>
                        By fostering interdisciplinary collaboration between academia and industry, the conference seeks to promote
                        innovative solutions that address global challenges related to energy, sustainability, digital transformation,
                        and engineering excellence. The conference aligns with the United Nations Sustainable Development Goals (SDGs)
                        and IEEE&rsquo;s mission of advancing technology for humanity.
                    </p>
                    <span class="ieee-badge">
                        IEEE Xplore Digital Library &mdash; Conference Record #<?= htmlspecialchars($site['ieee_record'], ENT_QUOTES, 'UTF-8') ?>
                    </span>
                </div>

                <aside class="about-highlight">
                    <h3>Publication &amp; Presentation</h3>
                    <p>
                        All accepted and presented papers will be submitted for possible publication in the IEEE Xplore Digital Library
                        (Conference Record #<?= htmlspecialchars($site['ieee_record'], ENT_QUOTES, 'UTF-8') ?>), through the IEEE Conference
                        Publication Program (CPP).
                    </p>
                </aside>
            </div>
        </div>
    </section>

    <section class="section section--college" id="pace">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title"><?= htmlspecialchars($aboutCollege['title'], ENT_QUOTES, 'UTF-8') ?></h2>
            </div>
            <div class="prose-content">
                <?php foreach ($aboutCollege['paragraphs'] as $paragraph): ?>
                    <p><?= htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8') ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php require __DIR__ . '/Components/ImportantDates.php'; ?>

    <section class="section section--sponsors" id="sponsors">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title">Sponsored by</h2>
                <p class="section__lead">Partner logos and sponsor details will be updated soon.</p>
            </div>

            <div class="sponsors-grid">
                <div class="sponsor-card">Sponsor details coming soon</div>
                <div class="sponsor-card">P. A. Educational Trust</div>
                <div class="sponsor-card">IEEE</div>
                <div class="sponsor-card">Industry Partners</div>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/Components/Footer.php'; ?>
