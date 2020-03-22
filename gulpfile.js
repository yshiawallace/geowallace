const { src, dest, watch, series, parallel } = require('gulp');
const yargs = require('yargs');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cleanCss = require('gulp-clean-css');
const gulpif = require('gulp-if');
const del = require('del');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const browserSync = require('browser-sync').create();
const PRODUCTION = yargs.argv.prod;

// Define paths to source files here
const files = {
  scssPath: 'src/scss/**/*.scss', // path to all scss files
  jsPath: 'src/js/**/*.js',
  jsVendorPath: 'src/js/vendor/*.js', // path to vendor js files
  jsCustomPath: 'src/js/custom/*.js' // path to custom js files
};

// Initialize BrowserSync server
function serve(done) {
  browserSync.init({
    proxy: 'http://georgewallace.localhost/', // put your local website link here
    files: ['./**/*.php']
  });
  done();
}

// Reload BrowserSync server
function reload(done) {
  browserSync.reload();
  done();
}

// Syles task
function styles() {
  return src(files.scssPath)
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulpif(PRODUCTION, postcss([autoprefixer()])))
    .pipe(gulpif(PRODUCTION, cleanCss({ compatibility: 'ie8' })))
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
    .pipe(dest('dist/css'))
    .pipe(browserSync.stream());
}

// Copy task: copy files not handlled by other tasks to dist directory
function copy() {
  return src(['src/**/*', '!src/{images,js,scss}', '!src/{images,js,scss}/**/*']).pipe(dest('dist'));
}

// Clean task
function clean() {
  return del(['dist']);
}

// Scripts task
function scripts() {
  return src([files.jsVendorPath, files.jsCustomPath], { sourcemaps: true })
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
    .pipe(babel({ presets: ['@babel/env'] }))
    .pipe(concat('scripts.min.js'))
    .pipe(gulpif(PRODUCTION, uglify()))
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
    .pipe(dest('dist/js'));
}

// Watch task
function watchTask() {
  watch(files.scssPath, styles);
  watch(['src/**/*', '!src/{images,js,scss}', '!src/{images,js,scss}/**/*'], series(copy, reload));
  watch(files.jsPath, series(scripts, reload));
  watch('**/*.php', reload);
}

exports.styles = styles;
exports.clean = clean;
exports.copy = copy;
exports.scripts = scripts;
exports.serve = serve;
exports.reload = reload;
exports.watchTask = watchTask;

const dev = series(clean, parallel(styles, copy, scripts), serve, watchTask);
const build = series(clean, parallel(styles, copy, scripts));

exports.default = dev; // kick off development with 'npm start'
exports.build = build; // kick off build with 'npm run build'
