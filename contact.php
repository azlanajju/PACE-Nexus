<?php

declare(strict_types=1);

require_once __DIR__ . '/config/site.php';

$pageTitle = 'Contact';
$pageDescription = 'Contact — PACE NEXUS 2027';
$bodyClass = 'page-contact';

require __DIR__ . '/Components/Head.php';
require __DIR__ . '/Components/Navbar.php';
?>

<main class="section section--page">
    <div class="container">
        <div class="page-hero">
            <h1>Contact</h1>
            <p>Reach the organizing team for queries related to submissions, registration, and travel.</p>
        </div>

        <div class="page-panels page-panels--single">
            <section class="info-panel">
                <div class="info-panel__header">
                    <span class="info-panel__icon" aria-hidden="true">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M12 21s7-4.35 7-10a7 7 0 10-14 0c0 5.65 7 10 7 10z" stroke="currentColor" stroke-width="1.8"/><circle cx="12" cy="11" r="2.5" stroke="currentColor" stroke-width="1.8"/></svg>
                    </span>
                    <h2 class="info-panel__title">Conference Venue</h2>
                </div>
                <p class="info-panel__text"><?= htmlspecialchars($site['location'], ENT_QUOTES, 'UTF-8') ?></p>
            </section>

            <section class="info-panel">
                <div class="info-panel__header">
                    <span class="info-panel__icon" aria-hidden="true">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="1.8"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                    </span>
                    <h2 class="info-panel__title">Organizing Chairs</h2>
                </div>
                <?php
                $people = $organizingChairs;
                require __DIR__ . '/Components/PeopleGrid.php';
                ?>
            </section>
        </div>
    </div>
</main>

<?php require __DIR__ . '/Components/Footer.php'; ?>
