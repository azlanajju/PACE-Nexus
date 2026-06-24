<?php

declare(strict_types=1);

$trackNumber = $trackNumber ?? 1;
$trackIcon = $track['icon'] ?? 'chip';
?>
<article class="track-card" style="--track-index: <?= (int) $trackNumber ?>;" data-track="<?= str_pad((string) $trackNumber, 2, '0', STR_PAD_LEFT) ?>">
    <div class="track-card__top">
        <div class="track-card__icon" aria-hidden="true">
            <?php if ($trackIcon === 'bio'): ?>
                <svg viewBox="0 0 24 24" fill="none"><path d="M12 3c-3 2.5-5 5.5-5 9a5 5 0 1010 0c0-3.5-2-6.5-5-9z" stroke="currentColor" stroke-width="1.6"/><path d="M12 8v8M9 11h6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
            <?php elseif ($trackIcon === 'cloud'): ?>
                <svg viewBox="0 0 24 24" fill="none"><path d="M7 18h11a4 4 0 000-8 5.5 5.5 0 00-10.6-1.8A3.5 3.5 0 007 18z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg>
            <?php elseif ($trackIcon === 'city'): ?>
                <svg viewBox="0 0 24 24" fill="none"><path d="M4 20V9l4-2v13M12 20V4l4-2v18M20 20V11l-4-1.5V20" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="M3 20h18" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
            <?php elseif ($trackIcon === 'iot'): ?>
                <svg viewBox="0 0 24 24" fill="none"><rect x="7" y="7" width="10" height="10" rx="2" stroke="currentColor" stroke-width="1.6"/><path d="M12 3v2M12 19v2M3 12h2M19 12h2M5.6 5.6l1.4 1.4M17 17l1.4 1.4M18.4 5.6L17 7M7 17l-1.4 1.4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
            <?php elseif ($trackIcon === 'energy'): ?>
                <svg viewBox="0 0 24 24" fill="none"><path d="M13 2L5 14h6l-1 8 9-14h-6l0-6z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg>
            <?php else: ?>
                <svg viewBox="0 0 24 24" fill="none"><rect x="5" y="5" width="14" height="14" rx="2" stroke="currentColor" stroke-width="1.6"/><path d="M9 9h2v2H9zM13 9h2v2h-2zM9 13h2v2H9zM13 13h2v2h-2z" fill="currentColor"/></svg>
            <?php endif; ?>
        </div>
        <span class="track-card__badge">Track <?= str_pad((string) $trackNumber, 2, '0', STR_PAD_LEFT) ?></span>
    </div>

    <h2 class="track-card__title"><?= htmlspecialchars($track['title'], ENT_QUOTES, 'UTF-8') ?></h2>

    <ul class="track-card__topics">
        <?php foreach ($track['topics'] as $topic): ?>
            <li><?= htmlspecialchars($topic, ENT_QUOTES, 'UTF-8') ?></li>
        <?php endforeach; ?>
    </ul>
</article>
