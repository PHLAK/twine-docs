let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');
require('laravel-mix-jigsaw');
require('laravel-mix-purgecss');


mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
    watchOptions: {
        ignored: /node_modules/
    }
});

mix.jigsaw();

mix.js([
    'source/_assets/js/prism.js',
    'source/_assets/js/app.js'
], 'js/app.js');

mix.copy('source/_assets/js/asciinema-player.js', 'source/assets/build/js');

mix.sass('source/_assets/sass/tailwind.scss', 'css/app.css').options({
    processCssUrls: false,
    postCss: [tailwindcss('tailwind.config.js')],
}).version();

mix.purgeCss({
    folders: ['source'],
    whitelist: ['html', 'body', 'code', 'pre'],
    whitelistPatterns: [/^asciinema\-/, /^fa\-/]
});
