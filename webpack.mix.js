const mix = require('laravel-mix');

mix
    // O resultado da compilação do app.scss vai para a pasta public/css.
    .sass('resources/css/app.scss', 'public/css') 
    // O resultado da compilação do app.js vai para a pasta public/js.
    // .js('resources/js/app.js', 'public/js'); // Este código não será mais necessário.
