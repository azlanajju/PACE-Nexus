<?php

declare(strict_types=1);

require_once __DIR__ . '/config/site.php';

$pageTitle = 'Call for Papers';
$pageDescription = 'Call for Papers — PACE IEEE NEXUS - 2027';
$bodyClass = 'page-cfp';

require __DIR__ . '/Components/Head.php';
require __DIR__ . '/Components/Navbar.php';
?>

<main class="section section--page">
    <div class="container">
        <div class="page-hero">
            <h1>Call for Papers</h1>
            <p>Original and unpublished research papers are invited from academicians, researchers, industry professionals, and students.</p>
        </div>

        <div class="content-card cfp-intro">
            <p>
                Prospective authors are encouraged to submit high-quality manuscripts describing original research contributions,
                innovative applications, and emerging trends in engineering, technology, and sustainability.
            </p>
        </div>

        <section class="tracks-section" aria-labelledby="tracks-heading">
            <div class="tracks-section__header">
                <p class="tracks-section__eyebrow">Research Areas</p>
                <h2 id="tracks-heading" class="tracks-section__title">Conference Tracks</h2>
                <p class="tracks-section__lead">Six thematic tracks covering next-generation technologies across computing, sustainability, and smart systems.</p>
            </div>

            <div class="tracks-grid">
                <?php foreach ($cfpTracks as $index => $track): ?>
                    <?php
                    $trackNumber = $index + 1;
                    require __DIR__ . '/Components/TrackCard.php';
                    ?>
                <?php endforeach; ?>
            </div>
        </section>

        <div class="cfp-cta">
            <a href="<?= page_url('submission.php') ?>" class="btn btn--primary">View Submission Guidelines</a>
        </div>
    </div>
</main>

<?php require __DIR__ . '/Components/Footer.php'; ?>
