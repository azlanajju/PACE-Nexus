<?php

declare(strict_types=1);

require_once __DIR__ . '/config/site.php';

$pageTitle = 'Speakers';
$pageDescription = 'Speakers — PACE IEEE NEXUS - 2027';
$bodyClass = 'page-speakers';

require __DIR__ . '/Components/Head.php';
require __DIR__ . '/Components/Navbar.php';
?>

<main class="section section--page">
    <div class="container">
        <div class="page-hero">
            <h1>Speakers</h1>
            <p>Keynote and invited speaker profiles for the conference.</p>
        </div>

        <div class="content-card">
            <?php
            $people = $speakers;
            require __DIR__ . '/Components/PeopleGrid.php';
            ?>
        </div>
    </div>
</main>

<?php require __DIR__ . '/Components/Footer.php'; ?>
