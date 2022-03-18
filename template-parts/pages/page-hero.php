<div class="page__hero">
    <?php
    $image = sanitize_title(get_the_title());
    
    echo picture('background-' . $image, 'Conheça mais sobre: ' . get_the_title(), 'img-fluid');
    ?>
</div>