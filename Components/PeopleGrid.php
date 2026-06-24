<?php

declare(strict_types=1);

/** @var array<int, array{name: string, role?: string, image?: string|null}> $people */
?>
<div class="people-grid">
    <?php foreach ($people as $person): ?>
        <?php require __DIR__ . '/PersonCard.php'; ?>
    <?php endforeach; ?>
</div>
