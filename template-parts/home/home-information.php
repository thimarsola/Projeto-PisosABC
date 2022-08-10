<section class="information py-10">
    <!-- header -->
    <header class="information__header d-none">
        <h2>Conheça os nossos diferenciais</h2>
    </header>
    <!-- end of header -->

    <!-- row -->
    <div class="information__row grid no-gap">
        <!-- image -->
        <div class="information__row__image">
            <?= picture('imagem-informacoes', 'Conheça todos os nossos diferenciais', 'img-fluid'); ?>
        </div>
        <!-- end of image -->

        <!-- content -->
        <div class="information__row__content p-8 d-flex ai-center">
            <!-- container -->
            <div class="information__row__content__container">
                <?php

                $jsonInformation = file_get_contents(__DIR__ . '/../../includes/information.json');
                $informationList = json_decode($jsonInformation, true);

                foreach ($informationList['information'] as $item) :
                ?>

                    <!-- card -->
                    <article class="information__row__content__container__card">
                        <!-- icon -->
                        <div class="information__row__content__container__card__icon f-6 text-primary-500 mb-2 l-small">
                            <i class="<?= $item['icon']; ?>"></i>
                        </div>
                        <!-- end of icon -->

                        <!-- header -->
                        <header class="information__row__content__container__card__header mb-1">
                            <h3><?= $item['title']; ?></h3>
                        </header>
                        <!-- end of header -->

                        <!-- body -->
                        <div class="information__row__content__container__card__body">
                            <p class="t-small"><?= $item['description']; ?></p>
                        </div>
                        <!-- end of body -->
                    </article>
                    <!-- end of card -->

                <?php endforeach; ?>
            </div>
            <!-- end of container -->
        </div>
        <!-- end of content -->
    </div>
    <!-- end of row -->
</section>