<div class="footer__content bg-gray-500 text-white-500 py-6">
    <div class="container">
        <!-- row -->
        <div class="footer__content__row grid">

            <!-- brand -->
            <div class="footer__content__row__brand">
                <?= picture('logo-rodape', 'Logo ' . SITE['name'], 'mb-3', 'png'); ?>

                <p>As melhores soluções em pisos laminados, pisos vinílicos e cortinas você encontra aqui na Pisos ABC.</p>
            </div>
            <!-- end of brand -->

            <!-- products -->
            <div class="footer__content__row__products">

                <!-- header -->
                <div class="footer__content__row__products__header mb-3">
                    <h2>Produtos</h2>
                </div>
                <!-- end of header -->

                <?php wp_nav_menu(array('theme_location' => 'products')); ?>
            </div>
            <!-- end of products -->

            <!-- menu -->
            <div class="footer__content__row__menu">
                <!-- header -->
                <div class="footer__content__row__menu__header mb-3">
                    <h2>Menu</h2>
                </div>
                <!-- end of header -->

                <?php wp_nav_menu(array('theme_location' => 'menu')); ?>
            </div>
            <!-- end of menu -->

            <!-- contact -->
            <div class="footer__content__row__contact">
                <!-- header -->
                <div class="footer__content__row__contact__header mb-3">
                    <h2>Contatos</h2>
                </div>
                <!-- end of header -->

                <ul class="l-small">
                    <li>
                        <i class="icon-phone"></i>
                        <span>
                            <a rel="nofollow noopener noreferrer" href="tel:<?= formatPhone(CONTACT['phone']['01']); ?>" title="Vamos conversar pelo telefone?" class="link-white-500"><?= CONTACT['phone']['01']; ?></a>
                            |
                            <a rel="nofollow noopener noreferrer" href="tel:<?= formatPhone(CONTACT['phone']['02']); ?>" title="Vamos conversar pelo telefone?" class="link-white-500"><?= CONTACT['phone']['02']; ?></a>
                        </span>
                    </li>
                    <li>
                        <i class="icon-whatsapp"></i>
                        <?php
                        $number = (is_page(['Persianas', 'Papel de Parede']) ? CONTACT["whatsapp"]["number"]["paper"] : CONTACT["whatsapp"]["number"]["store"]);

                        echo whatsapp(formatPhone($number), CONTACT["whatsapp"]["message"]["generic"], $number, 'link-white-500');
                        ?>
                    </li>
                    <li>
                        <i class="icon-mail"></i>
                        <a rel="nofollow noopener noreferrer" href="mailto:<?= CONTACT['mail']; ?>" class="link-white-500" target="_blank"><?= CONTACT['mail']; ?></a>
                    </li>
                    <li>
                        <i class="icon-map-marker"></i>
                        <a rel="nofollow noopener noreferrer" href="<?= CONTACT['addressLink']; ?>" class="link-white-500" target="_blank"><?= CONTACT['address']; ?></a>
                    </li>
                    <li>
                        <i class="icon-clock"></i>
                        <span>
                            Segunda a Sexta: 8h às 18h
                            <br>
                            Sábados: 8h às 14h
                          </span>
                    </li>
                </ul>
            </div>
            <!-- end of contact -->

        </div>
        <!-- end of row -->
    </div>
</div>