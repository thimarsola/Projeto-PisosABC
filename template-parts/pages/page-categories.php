<section class="page__categories py-10">
    <div class="container">

        <!-- header -->
        <header class="page__categories__header mb-7">
            <?php
            if(is_page('Pisos Laminados')){
                $title = "Conheça as nossas linhas de Pisos Laminados";
                $description = "Trabalhamos com todas as linhas de pisos laminados Eucafloor e Duratex";
            }elseif (is_page('Pisos Vinílicos')){
                $title = "Conheça as nossas linhas de Pisos Vinílicos (LVT)";
                $description = "Trabalhamos com todas as linhas de Pisos Vinílicos Eucafloor, Duratex e Tarkett";
            }elseif (is_page('Rodapés')){
                $title = "Conheça as nossas linhas de Rodapés";
                $description = "Trabalhamos com todas as linhas de Rodapés Eucafloor, Duratex, Madebene e Santa Luzia";
            }
            ?>

            <h2 class="f-7 mb-1"><?= $title; ?></h2>
            <p class="t-justify"><?= $description; ?></p>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="page__page__categories__row grid">

            <?php
            if(is_page('Pisos Laminados')){
                $categories = [
                    "Piso Laminado Durafloor",
                    "Piso Laminado Eucafloor"
                ];
            }elseif (is_page('Pisos Vinílicos')){
                $categories = [
                    "Piso Vinílico Durafloor",
                    "Piso Vinílico Eucafloor",
                    "Piso Vinílico Tarkett"
                ];
            }elseif (is_page('Rodapés')){
                $categories = [
                    "Rodapé Durafloor",
                    "Rodapé Eucafloor",
                    "Rodapé Madebene",
                    "Rodapé Santa Luzia"
                ];
            }

            foreach ($categories as $category):
                ?>

                <!-- card -->
                <article class="page__categories__row__card">
                    <a href="<?= get_the_permalink(get_page_by_title($category));  ?>" title="Conheça essa nossa linha de produtos">
                        <?= picture(sanitize_title($category), 'Conheça essa nossa linha de produtos', 'img-fluid'); ?>

                        <!-- header -->
                        <header class="page__categories__row__card__header f-3">
                            <h3><?= $category; ?></h3>
                        </header>
                        <!-- end of header -->
                    </a>
                </article>
                <!-- end of card -->

            <?php endforeach; ?>
        </div>
        <!-- end of row -->
    </div>
</section>