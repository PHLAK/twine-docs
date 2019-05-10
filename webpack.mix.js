let mix = require('laravel-mix');
let build = require('./tasks/build.js');
let tailwindcss = require('tailwindcss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss', '!source/**/_tmp/*']),
    ]
});

mix.js([
    'source/_assets/js/prism.js',
    'source/_assets/js/app.js'
], 'js/app.js');

mix.copy('source/_assets/js/asciinema-player.js', 'source/assets/build/js');

mix.sass('source/_assets/sass/tailwind.scss', 'css/app.css').options({
    processCssUrls: false,
    postCss: [ tailwindcss('./tailwind.config.js') ],
}).version();
