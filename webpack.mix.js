let mix = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
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

mix = mix.webpackConfig({
    plugins: [
        new BrowserSyncPlugin({
            files: [
                'app/**/*',
                'public/**/*',
                'resources/views/**/*',
                'routes/**/*'
            ],
            notify: true,
        })
    ]
}).js('resources/js/app.js', 'public/js');


sassFiles.forEach(file => {
    let arr = file.split('/');
    arr.pop();
    let begin = arr.indexOf('sass');
    arr.splice(0, begin + 1);
    let toFolder = 'public/css/' + arr.join('/');
    mix = mix.sass(file, toFolder);
})
