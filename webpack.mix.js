const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .postCss("node_modules/bootstrap/dist/css/bootstrap.css", "public/css/bootstrap.css")
    .postCss("node_modules/bootstrap-icons/font/bootstrap-icons.css", "public/css/bootstrap-icons.css")
    .postCss("node_modules/@fortawesome/fontawesome-free/css/all.css", "public/css/font-awesome.css")
    .postCss("resources/css/app.css", "public/css/app.css")
    .js("node_modules/bootstrap/dist/js/bootstrap.bundle.js", "public/js/bootstrap.js")
    .js("node_modules/@fortawesome/fontawesome-free/js/all.js", "public/js/font-awesome.js")
    .js("resources/js/app.js", "public/js/app.js")
    .options({
        processCssUrls: true
    })
    .version();
