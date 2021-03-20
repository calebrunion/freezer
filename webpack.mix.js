const mix = require('laravel-mix');

mix.postCss('resources/css/app.css', 'public/css/app.min.css').options({
  postCss: [
	require('@tailwindcss/jit'),
    require('autoprefixer'),
  ],
});