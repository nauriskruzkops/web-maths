var Encore = require('@symfony/webpack-encore');
Encore
    .setOutputPath('public/assets/')
    .setPublicPath('/assets')
    .addEntry('app', './assets/js/app.js')
    .addStyleEntry('style', ['./assets/css/style.css'])
    .enableSingleRuntimeChunk()
;
module.exports = Encore.getWebpackConfig();