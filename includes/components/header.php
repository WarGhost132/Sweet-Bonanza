<?php

// Logo configuration
$logo_path = ROOT_PATH . 'assets/images/logo.webp';
$logo_alt = 'Buffalo';
?>

<header class="header d-flex" style="z-index: 10;">
    <div class="container-fluid py-3">
        <div class="header__wrapper d-flex align-items-center justify-content-start">
            <div class="nav-right">
                <a href="<?php echo ROOT_PATH ?>" class="header__logo d-flex gap-2 text-decoration-none">
                    <img src="<?php echo $logo_path; ?>" alt="<?php echo $logo_alt; ?>">
                </a>
            </div>
        </div>
    </div>
</header>