const { src, dest, watch } = require('gulp');
const sass = require('gulp-sass');
const minifyCSS = require('gulp-csso');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const browserSync = require('browser-sync').create();

function css() {
  return src('./assets/sass/*.scss', { sourcemaps: true })
    .pipe(sass())
    .pipe(minifyCSS())
    .pipe(
      dest('./'),
      { sourcemaps: true }
    )
    .pipe(browserSync.stream());
}

function js() {
  return src('[./assets/js/vendor/*.js, ./assets/js/custom/*.js]', { sourcemaps: true })
    .pipe(
      babel({
        presets: ['@babel/env']
      })
    )
    .pipe(concat('build.min.js'))
    .pipe(dest('./assets/js', { sourcemaps: true }));
}

function browser() {
  browserSync.init({
    proxy: 'http://georgewallace.localhost/',
    files: ['./**/*.php']
  });

  watch('./assets/sass/**/*.scss', css);
  watch('./assets/js/**/*s.js', js).on('change', browserSync.reload);
}

exports.css = css;
exports.js = js;
exports.default = browser;
