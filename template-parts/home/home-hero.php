<section class="hero">
    <div class="container">

        <!-- content -->
        <div class="hero__content text-white-500">

            <!-- header -->
            <header class="hero__content__header mb-2">
                <h2 class="f-6">Procurando por pisos Laminados ou Vinílicos?</h2>
            </header>
            <!-- end of header -->

            <!-- body -->
            <div class="hero__content__body">
                <p class="mb-5">Solução perfeita para ambientes residenciais e comerciais</p>

                <!-- cta -->
                <article class="hero__content__body__cta mb-5">
                    <!-- header -->
                    <header class="hero__content__body__cta__header mb-1">
                        <h3 class="f-4">Nossos Telefones</h3>
                    </header>
                    <!-- end of header -->

                    <!-- content -->
                    <div class="hero__content__body__cta__content">
                        <span>
                            <a rel="nofollow noopener noreferrer" href="tel:<?= CONTACT['phone']['02']; ?>" title="Vamos conversar pelo telefone?" class="link-white-500" target="_blank"><?= CONTACT['phone']['02']; ?></a>
                            |
                            <a rel="nofollow noopener noreferrer" href="tel:<?= CONTACT['whatsapp']['number']['store']; ?>" title="Vamos conversar pelo celular?" class="link-white-500" target="_blank"><?= CONTACT['whatsapp']['number']['store']; ?></a>
                        </span>
                    </div>
                    <!-- end of content -->
                </article>
                <!-- end of cta -->

                <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]["store"]), CONTACT["whatsapp"]["message"]["budget"], '<i class="icon-whatsapp"></i> Solicite um orçamento', 'btn btn-primary-500', 'Solicite já um orçamento'); ?>
            </div>
            <!-- end of body -->

        </div>
        <!-- end of content -->

    </div>
</section>