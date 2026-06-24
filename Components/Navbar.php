<?php

declare(strict_types=1);

$isHome = ($bodyClass ?? '') === 'page-home';
?>
<header class="site-header<?= $isHome ? '' : ' is-scrolled' ?>" id="site-header">
    <nav class="navbar" aria-label="Main navigation">
        <div class="navbar__inner">
            <a href="<?= page_url('index.php') ?>" class="navbar__brand" aria-label="<?= htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8') ?> home">
                <img
                    src="<?= asset_url('Assets/Images/pacenexuslogo_white.png') ?>"
                    alt="<?= htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8') ?> logo"
                    class="navbar__logo navbar__logo--dark"
                >
                <img
                    src="<?= asset_url('Assets/Images/pacenexuslogo_dark.png') ?>"
                    alt=""
                    class="navbar__logo navbar__logo--light"
                    aria-hidden="true"
                >
                <!-- <span class="navbar__brand-text">
                    <span class="navbar__brand-pace">PACE</span><span class="navbar__brand-nexus">NEXUS</span>
                </span> -->
            </a>

            <button
                type="button"
                class="navbar__toggle"
                id="nav-toggle"
                aria-expanded="false"
                aria-controls="nav-menu"
                aria-label="Toggle navigation menu"
            >
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="navbar__menu" id="nav-menu">
                <?php foreach ($navLinks as $link): ?>
                    <a
                        href="<?= page_url($link['href']) ?>"
                        class="navbar__link<?= is_current_page($link['href']) ? ' is-active' : '' ?>"
                    ><?= htmlspecialchars($link['label'], ENT_QUOTES, 'UTF-8') ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </nav>
</header>
