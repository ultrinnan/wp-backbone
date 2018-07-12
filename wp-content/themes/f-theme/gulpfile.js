const gulp = require('gulp');
const babel = require('gulp-babel');
const sass = require('gulp-ruby-sass');
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const autoprefixer = require('gulp-autoprefixer');
const jshint = require('gulp-jshint');
const del = require('del');
const rename = require('gulp-rename');
const sourcemaps = require('gulp-sourcemaps');

const paths = {
    styles: {
        src: './sass/',
        dest: './css/'
    },
    scripts: {
        src: './js/',
        dest: './js/'
    }
};

let NODE_ENV = 'development';

/**
 *  Clean the directory
 */
function clean(cb) {
    return del(['npm-debug.log',
            '.sass-cache',
            'css/main.css',
            'css/main.css.map',
            './css/main.css.min.map'],
        cb());
}

/**
 *  Compile styles
 */
function styles() {

    if (NODE_ENV === 'development') {
        return sass(paths.styles.src + 'main.sass', {style: 'expanded'})
            .on('error', (err) => {
                console.error('Error', err.message);
            })
            .pipe(sourcemaps.init())
            .pipe(gulp.dest(paths.styles.dest))
            .pipe(rename({
                suffix: '.min'
            }))
            .pipe(cleanCSS())
            .pipe(sourcemaps.write('./'))
            .pipe(gulp.dest(paths.styles.dest))
    }

    return sass(paths.styles.src + 'main.sass', {style: 'compressed'})
        .on('error', (err) => {
            console.error('Error', err.message);
        })
        .pipe(autoprefixer('last 2 versions'))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(cleanCSS())
        .pipe(gulp.dest(paths.styles.dest))

}

/**
 * Check errors in scripts
 */
function lint() {
    return gulp.src([paths.scripts.src + '*.js', `!${paths.scripts.src}*.min.js`])
        .pipe(jshint())
        .pipe(jshint.reporter('jshint-stylish'));
}

/**
 *  Minify and concat all JS files
 */
function scripts() {
    return gulp.src([paths.scripts.src + '*.js', `!${paths.scripts.src}*.min.js`])
        .pipe(babel({
            presets: ['env']
        }))
        .pipe(concat('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(paths.scripts.dest))
}

/**
 *  Watch changes
 */
function watch() {
    gulp.watch(paths.styles.src + '**/*.sass', styles);
    gulp.watch([paths.scripts.src + '*.js', `!${paths.scripts.src}*.min.js`], gulp.series(lint, scripts));
}

/*
 * Specify if tasks run in series or parallel using `gulp.series` and `gulp.parallel`
 */
// function build() {
//     NODE_ENV = 'production';
//     gulp.series(clean, gulp.parallel(styles, scripts))
// }

let build = gulp.series(clean, gulp.parallel(styles, scripts));

/*
 * Define build task to build our scripts and styles for Production
 */
gulp.task('build', build);

/*
 * Define default task that can be called by just running `gulp` from cli
 */
gulp.task('default', gulp.series(build, watch));
