const mix = require('laravel-mix');

// JavaScript and CSS Compilation
mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
       //
   ]);

// Enable versioning in production
if (mix.inProduction()) {
    mix.version();
}
