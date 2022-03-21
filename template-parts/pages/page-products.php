<div class="page__products py-10">
    <div class="container">
        <!-- row -->
        <div class="page__products__row grid">

            <?php
            if(is_page('Piso Laminado Durafloor')){
                $jsonProducts = file_get_contents(__DIR__ . '/../../includes/laminate.json');
                $productsList = json_decode($jsonProducts, true);
                $products = $productsList['durafloor'];
            }elseif (is_page('Piso Laminado Eucafloor')){
                $jsonProducts = file_get_contents(__DIR__ . '/../../includes/laminate.json');
                $productsList = json_decode($jsonProducts, true);
                $products = $productsList['eucafloor'];
            }elseif (is_page('Piso Vinílico Durafloor')){
                $jsonProducts = file_get_contents(__DIR__ . '/../../includes/vinyl.json');
                $productsList = json_decode($jsonProducts, true);
                $products = $productsList['durafloor'];
            }else{
                $products = null;
            }

            if(!$products == null):
                foreach ($products as $product):
                    ?>

                    <!-- card -->
                    <section class="page__products__row__card">

                        <!-- header -->
                        <header class="page__products__row__card__header mb-3">
                            <h2 class="f-7"><?= $product['title']; ?></h2>
                            <?php if($product['thickness'] != null): ?>
                                <p class="f-3">Espessura: <?= $product['thickness']; ?></p>
                            <?php endif; ?>
                            <div class="line"></div>
                        </header>
                        <!-- end of header -->

                        <!-- wrapper -->
                        <div class="page__products__row__card__wrapper mb-7 t-justify">
                            <?php foreach ($product['description'] as $item): ?>
                                <p><?= $item; ?></p>
                            <?php endforeach; ?>
                        </div>
                        <!-- end of wrapper -->

                        <!-- body -->
                        <div class="page__products__row__card__body grid">
                            <?php foreach ($product['lines'] as $line): ?>

                                <!-- line -->
                                <article class="page__products__row__card__body__line">
                                    <!-- image -->
                                    <div class="page__products__row__card__body__line__image">
                                        <?php

                                        $image = sanitize_title($product['title']) . '-' . sanitize_title($line);

                                        echo picture($image, 'Conheça a ' . $product['title'] . ' ' .  $line, 'img-fluid');
                                        ?>
                                    </div>
                                    <!-- end of image -->

                                    <!-- header -->
                                    <header class="page__products__row__card__body__line__header mt-2 t-center">
                                        <h3><?= $line; ?></h3>
                                    </header>
                                    <!-- end of header -->
                                </article>
                                <!-- end of line -->

                            <?php endforeach; ?>
                        </div>
                        <!-- end of body -->

                    </section>
                    <!-- end of card -->


                <?php
                endforeach;
            endif;
            ?>
        </div>
        <!-- end of row -->
    </div>
</div>