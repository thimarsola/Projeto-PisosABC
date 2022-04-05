<section class="showroom py-7">
    <div class="container">
        <!-- header -->
        <header class="showroom__header mb-7">
            <h2 class="f-7 mb-1">Nosso Showroom</h2>
            <p class="f-bold t-justify">Faça a melhor escolha possível para a sua casa ou escritório.</p>
        </header>
        <!-- end of header -->
    </div>

    <!-- row -->
    <div class="showroom__row grid">
        <?php for ($i = 1; $i < 6; $i++): ?>
            <a href="<?= image('imagem-showroom-' . str_pad($i,2, 0, STR_PAD_LEFT) . '.jpg'); ?>" class="showroom__row__card">
                <?= picture('imagem-showroom-' . str_pad($i,2, 0, STR_PAD_LEFT), 'Conheça a nossa empresa', 'img-fluid'); ?>
            </a>
        <?php endfor; ?>
    </div>
    <!-- end of row -->
</section>