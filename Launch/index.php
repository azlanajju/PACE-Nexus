<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/config/site.php';

// Launch lives in a subdirectory; point assets/pages at the site root.
$site['base_path'] = rtrim(str_replace('\\', '/', dirname(dirname($_SERVER['SCRIPT_NAME'] ?? ''))), '/');
if ($site['base_path'] === '/' || $site['base_path'] === '\\') {
    $site['base_path'] = '';
}

$pageTitle = 'Official Launch';
$pageDescription = $site['name'] . ' — Official website launch';
$bodyClass = 'page-launch';
$redirectUrl = page_url('index.php');
$countdownSeconds = 10;
$heroRevealSeconds = 3;

require dirname(__DIR__) . '/Components/Head.php';
?>

<link rel="stylesheet" href="<?= htmlspecialchars(($site['base_path'] === '' ? '' : $site['base_path']) . '/Launch/launch.css', ENT_QUOTES, 'UTF-8') ?>">

<div
    class="launch-stage"
    id="launchStage"
    data-countdown="<?= (int) $countdownSeconds ?>"
    data-reveal="<?= (int) $heroRevealSeconds ?>"
    data-redirect="<?= htmlspecialchars($redirectUrl, ENT_QUOTES, 'UTF-8') ?>"
>
    <section class="hero launch-hero" id="home" aria-hidden="true">
        <div
            class="hero__bg"
            style="background-image: url('<?= asset_url('Assets/Images/HeroBg.png') ?>');"
        ></div>
        <div class="hero__overlay"></div>

        <div class="hero__content container">
            <img
                src="<?= asset_url('Assets/Images/pacenexuslogo_dark_1.png') ?>"
                alt="<?= htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8') ?>"
                class="hero__logo"
                width="220"
                height="80"
            >

            <h1 class="hero__title"><?= htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8') ?></h1>
            <p class="hero__subtitle"><?= htmlspecialchars($site['tagline'], ENT_QUOTES, 'UTF-8') ?></p>

            <div class="hero__meta">
                <div class="hero__meta-item">
                    <span class="hero__meta-label">Conference Dates</span>
                    <strong><?= htmlspecialchars($site['dates'], ENT_QUOTES, 'UTF-8') ?></strong>
                    <span><?= htmlspecialchars($site['dates_detail'], ENT_QUOTES, 'UTF-8') ?></span>
                </div>
                <div class="hero__meta-item">
                    <span class="hero__meta-label">Venue</span>
                    <strong><?= htmlspecialchars($site['venue'], ENT_QUOTES, 'UTF-8') ?></strong>
                </div>
            </div>
        </div>
    </section>

    <div class="curtains" id="curtains" aria-hidden="true">
        <div class="curtain curtain--left">
            <div class="curtain__fold"></div>
            <div class="curtain__shine"></div>
        </div>
        <div class="curtain curtain--right">
            <div class="curtain__fold"></div>
            <div class="curtain__shine"></div>
        </div>
    </div>

    <div class="launch-intro" id="launchIntro">
        <img
            src="<?= asset_url('Assets/Images/pacenexuslogo_dark_1.png') ?>"
            alt="<?= htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8') ?>"
            class="launch-intro__logo"
            width="260"
            height="95"
        >

        <p class="launch-intro__eyebrow">Official Website</p>
        <h1 class="launch-intro__title"><?= htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8') ?></h1>
        <p class="launch-intro__copy">Press launch to open the conference website.</p>

        <button type="button" class="launch-btn" id="launchBtn">
            <span class="launch-btn__glow"></span>
            <span class="launch-btn__label">Launch</span>
        </button>

        <div class="launch-countdown" id="launchCountdown" hidden>
            <div class="launch-countdown__ring" aria-hidden="true">
                <svg viewBox="0 0 120 120">
                    <circle class="launch-countdown__track" cx="60" cy="60" r="52"></circle>
                    <circle class="launch-countdown__progress" id="countdownProgress" cx="60" cy="60" r="52"></circle>
                </svg>
            </div>
            <span class="launch-countdown__number" id="countdownNumber"><?= (int) $countdownSeconds ?></span>
            <p class="launch-countdown__caption">Opening in</p>
        </div>
    </div>
</div>

<script src="<?= htmlspecialchars(($site['base_path'] === '' ? '' : $site['base_path']) . '/Launch/launch.js', ENT_QUOTES, 'UTF-8') ?>"></script>
</body>
</html>
