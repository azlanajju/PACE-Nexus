<?php

declare(strict_types=1);

$personName = $person['name'] ?? '';
$personRole = $person['role'] ?? '';
$personImage = $person['image'] ?? null;
?>
<article class="person-card">
    <img
        src="<?= people_image_url($personImage) ?>"
        alt="<?= htmlspecialchars($personName, ENT_QUOTES, 'UTF-8') ?>"
        class="person-card__photo"
        width="120"
        height="120"
        loading="lazy"
    >
    <div class="person-card__body">
        <h3 class="person-card__name"><?= htmlspecialchars($personName, ENT_QUOTES, 'UTF-8') ?></h3>
        <?php if ($personRole !== ''): ?>
            <p class="person-card__role"><?= htmlspecialchars($personRole, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
    </div>
</article>
