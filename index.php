<?php

declare(strict_types=1);

require_once __DIR__ . '/config/site.php';

$pageTitle = $site['name'];
$pageDescription = 'PACE IEEE NEXUS - 2027 — International Conference on Next-Generation Technologies for Energy, Sustainability and Smart Systems at P. A. College of Engineering, Mangaluru.';
$bodyClass = 'page-home';

require __DIR__ . '/Components/Head.php';
require __DIR__ . '/Components/Navbar.php';
require __DIR__ . '/Components/Hero.php';
?>

<main>
    <section class="section section--welcome" id="welcome">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title"><?= htmlspecialchars($welcomeMessage['title'], ENT_QUOTES, 'UTF-8') ?></h2>
            </div>
            <div class="prose-content">
                <?php foreach ($welcomeMessage['paragraphs'] as $paragraph): ?>
                    <p><?= htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8') ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--about" id="about">
        <div class="container">
            <div class="about-showcase">
                <div class="about-showcase__brand">
                    <div class="about-logo-card">
                        <img
                            src="<?= asset_url('Assets/Images/pacenexuslogo_white.png') ?>"
                            alt="<?= htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8') ?>"
                            class="about-logo-card__image"
                            width="320"
                            height="120"
                        >
                        <p class="about-logo-card__tagline"><?= htmlspecialchars($site['ieee_cosponsor'], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                </div>

                <div class="about-showcase__content">
                    <p class="about-showcase__eyebrow">About the Conference</p>
                    <h2 class="about-showcase__title">About <?= htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8') ?></h2>
                    <p class="about-showcase__lead">
                        An international platform for researchers, academicians, industry professionals, innovators, and policymakers.
                    </p>

                    <div class="about-content">
                        <p>
                            <?= htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8') ?> aims to provide an international platform for researchers,
                            academicians, industry professionals, innovators, and policymakers to present and discuss recent advancements
                            in next-generation technologies that support sustainable development and smart systems.
                        </p>
                        <p>
                            The conference focuses on emerging trends across key domains shaping the future of engineering and technology.
                        </p>
                    </div>

                    <ul class="about-topic-tags" aria-label="Conference focus areas">
                        <?php foreach ($aboutNexusTopics as $topic): ?>
                            <li><?= htmlspecialchars($topic, ENT_QUOTES, 'UTF-8') ?></li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="about-content about-content--closing">
                        <p>
                            By fostering interdisciplinary collaboration between academia and industry, the conference seeks to promote
                            innovative solutions that address global challenges related to energy, sustainability, digital transformation,
                            and engineering excellence. The conference aligns with the United Nations Sustainable Development Goals (SDGs)
                            and IEEE&rsquo;s mission of advancing technology for humanity.
                        </p>
                    </div>

                    <span class="ieee-badge">
                        IEEE Xplore Digital Library &mdash; Conference Record #<?= htmlspecialchars($site['ieee_record'], ENT_QUOTES, 'UTF-8') ?>
                    </span>
                </div>
            </div>

            <aside class="about-publication">
                <div class="about-highlight">
                    <div class="about-highlight__header">
                        <div class="about-highlight__icon" aria-hidden="true">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M4 19.5A2.5 2.5 0 016.5 17H20" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z" stroke="currentColor" stroke-width="1.8"/></svg>
                        </div>
                        <div class="about-highlight__titles">
                            <p class="about-highlight__label">IEEE Xplore Digital Library</p>
                            <h3>Publication &amp; Presentation</h3>
                        </div>
                    </div>
                    <p class="about-highlight__text">
                        All accepted and presented papers will be submitted for possible publication in the IEEE Xplore Digital Library,
                        through the IEEE Conference Publication Program (CPP).
                    </p>
                    <p class="about-highlight__record">
                        Conference Record #<?= htmlspecialchars($site['ieee_record'], ENT_QUOTES, 'UTF-8') ?>
                    </p>
                </div>
            </aside>
        </div>
    </section>

    <section class="section section--college pace-college" id="pace">
        <div class="pace-college__split">
            <?php
            $carouselImages = $paceCarouselImages !== [] ? $paceCarouselImages : ['Assets/Images/pacebg.png'];
            ?>
            <div class="pace-college__visual pace-carousel" aria-label="P. A. College of Engineering campus photos">
                <div class="pace-carousel__track">
                    <?php foreach ($carouselImages as $index => $image): ?>
                        <div class="pace-carousel__slide<?= $index === 0 ? ' is-active' : '' ?>">
                            <img
                                src="<?= asset_url($image) ?>"
                                alt="P. A. College of Engineering campus photo <?= $index + 1 ?>"
                                width="960"
                                height="640"
                                loading="<?= $index === 0 ? 'eager' : 'lazy' ?>"
                            >
                        </div>
                    <?php endforeach; ?>
                </div>

                <?php if (count($carouselImages) > 1): ?>
                    <div class="pace-carousel__dots" role="tablist" aria-label="Campus photo navigation">
                        <?php foreach ($carouselImages as $index => $image): ?>
                            <button
                                type="button"
                                class="pace-carousel__dot<?= $index === 0 ? ' is-active' : '' ?>"
                                role="tab"
                                aria-label="Show photo <?= $index + 1 ?>"
                                aria-selected="<?= $index === 0 ? 'true' : 'false' ?>"
                                data-slide="<?= $index ?>"
                            ></button>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="pace-college__body">
                <div class="pace-college__header">
                    <div class="pace-college__logo-wrap">
                        <img
                            src="<?= asset_url('Assets/Images/pacelogo.png') ?>"
                            alt="P. A. College of Engineering logo"
                            class="pace-college__logo"
                            width="80"
                            height="80"
                        >
                    </div>
                    <div class="pace-college__intro">
                        <p class="pace-college__eyebrow">Host Institution</p>
                        <h2 class="pace-college__title"><?= htmlspecialchars($aboutCollege['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                    </div>
                </div>

                <div class="pace-college__content">
                    <?php foreach ($aboutCollege['paragraphs'] as $paragraph): ?>
                        <p><?= htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8') ?></p>
                    <?php endforeach; ?>
                </div>

                <ul class="pace-college__highlights" aria-label="Institution highlights">
                    <li>A NAAC Accredited</li>
                    <li>7 Undergraduate Programs</li>
                    <li>Research &amp; Innovation Focus</li>
                </ul>
            </div>
        </div>
    </section>

    <?php require __DIR__ . '/Components/ImportantDates.php'; ?>

    <section class="section section--sponsors" id="sponsors">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title">Sponsored by</h2>
            </div>

            <div class="sponsors-grid">
                <div class="sponsor-card sponsor-card--logo">
                    <img
                        src="<?= asset_url('Assets/Images/ieee.png') ?>"
                        alt="IEEE"
                        class="sponsor-card__logo"
                        width="200"
                        height="80"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/Components/Footer.php'; ?>
