const mix = require('laravel-mix');
require('./Modules/User/webpack.mix.js');
// mix.js('./../Modules/User/resources/js/app.js', 'public/js')
// mix.js(path.resolve(__dirname, 'Modules/User/resources/js/app.js'), 'public/js/Modules/user.js').sourceMaps();
mix.js('resources/js/app.js', 'public/js');
