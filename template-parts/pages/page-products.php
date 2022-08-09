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
            }elseif (is_page('Piso Vinílico Eucafloor')){
                $jsonProducts = file_get_contents(__DIR__ . '/../../includes/vinyl.json');
                $productsList = json_decode($jsonProducts, true);
                $products = $productsList['eucafloor'];
            }elseif (is_page('Piso Vinílico Tarkett')){
                $jsonProducts = file_get_contents(__DIR__ . '/../../includes/vinyl.json');
                $productsList = json_decode($jsonProducts, true);
                $products = $productsList['tarkett'];
            }elseif (is_page('Rodapé Durafloor')){
                $jsonProducts = file_get_contents(__DIR__ . '/../../includes/baseboard.json');
                $productsList = json_decode($jsonProducts, true);
                $products = $productsList['durafloor'];
            }elseif (is_page('Rodapé Eucafloor')){
                $jsonProducts = file_get_contents(__DIR__ . '/../../includes/baseboard.json');
                $productsList = json_decode($jsonProducts, true);
                $products = $productsList['eucafloor'];
            }elseif (is_page('Rodapé Madebene')){
                $jsonProducts = file_get_contents(__DIR__ . '/../../includes/baseboard.json');
                $productsList = json_decode($jsonProducts, true);
                $products = $productsList['madebene'];
            }elseif (is_page('Rodapé Santa Luzia')){
                $jsonProducts = file_get_contents(__DIR__ . '/../../includes/baseboard.json');
                $productsList = json_decode($jsonProducts, true);
                $products = $productsList['santa-luzia'];
            }elseif (is_page('Rodapé Santa Luzia')){
                $jsonProducts = file_get_contents(__DIR__ . '/../../includes/baseboard.json');
                $productsList = json_decode($jsonProducts, true);
                $products = $productsList['santa-luzia'];
            }elseif (is_page('Persianas')){
                $jsonProducts = file_get_contents(__DIR__ . '/../../includes/shutter.json');
                $productsList = json_decode($jsonProducts, true);
                $products = $productsList['shutter'];
            }else{
                $products = null;
            }

            if(!$products == null):
                foreach ($products as $product):
                    ?>

                    <!-- card -->
                    <section class="page__products__row__card">

                        <!-- header -->
                        <header class="page__products__row__card__header <?= ($product['description'] == null ? 'mb-7' : 'mb-3'); ?>">
                            <h2 class="f-7"><?= $product['title']; ?></h2>
                            <?php if($product['thickness'] != null): ?>
                                <p class="f-3">Espessura: <?= $product['thickness']; ?></p>
                            <?php endif; ?>
                            <div class="line"></div>
                        </header>
                        <!-- end of header -->

                        <?php if($product['description'] != null): ?>
                            <!-- wrapper -->
                            <div class="page__products__row__card__wrapper mb-7 t-justify">
                                <?php foreach ($product['description'] as $item): ?>
                                    <p><?= $item; ?></p>
                                <?php endforeach; ?>
                            </div>
                            <!-- end of wrapper -->
                        <?php endif; ?>

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