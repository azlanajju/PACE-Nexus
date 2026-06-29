<?php

declare(strict_types=1);

require_once __DIR__ . '/config/site.php';

$pageTitle = 'Paper Submission';
$pageDescription = 'Paper Submission Guidelines — PACE IEEE NEXUS - 2027';
$bodyClass = 'page-submission';

require __DIR__ . '/Components/Head.php';
require __DIR__ . '/Components/Navbar.php';
?>

<main class="section section--page">
    <div class="container">
        <div class="page-hero">
            <h1>Paper Submission</h1>
            <p>Instructions for authors submitting to <?= htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8') ?>.</p>
        </div>

        <div class="portal-banner portal-banner--info">
            <div class="portal-banner__icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M10 13a5 5 0 007.07 0l1.41-1.41a5 5 0 00-7.07-7.07L10 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><path d="M14 11a5 5 0 00-7.07 0L5.52 12.41a5 5 0 007.07 7.07L14 19" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
            </div>
            <div class="portal-banner__body">
                <p class="portal-banner__label">Paper Submission Portal</p>
                <p class="portal-banner__text"><strong>Link will be shared soon.</strong></p>
            </div>
        </div>

        <div class="page-panels">
            <section class="info-panel">
                <div class="info-panel__header">
                    <span class="info-panel__icon" aria-hidden="true">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2" stroke="currentColor" stroke-width="1.8"/><rect x="9" y="3" width="6" height="4" rx="1" stroke="currentColor" stroke-width="1.8"/></svg>
                    </span>
                    <h2 class="info-panel__title">Instructions for Authors</h2>
                </div>
                <ol class="step-list">
                    <li class="step-list__item">
                        <span class="step-list__number">1</span>
                        <div class="step-list__content">
                            <?= htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8') ?> will follow a <strong>double-blind review process</strong>. All submitted papers will be judged based on their quality, presentation, and relevance. Authors must preserve anonymity of submission.
                        </div>
                    </li>
                    <li class="step-list__item">
                        <span class="step-list__number">2</span>
                        <div class="step-list__content">
                            Accepted and presented papers will be submitted for possible publication in the IEEE Xplore Digital Library
                            (Conference Record #<?= htmlspecialchars($site['ieee_record'], ENT_QUOTES, 'UTF-8') ?>). Manuscripts must adhere to the standard IEEE two-column format and must not exceed 6 pages.
                        </div>
                    </li>
                    <li class="step-list__item">
                        <span class="step-list__number">3</span>
                        <div class="step-list__content">
                            Typesetting instructions and sample templates:
                            <a href="https://www.ieee.org/conferences/publishing/templates" class="info-link" target="_blank" rel="noopener noreferrer">
                                IEEE Manuscript Templates for Conference Proceedings
                            </a>
                        </div>
                    </li>
                    <li class="step-list__item">
                        <span class="step-list__number">4</span>
                        <div class="step-list__content">
                            The Camera Ready Copy (CRC) of every accepted paper will be subjected to similarity check using IEEE CrossCheck and Prohibited Authors List (PAL).
                        </div>
                    </li>
                </ol>
            </section>

            <section class="info-panel">
                <div class="info-panel__header">
                    <span class="info-panel__icon" aria-hidden="true">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M12 3l7 4v5c0 4.2-2.9 7.8-7 9-4.1-1.2-7-4.8-7-9V7l7-4z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>
                    </span>
                    <h2 class="info-panel__title">Guidelines to Preserve Anonymity</h2>
                </div>
                <ul class="check-list">
                    <li>Remove names and affiliations from the title page of the PDF submitted for review.</li>
                    <li>Remove acknowledgments of identifying names and funding sources from the review copy.</li>
                    <li>Remove project titles or names traceable via web search.</li>
                    <li>Name source files carefully to avoid embedded author metadata.</li>
                    <li>Reference your own prior work in third person, like any other related work.</li>
                    <li>Do not post the same title and abstract on public sites or submit to other venues simultaneously.</li>
                </ul>
            </section>
        </div>

        <div class="alert-callout alert-callout--warning">
            <span class="alert-callout__icon" aria-hidden="true">!</span>
            <p><strong>Paper submission via email is not permitted.</strong> Papers submitted via email will be rejected without review.</p>
        </div>
    </div>
</main>

<?php require __DIR__ . '/Components/Footer.php'; ?>
