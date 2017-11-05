'use strict';

//
// Project variables
//

var project                 = 'Bare Naked', // Project Name.
    projectURL              = 'barenaked.dev', // Project URL. Could be something like localhost:8888.
    productURL              = './'; // Theme URL. Leave it like it is, since our gulpfile.js lives in the root

var styleWatchFiles         = 'sass/**/*.scss', // Path to all *.scss files inside css folder and inside them.
    styleSRC                = '*.css',
    customJSWatchFiles      = 'js/*.js', // Path to all custom JS files.
    projectPHPWatchFiles    = '**/*.php'; // Path to all PHP files.

//
//


//
// Dependencies
//

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    importer = require('node-sass-globbing'),
    plumber = require('gulp-plumber'),
    browserSync = require('browser-sync').create(),
    cssmin = require('gulp-cssmin'),
    uncss = require('gulp-uncss'),
    stripCssComments = require('gulp-strip-css-comments'),
    uglify = require('gulp-uglify'),
    cleanCSS = require('gulp-clean-css');

var reload = browserSync.reload; // For manual browser reload.

// Browserlist https        ://github.com/ai/browserslist
const AUTOPREFIXER_BROWSERS = [
    'last 2 version',
    '> 1%',
    'ie >= 11',
    'ff >= 30',
    'chrome >= 34',
    'safari >= 7',
    'opera >= 23',
    'ios >= 7',
    'android >= 4',
    'bb >= 10'
  ];

var sass_config = {
  importer: importer,
  includePaths: [
    'node_modules/breakpoint-sass/stylesheets/',
    'node_modules/modularscale-sass/stylesheets',
    'node_modules/compass-mixins/lib/'
  ]
};

gulp.task( 'browser-sync', function() {
  browserSync.init( {

    proxy: projectURL,

    open: true,

    injectChanges: true,

    notify: false

  } );
});

gulp.task('sass', function () {
  gulp.src('./sass/**/*.scss')
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass(sass_config).on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 version']
    }))
    .pipe(sourcemaps.write('./', {addComment: true}))
    // .pipe(stripCssComments({preserve: true}))
    // .pipe(gulp.dest('./'))
    // .pipe(uncss({
    //       html: ['./html/**/*.html']
    //   }))
    // .pipe(cssmin())
    .pipe(gulp.dest('./'));
});


gulp.task('styles', function () {
   gulp.src( styleSRC )
   .on('error', console.error.bind(console))
  //  .pipe( autoprefixer( AUTOPREFIXER_BROWSERS ) )
   .pipe( browserSync.stream() )// Reloads style.min.css if that is enqueued.
});

gulp.task( 'default', ['browser-sync'], function () {
 gulp.watch( projectPHPWatchFiles, reload ); // Reload on PHP file changes.
 gulp.watch( styleWatchFiles, [ 'sass' ] ); // Reload on SCSS file changes.
 gulp.watch( styleSRC, [ 'styles' ] );
 gulp.watch( customJSWatchFiles, reload ); // Reload on customJS file changes.
});

gulp.task('minify-css', function() {
  return gulp.src('style.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('./'));
});
