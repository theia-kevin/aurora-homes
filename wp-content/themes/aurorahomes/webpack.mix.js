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

// mix.browserSync({
//   proxy: 'aurora-homes.test',
//   files: [
//     'resources/js/*.{js,vue}',
//     'resources/js/**/*.{js,vue}',
//     'resources/sass/*.scss',
//     'resources/sass/**/*.scss',
//     '*.php',
//     '**/*.php',
//   ]
// });

mix.setPublicPath('/');

mix.js('js/app.js', 'app.js');
mix.js('js/front-page.js', 'front-page.js');
mix.js('js/page-contact.js', 'page-contact.js');
mix.js('js/single-project.js', 'single-project.js');
mix.js('js/page-apply.js', 'page-apply.js').vue();
mix.sass('sass/style.scss', 'style.css').options({
  postCss: [
    require("@tailwindcss/jit"),
  ],
});

if (mix.inProduction()) {
  mix.version();
}
