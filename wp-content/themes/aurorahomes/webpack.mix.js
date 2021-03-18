const mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix.options({
  processCssUrls: false,
  postCss: [
    require('tailwindcss'),
    require('autoprefixer')
  ],
}).purgeCss({
  enabled: mix.inProduction(),
  content: [
    'js/*.js',
    'js/**/*.js',
    'js/*.vue',
    'js/**/*.vue',
    'sass/*.scss',
    'sass/*/**.scss',
    '**/*.php',
    '*.php',
  ],
  css: ['style.css'],
});

mix.webpackConfig({
  devtool: 'source-map'
});

mix.browserSync({
  proxy: 'aurora-homes.test'
});

mix.js('js/app.js', 'app.js');
mix.js('js/front-page.js', 'front-page.js');
mix.js('js/page-contact.js', 'page-contact.js');
mix.js('js/single-project.js', 'single-project.js');
mix.js('js/page-apply.js', 'page-apply.js');
mix.sass('sass/style.scss', 'style.css');
