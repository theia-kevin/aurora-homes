const mix = require('laravel-mix');

mix.options({
  processCssUrls: false,
  postCss: [
    require('tailwindcss'),
    require('autoprefixer')
  ],
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
mix.sass('sass/style.scss', 'style.css');
