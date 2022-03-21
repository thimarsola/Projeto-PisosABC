<?php get_header(); ?>

<?php if(!is_page('Contato')): ?>
    <!-- hero -->
    <?php get_template_part('template-parts/pages/page', 'hero'); ?>
    <!-- end of hero -->
<?php endif; ?>

<?php if(is_page(['Pisos Laminados', 'Pisos Vinílicos', 'Rodapés'])): ?>
    <!-- categories -->
    <?php get_template_part('template-parts/pages/page', 'categories'); ?>
    <!-- end of categories -->
<?php endif; ?>

<?php if(!is_page(['Pisos Laminados', 'Pisos Vinílicos', 'Rodapés', 'Contato'])): ?>
    <!-- products -->
    <?php get_template_part('template-parts/pages/page', 'products'); ?>
    <!-- end of products -->
<?php endif; ?>

<?php if(!is_page('Contato')): ?>
    <!-- budget -->
    <?php get_template_part('template-parts/pages/page', 'budget'); ?>
    <!-- end of budget -->

    <!-- information -->
    <?php get_template_part('template-parts/home/home', 'information'); ?>
    <!-- end of information -->
<?php endif; ?>

<?php get_footer(); ?>
