const path = require('path');
const mix = require('laravel-mix');

// mix.js('./../Modules/User/resources/js/app.js', 'public/js')
// mix.js(path.resolve(__dirname, 'Modules/User/resources/js/app.js'), 'public/js/Modules/user.js').sourceMaps();
mix.js([
    path.resolve(__dirname, 'resources/js/app.js'),
    // './../Modules/User/resources/js/app.js'
],'public/js/modules/admin')
    .vue({ version: 3 })
    .sourceMaps();
