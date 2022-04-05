<header class="header">
    <div class="container">

        <!-- content -->
        <div class="header__content">

            <!-- brand -->
            <div class="header__content__brand">
                <a href="<?= (is_home() ? '#home' : get_home_url()); ?>" title="<?= SITE["name"]; ?>">
                    <img src="<?= image('logo-topo.jpg'); ?>" alt="Logo <?= SITE["name"]; ?>">
                </a>
            </div>
            <!-- end of brand -->

            <!-- navbar -->
            <div class="header__content__navbar">
                <nav class="header__content__navbar__menu">
                    <!-- header -->
                    <div class="header__content__navbar__menu__header d-none">
                        <h2>Menu de navegação</h2>
                    </div>
                    <!-- end of header -->
                    <?php wp_nav_menu(array('theme_location' => 'menu')); ?>
                </nav>
            </div>
            <!-- end of navbar -->

            <!-- toggle -->
            <div class="header__content__toggle d-none bg-dark-blue-500">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- end of toggle -->
        </div>
        <!-- end of content -->

    </div>
</header>