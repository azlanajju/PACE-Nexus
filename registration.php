<?php

declare(strict_types=1);

require_once __DIR__ . '/config/site.php';

$pageTitle = 'Registration';
$pageDescription = 'Registration Fees — PACE IEEE NEXUS - 2027';
$bodyClass = 'page-registration';

require __DIR__ . '/Components/Head.php';
require __DIR__ . '/Components/Navbar.php';
?>

<main class="section section--page">
    <div class="container">
        <div class="page-hero">
            <h1>Registration</h1>
            <p>Registration fees and policies for conference participants.</p>
        </div>

        <div class="portal-banner portal-banner--info">
            <div class="portal-banner__icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><rect x="4" y="4" width="16" height="16" rx="2" stroke="currentColor" stroke-width="1.8"/><path d="M8 10h8M8 14h5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
            </div>
            <div class="portal-banner__body">
                <p class="portal-banner__label">Online Registration</p>
                <p class="portal-banner__text"><strong>Registration link will be updated soon.</strong></p>
            </div>
        </div>

        <section class="info-panel">
            <div class="info-panel__header">
                <span class="info-panel__icon" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M9 11l3 3L22 4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>
                </span>
                <h2 class="info-panel__title">Registration Policies</h2>
            </div>
            <div class="policy-grid">
                <?php foreach ($registrationPolicies as $index => $policy): ?>
                    <div class="policy-card">
                        <span class="policy-card__number"><?= $index + 1 ?></span>
                        <p><?= htmlspecialchars($policy, ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="info-panel">
            <div class="info-panel__header">
                <span class="info-panel__icon" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7H14a3.5 3.5 0 010 7H6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
                <h2 class="info-panel__title">Registration Fees</h2>
            </div>
            <div class="fee-table-wrap">
                <table class="fee-table">
                    <thead>
                        <tr>
                            <th scope="col">Registration Type</th>
                            <th scope="col">Indian Author</th>
                            <th scope="col">Foreign Author</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($registrationFees as $fee): ?>
                            <tr>
                                <td data-label="Registration Type"><?= htmlspecialchars($fee['type'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td data-label="Indian Author"><span class="fee-table__amount"><?= htmlspecialchars($fee['indian'], ENT_QUOTES, 'UTF-8') ?></span></td>
                                <td data-label="Foreign Author"><span class="fee-table__amount"><?= htmlspecialchars($fee['foreign'], ENT_QUOTES, 'UTF-8') ?></span></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</main>

<?php require __DIR__ . '/Components/Footer.php'; ?>
