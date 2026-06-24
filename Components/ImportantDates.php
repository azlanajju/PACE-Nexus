<?php

declare(strict_types=1);
?>
<section class="section section--dates" id="dates">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Important Dates</h2>
            <p class="section__lead">Mark your calendar for key milestones of <?= htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8') ?>.</p>
        </div>

        <div class="dates-grid">
            <?php foreach ($importantDates as $item): ?>
                <article class="date-card">
                    <h3 class="date-card__label"><?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?></h3>
                    <p class="date-card__value"><?= htmlspecialchars($item['date'], ENT_QUOTES, 'UTF-8') ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
