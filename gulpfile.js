'use strict';

//
// Project variables
//
var project                 = 'Bare Naked', // Project Name.
    projectURL              = 'barenaked.dev'; // Project URL. Could be something like localhost:8888.


//
// Project directories
//
var styleWatchFiles         = 'page-objects/**/*.scss', // Path to all *.scss files inside css folder and inside them.
    customJSWatchFiles      = 'inc/js/*.js', // Path to all custom JS files.
    projectPHPWatchFiles    = '**/*.php'; // Path to all PHP files.


//
// Dependencies and methods
//
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    importer = require('node-sass-globbing'),
    plumber = require('gulp-plumber'),
    browserSync = require('browser-sync').create(),
    reload = browserSync.reload; // For manual browser reload.


//
// Browserlist https://github.com/ai/browserslist
//
const AUTOPREFIXER_BROWSERS = [
    'last 2 version',
    '> 1%',
    'ie >= 11',
    'ff >= 30',
    'chrome >= 34',
    'safari >= 7',
    'opera >= 23',
    'ios >= 7',
    'android >= 4'
  ];


//
// Sass tools
//
var sass_config = {
  importer: importer,
  includePaths: [
    'node_modules/breakpoint-sass/stylesheets/',
    'node_modules/modularscale-sass/stylesheets',
    'node_modules/compass-mixins/lib/',
    'node_modules/susy/sass'
  ]
};


//
// BrowserSync configuration
//
gulp.task( 'browser-sync', function() {
  browserSync.init( {
      proxy: projectURL,
      open: true,
      injectChanges: true,
      notify: false
  } );
});


//
//  scss transpilation and injection
//
gulp.task('sass', function () {
  gulp.src(styleWatchFiles)
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass(sass_config).on('error', sass.logError))
    .pipe(autoprefixer( AUTOPREFIXER_BROWSERS ))
    .pipe(sourcemaps.write('', {addComment: true}))
    .pipe(gulp.dest(''))
    .pipe(browserSync.stream());
});


//
// Watch files
//
gulp.task( 'default', ['browser-sync'], function () {
 gulp.watch( projectPHPWatchFiles, reload );
 gulp.watch( styleWatchFiles, [ 'sass' ] );
 gulp.watch( customJSWatchFiles, reload );
});
