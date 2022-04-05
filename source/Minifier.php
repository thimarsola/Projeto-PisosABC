<?php
/**
 * CSS
 */
$homeCss = new MatthiasMullie\Minify\CSS();
$homeCss->add(dirname(__DIR__, 1) . "/dist/css/style.css");
$homeCss->minify(dirname(__DIR__, 1) . "/dist/css/style.min.css");

/**
 * CSS - PAGES
 */
$pagesCss = new MatthiasMullie\Minify\CSS();
$pagesCss->add(dirname(__DIR__, 1) . "/dist/css/style-pages.css");
$pagesCss->minify(dirname(__DIR__, 1) . "/dist/css/style-pages.min.css");

/**
 * 404
 */
$errorCss = new MatthiasMullie\Minify\CSS();
$errorCss->add(dirname(__DIR__, 1) . "/dist/css/style-error.css");
$errorCss->minify(dirname(__DIR__, 1) . "/dist/css/style-error.min.css");

/**
 * JS - HOME
 */
$homeJs = new MatthiasMullie\Minify\JS();
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/sticky.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/menu.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/scroll.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/gallery.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.magnific-popup.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/toggle.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/owl.carousel.min.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/carousel.js");
$homeJs->minify(dirname(__DIR__, 1) . "/dist/js/script-home.min.js");

/**
 * JS - PAGES
 */
$pagesJs = new MatthiasMullie\Minify\JS();
$pagesJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$pagesJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/menu.js");
$pagesJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/sticky.js");
$pagesJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/request.js");
$pagesJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/sweetalert2.all.js");
$pagesJs->minify(dirname(__DIR__, 1) . "/dist/js/script-pages.min.js");

/**
 * JS - 404
 */
$errorJs = new MatthiasMullie\Minify\JS();
$errorJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$errorJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/menu.js");
$errorJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/sticky.js");
$errorJs->minify(dirname(__DIR__, 1) . "/dist/js/script-error.min.js");