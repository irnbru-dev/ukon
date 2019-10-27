'use strict';

// common
const gulp = require('gulp');
const concat = require('gulp-concat');
const plumber = require('gulp-plumber');
const notify = require('gulp-notify');
const rename = require('gulp-rename');

// js
const uglify = require('gulp-uglify');

// styles
const less = require('gulp-less');
const uglifycss = require('gulp-uglifycss');
const LessPluginAutoPrefix = require('less-plugin-autoprefix');
const autoprefix = new LessPluginAutoPrefix({browsers: ['last 20 versions', 'ie 9']});

const path = {
    src: {
        less: 'src/less/style.less',
        js: 'src/js/script.js',
        shortcode: 'src/js/shortcode/shortcode.js'
    },
    watch: {
        js: 'src/js/**/*.js',
        less: 'src/**/*.less'
    },
    dist: {
        js: 'wp-content/themes/ukon/js/',
        css: 'wp-content/themes/ukon/css/',
        shortcode: 'wp-content/themes/ukon/shortcode/'
    }
};

// error handling
let onError = (err) => {
    notify.onError({
        title: "Error in " + err.plugin
    })(err);
};

gulp.task('js', () => {
    return gulp.src(path.src.js)
        .pipe(plumber({errorHandler: onError}))
        .pipe(concat('app.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(path.dist.js))
});

gulp.task('shortcode', function () {
    return gulp.src(path.src.shortcode)
        .pipe(concat('shortcode.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(path.dist.shortcode))
});

gulp.task('less', () => {
    return gulp.src(path.src.less)
        .pipe(plumber({errorHandler: onError}))
        .pipe(less({
            plugins: [autoprefix],
            sourcemaps: true
        }))
        .pipe(plumber({errorHandler: onError}))
        .pipe(uglifycss())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(path.dist.css))
});

gulp.task('watch', () => {
    gulp.watch(path.watch.js, ['js']);
    gulp.watch(path.watch.less, ['less']);
});

gulp.task('default', ['watch']);