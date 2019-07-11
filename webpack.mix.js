let mix = require('laravel-mix');
const glob = require('glob');
const path = require('path');
const sassPath = path.join(__dirname, 'resources/sass/' + '**/**.scss');
const sassFiles = glob.sync(sassPath);

// mix;
// /*
//  |--------------------------------------------------------------------------
//  | Mix Asset Management
//  |--------------------------------------------------------------------------
//  |
//  | Mix provides a clean, fluent API for defining some Webpack build steps
//  | for your Laravel application. By default, we are compiling the Sass
//  | file for the application as well as bundling up all the JS files.
//  |
//  */

mix.browserSync({
    proxy: 'localhost:8000',
    notify: false,
})
    .js('resources/js/app.js', 'public/js')
    .extract(['jquery', 'bootstrap', `axios`]);


sassFiles.forEach(file => {
    let arr = file.split('/');
    let fileName = arr.pop();
    if (fileName && fileName[0] == '_') return;
    let begin = arr.indexOf('sass');
    arr.splice(0, begin + 1);
    let toFolder = 'public/css/' + arr.join('/');
    mix = mix.sass(file, toFolder).options({
        processCssUrls: false
    });
});
