const mix = require('laravel-mix');
mix.sass("resources/assets/dashboard/css/dashboard.scss"  ,  "public/dashboard/css/dashboard.css").version();
mix.js("resources/assets/dashboard/js/dashboard.js"       ,  "public/dashboard/js/dashboard.js").version();

//mix.sass("resources/assets/guest/css/style.scss"  ,  "public/assets/css/style.css").version();
//mix.js("resources/assets/guest/js/app.js"         ,  "public/assets/js/app.js").version();
