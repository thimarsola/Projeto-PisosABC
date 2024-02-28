<?php get_header(); ?>

<?php if (!is_page('Contato')) : ?>
    <!-- hero -->
    <?php get_template_part('template-parts/pages/page', 'hero'); ?>
    <!-- end of hero -->
<?php endif; ?>

<?php if (is_page(['Pisos Laminados', 'Pisos Vinílicos', 'Rodapés'])) : ?>
    <!-- categories -->
    <?php get_template_part('template-parts/pages/page', 'categories'); ?>
    <!-- end of categories -->
<?php endif; ?>

<?php if (is_page(['Pisos prontos de Madeira Maciça'])) : ?>
    <!-- categories -->
    <?php get_template_part('template-parts/pages/page', 'floor'); ?>
    <!-- end of categories -->
<?php endif; ?>

<?php if (!is_page(['Pisos Laminados', 'Pisos Vinílicos', 'Pisos prontos de Madeira Maciça', 'Rodapés', 'Papéis de Parede', 'Contato'])) : ?>
    <!-- products -->
    <?php get_template_part('template-parts/pages/page', 'products'); ?>
    <!-- end of products -->
<?php endif; ?>

<?php if (is_page('Papéis de Parede')) : ?>
    <!-- content -->
    <?php get_template_part('template-parts/pages/page', 'content'); ?>
    <!-- end of content -->
<?php endif; ?>

<?php if (!is_page('Contato')) : ?>
    <!-- budget -->
    <?php get_template_part('template-parts/pages/page', 'budget'); ?>
    <!-- end of budget -->

    <!-- information -->
    <?php get_template_part('template-parts/home/home', 'information'); ?>
    <!-- end of information -->
<?php endif; ?>

<?php if (is_page('Contato')) : ?>
    <!-- map -->
    <?php get_template_part('template-parts/pages/page', 'map'); ?>
    <!-- end of map -->

    <!-- contact -->
    <?php get_template_part('template-parts/pages/page', 'contact'); ?>
    <!-- end of contact -->
<?php endif; ?>

<?php get_footer(); ?>