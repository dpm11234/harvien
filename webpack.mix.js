let mix                 = require('laravel-mix');
const glob              = require('glob');
const path              = require('path');

const sassPath  = path.join(__dirname, 'resources/sass/' + '**/**.scss');
const jsPath    = path.join(__dirname, 'resources/js/' + '**/**.js');
const sassFiles = glob.sync(sassPath);
const jsFiles   = glob.sync(jsPath);
const excludeJS = ['bootstrap'];

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

mix = mix.browserSync({
    proxy: '127.0.0.1:8000',
    notify: false,
})
.js('resources/js/app.js', 'public/js')
.copy('node_modules/font-awesome/fonts', 'public/fonts');;
jsFiles.forEach(file => {
    let arr = file.split('/');
    arr.pop();

    let begin = arr.indexOf('js');
    arr.splice(0, begin + 1);
    let toFolder = 'public/js/' + arr.join('/');
    for (let i = 0; i < excludeJS.length; i++) {
        const fileName = excludeJS[i];
        toFolder.includes(fileName);
        return;
    }
    mix = mix.js(file, toFolder);
});

sassFiles.forEach(file => {
    let arr = file.split('/');
    var fileName = arr.pop();

    if(fileName && fileName[0] == '_') return;

    let begin = arr.indexOf('sass');
    arr.splice(0, begin + 1);
    let toFolder = 'public/css/' + arr.join('/');
    mix = mix.sass(file, toFolder);
});

