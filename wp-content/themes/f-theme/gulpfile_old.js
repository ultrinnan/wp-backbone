//define libraries
var
    del         = require( 'del' ),
    gulp        = require( 'gulp' ),
    cleanCSS = require('gulp-clean-css'),
    rename      = require( 'gulp-rename' ),
    sass        = require( 'gulp-ruby-sass' ),
    concat      = require('gulp-concat'),
    uglify      = require('gulp-uglify'),
    babel       = require('gulp-babel'),
    minifycss = require('gulp-minify-css'),
    jshint      = require('gulp-jshint');

//default task
gulp.task('default', ['clean', 'watch'], function () {
    'use strict';
    gulp.start('styles');
    gulp.start('scripts');
});

// Check errors in scripts
gulp.task('lint', function() {
    return gulp.src(['js/*.js', '!js/*.min.js'])
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

//make front-end styles
gulp.task('styles', function () {
    'use strict';
    return sass('sass/main.sass', {style: 'expanded'})
        .on('error', function (err) {
            console.error('Error', err.message);
        })
        .pipe(gulp.dest('css/'))
        .pipe(rename({suffix: '.min'}))
        .pipe(minifycss({ removeEmpty: true }))
        .pipe(cleanCSS())
        .pipe(gulp.dest('css/'));
});

// Minify and concat all JS files
gulp.task('scripts', function () {
     return gulp.src(['js/*.js', '!js/*.min.js'])
         .pipe(babel({
             presets: ['env']
         }))
         .pipe(concat('main.min.js'))
         .pipe(uglify())
         .pipe(gulp.dest('js'))
});

//watch changes
gulp.task('watch', function () {
    'use strict';
    gulp.watch('sass/**/*.sass', ['styles']);
    gulp.watch(['js/*.js', '!js/*.min.js'], ['lint', 'scripts']);
});

//clean the directory
gulp.task('clean', function(cb) {
    'use strict';
    del([
        'npm-debug.log',
        '.sass-cache',
        'css/main.css',
        'css/main.css.map',
        'css/main.css.min.map',
        // 'js/main.min.js'
    ], cb);
});

