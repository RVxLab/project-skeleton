const mix = require('laravel-mix');

require('laravel-mix-vue3');

mix
    .vue3('resources/ts/app.ts', 'public/js', {
        typescript: true,
    })
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .webpackConfig({
        resolve: {
            alias: {
                vue: 'vue/dist/vue.esm-bundler.js',
            },
        },
    });
