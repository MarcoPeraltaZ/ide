let mix = require('laravel-mix');

mix.sass('assets/scss/ide-patrimonio.scss', './assets/css/');
mix.options({
  processCssUrls: false
});
