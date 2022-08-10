let mix = require("laravel-mix");
require("laravel-mix-purgecss");

mix
    //HOME
    .sass("assets/sass/style.scss", "dist/css")
    .js(
        [
            "assets/js/vendors/jquery.js",
            "assets/js/theme/functions/sticky.js",
            "assets/js/theme/functions/menu.js",
            "assets/js/theme/functions/scroll.js",
            "assets/js/theme/functions/gallery.js",
            "assets/js/vendors/jquery.magnific-popup.js",
            "assets/js/theme/functions/toggle.js",
            "assets/js/vendors/owl.carousel.min.js",
            "assets/js/theme/functions/carousel.js",
        ],
        "dist/js/script-home.js"
    )

    //PAGE
    .sass("assets/sass/style-pages.scss", "dist/css")
    .js(
        [
            "assets/js/vendors/jquery.js",
            "assets/js/theme/functions/menu.js",
            "assets/js/theme/functions/sticky.js",
            "assets/js/vendors/sweetalert2.all.js",
            "assets/js/theme/functions/request.js",
        ],
        "dist/js/script-pages.js"
    )

    //ERROR
    .sass("assets/sass/style-error.scss", "dist/css")
    .js(
        [
            "assets/js/vendors/jquery.js",
            "assets/js/theme/functions/menu.js",
            "assets/js/theme/functions/sticky.js",
        ],
        "dist/js/script-error.js"
    )

    .autoload({
        jquery: ["$", "window.jQuery", "jQuery", "jquery"],
    })

    .options({
        processCssUrls: false,
        sourcemaps: false,
    })

    .purgeCss({
        extend: {
            enabled: true,
            content: ["**/*.php", "**/*.js"],
            whitelistPatterns: [/hljs/],
        },
    })

    .browserSync({
        proxy: "localhost:8000",
        files: ["dist/js/*.js", "dist/css/*.css", "dist/images/*", "**/*.php"],
    });
