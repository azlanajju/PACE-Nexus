<?php

declare(strict_types=1);

$datesCount = count($importantDates);
?>
<section class="section section--dates" id="dates">
    <div class="container">
        <div class="dates-header">
            <p class="dates-header__eyebrow">Conference Timeline</p>
            <h2 class="section__title dates-header__title">Important Dates</h2>
            <p class="section__lead">Mark your calendar for key milestones of <?= htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8') ?>.</p>
        </div>

        <div class="dates-timeline" role="list">
            <?php foreach ($importantDates as $index => $item): ?>
                <?php
                $isLast = $index === $datesCount - 1;
                $step = str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT);
                ?>
                <article
                    class="date-card<?= $isLast ? ' date-card--featured' : '' ?>"
                    role="listitem"
                >
                    <?php if ($index < $datesCount - 1): ?>
                        <span class="date-card__connector" aria-hidden="true"></span>
                    <?php endif; ?>

                    <div class="date-card__marker" aria-hidden="true">
                        <span class="date-card__step"><?= $step ?></span>
                    </div>

                    <div class="date-card__body">
                        <div class="date-card__icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <rect x="3" y="4" width="18" height="18" rx="2.5" stroke="currentColor" stroke-width="1.8"/>
                                <path d="M3 9h18M8 2v4M16 2v4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <h3 class="date-card__label"><?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?></h3>
                        <p class="date-card__value"><?= htmlspecialchars($item['date'], ENT_QUOTES, 'UTF-8') ?></p>
                        <?php if ($isLast): ?>
                            <span class="date-card__badge">Conference Week</span>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
