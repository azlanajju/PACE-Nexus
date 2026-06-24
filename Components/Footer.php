<?php

declare(strict_types=1);

$footerAbout = 'PACE NEXUS, initiated by P. A. College of Engineering, unites academia, industry, and research through international conferences. The conference focuses on next-generation technologies for energy, sustainability, and smart systems.';
?>
<footer class="site-footer">
    <div class="container footer__grid">
        <section class="footer__block footer__block--brand">
            <h2 class="footer__brand" aria-label="<?= htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8') ?>">
                <span class="footer__brand-pace">PACE</span><span class="footer__brand-nexus">NEXUS</span>
            </h2>
            <p class="footer__about"><?= htmlspecialchars($footerAbout, ENT_QUOTES, 'UTF-8') ?></p>
            <div class="footer__social" aria-label="Social media links">
                <?php foreach ($footerSocial as $social): ?>
                    <a
                        href="<?= htmlspecialchars($social['href'], ENT_QUOTES, 'UTF-8') ?>"
                        class="footer__social-link"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="<?= htmlspecialchars($social['label'], ENT_QUOTES, 'UTF-8') ?>"
                    >
                        <?php if ($social['icon'] === 'facebook'): ?>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        <?php elseif ($social['icon'] === 'twitter'): ?>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        <?php elseif ($social['icon'] === 'instagram'): ?>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        <?php else: ?>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        <?php endif; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="footer__block footer__block--contacts">
            <h2 class="footer__heading">Contacts</h2>
            <ul class="footer__contact-list">
                <li class="footer__contact-item">
                    <span class="footer__contact-icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M12 21s7-4.35 7-10a7 7 0 10-14 0c0 5.65 7 10 7 10z" stroke="currentColor" stroke-width="1.8"/><circle cx="12" cy="11" r="2.5" stroke="currentColor" stroke-width="1.8"/></svg>
                    </span>
                    <span><?= htmlspecialchars($site['venue'], ENT_QUOTES, 'UTF-8') ?></span>
                </li>
                <?php if (!empty($site['phones'])): ?>
                    <li class="footer__contact-item">
                        <span class="footer__contact-icon" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M5 4h3l2 5-2.5 1.5a11 11 0 005 5L14 13l5 2v3a2 2 0 01-2 2A15 15 0 013 6a2 2 0 012-2z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>
                        </span>
                        <span>
                            <?php foreach ($site['phones'] as $i => $phone): ?>
                                <?php if ($i > 0): ?><br><?php endif; ?>
                                <a href="tel:<?= htmlspecialchars(preg_replace('/\s+/', '', $phone), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') ?></a>
                            <?php endforeach; ?>
                        </span>
                    </li>
                <?php endif; ?>
                <li class="footer__contact-item">
                    <span class="footer__contact-icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.8"/><path d="M3 7l9 6 9-6" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>
                    </span>
                    <a href="mailto:<?= htmlspecialchars($site['email'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($site['email'], ENT_QUOTES, 'UTF-8') ?></a>
                </li>
            </ul>
        </section>

        <section class="footer__block footer__block--pace-group">
            <h2 class="footer__heading">About Pace Group</h2>
            <p class="footer__pace-desc"><?= htmlspecialchars($paceGroup['description'], ENT_QUOTES, 'UTF-8') ?></p>
            <a
                href="<?= htmlspecialchars($paceGroup['url'], ENT_QUOTES, 'UTF-8') ?>"
                class="footer__pace-logo-link"
                target="_blank"
                rel="noopener noreferrer"
            >
                <img
                    src="<?= asset_url($paceGroup['logo']) ?>"
                    alt="<?= htmlspecialchars($paceGroup['name'], ENT_QUOTES, 'UTF-8') ?> logo"
                    class="footer__pace-logo"
                    width="180"
                    height="80"
                    loading="lazy"
                >
            </a>
        </section>
    </div>

    <div class="footer__bottom">
        <div class="container footer__bottom-inner">
            <p>Copyright &copy; <?= date('Y') ?> <?= htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8') ?>. All Rights Reserved.</p>
            <p class="footer__credit">P. A. College of Engineering, Mangaluru</p>
        </div>
    </div>
</footer>

<script src="<?= asset_url('Assets/js/main.js') ?>"></script>
</body>
</html>
