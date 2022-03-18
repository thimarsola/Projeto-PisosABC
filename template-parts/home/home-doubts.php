<section class="doubts">
    <!-- row -->
    <div class="doubts__row grid no-gap">

        <!-- container -->
        <div class="doubts__row__container py-10">

            <!-- content -->
            <div class="doubts__row__container__content bg-gray-300 px-5 py-10">

                <!-- header -->
                <header class="doubts__row__container__content__header">
                    <h2 class="f-7">Dúvidas Frequentes</h2>
                </header>
                <!-- end of header -->

                <!-- wrapper -->
                <div class="doubts__row__container__content__wrapper mt-5">
                    <?php

                    $jsonDoubts = file_get_contents(__DIR__ . '/../../includes/doubts.json');
                    $doubtsList = json_decode($jsonDoubts, true);

                    foreach ($doubtsList['doubts'] as $doubt):
                        ?>

                        <!-- card -->
                        <article class="doubts__row__container__content__wrapper__card">

                            <!-- header -->
                            <header class="doubts__row__container__content__wrapper__card__header p-2 bg-white-500 d-flex jc-between ai-center gp-1">
                                <h3><?= $doubt['doubt']; ?></h3>
                                <span class="f-4 l-small">+</span>
                            </header>
                            <!-- end of header -->

                            <!-- body -->
                            <div class="doubts__row__container__content__wrapper__card__body p-2 t-justify">
                                <?php foreach ($doubt['answer'] as $item): ?>

                                    <p><?= $item; ?></p>

                                <?php endforeach; ?>
                            </div>
                            <!-- end of body -->

                        </article>
                        <!-- end of card -->

                    <?php endforeach; ?>
                </div>
                <!-- end of wrapper -->

            </div>
            <!-- end of content -->

        </div>
        <!-- end of container -->

        <!-- image -->
        <div class="doubts__row__image"></div>
        <!-- end of image -->

    </div>
    <!-- end of row -->
</section>