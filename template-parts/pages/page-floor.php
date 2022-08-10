<?php
$categories = [
    "Cumaru Rosa Mel",
    "Tauari",
    "Grapia",
    "Ipê Coffe Brown"
];
?>

<section class="page__floor py-10">
    <div class="container">

        <!-- header -->
        <header class="page__floor__header mb-7">
            <h2 class="f-7 mb-1">Conheça os nossos Pisos prontos de Madeira Maciça</h2>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="page__floor__row grid">

            <?php foreach ($categories as $category) : ?>

                <!-- card -->
                <article class="page__floor__row__card">
                    <?= picture(sanitize_title($category), 'Conheça essa nossa linha de produtos', 'img-fluid'); ?>

                    <!-- header -->
                    <header class="page__floor__row__card__header f-3">
                        <h3><?= $category; ?></h3>
                    </header>
                    <!-- end of header -->
                </article>
                <!-- end of card -->

            <?php endforeach; ?>
        </div>
        <!-- end of row -->
    </div>
</section>