const gulp = require('gulp');
const babel = require('gulp-babel');
const sass = require('gulp-ruby-sass');
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const autoprefixer = require('gulp-autoprefixer');
const jshint      = require('gulp-jshint');
const del         = require( 'del' );
const rename      = require( 'gulp-rename' );

//default task
gulp.task('default', ['clean', 'watch'], () => {
    'use strict';
    gulp.start('styles');
    gulp.start('scripts');
});

// Minify and concat all JS files
gulp.task('scripts', () => {
    return gulp.src(['js/*.js', '!js/*.min.js', '!js/admin_scripts.js'])
        .pipe(babel({
            presets: ['env']
        }))
        .pipe(concat('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js'))
});

// Check errors in scripts
gulp.task('lint', () => {
    return gulp.src(['js/*.js', '!js/*.min.js'])
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

//make front-end styles
gulp.task('styles', () => {
    'use strict';
    return sass('sass/main.sass', {style: 'compressed'})
        .on('error', (err) => {
            console.error('Error', err.message);
        })
        .pipe(gulp.dest('css/'))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(rename({suffix: '.min'}))
        .pipe(cleanCSS())
        .pipe(gulp.dest('css/'));
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