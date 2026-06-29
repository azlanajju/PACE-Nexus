<?php

declare(strict_types=1);

require_once __DIR__ . '/config/site.php';

$pageTitle = 'Committee';
$pageDescription = 'Organizing Committee — PACE IEEE NEXUS - 2027';
$bodyClass = 'page-committee';

require __DIR__ . '/Components/Head.php';
require __DIR__ . '/Components/Navbar.php';
?>

<main class="section section--page">
    <div class="container">
        <div class="page-hero">
            <h1>Organizing Committee</h1>
            <p>Leadership and committee members for <?= htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8') ?>.</p>
        </div>

        <?php foreach ($committeeSections as $section): ?>
            <div class="content-card">
                <h2><?= htmlspecialchars($section['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                <?php
                $people = $section['members'];
                require __DIR__ . '/Components/PeopleGrid.php';
                ?>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php require __DIR__ . '/Components/Footer.php'; ?>
