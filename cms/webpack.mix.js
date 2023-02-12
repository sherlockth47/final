//autoload( {"jquery": [ '$', 'window.jQuery' ] } )を追加

mix.js( 'resources/js/app.js', 'public/js' ).autoload( {
    "jquery": [ '$', 'window.jQuery' ],
} ).postCss( 'resources/css/app.css', 'public/css', [
    require( 'postcss-import' ),
    require( 'tailwindcss' ),
    require( 'autoprefixer' ),
] );