const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const cssnano = require("gulp-cssnano");
const browserSync = require("browser-sync");
const sassGlob = require("gulp-sass-glob");
const jsmin = require("gulp-jsmin");
const concat = require("gulp-concat");
const rename = require("gulp-rename");
var php = require('gulp-connect-php');

//package to open browser on laragon url
const opn = require('opn');

async function styles() {
    return gulp.src('./theme/main.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(cssnano())
        .pipe(gulp.dest('./assets/css/'))
}

async function js() {
    gulp.src('./theme/**/*.js')
        .pipe(concat('main.js'))
        .pipe(jsmin())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('./assets/js/'))
}

//open browser on laragon url
function openBrowser() {
    const url = 'http://voetgevoel.test';
    opn(url).catch((error) => {
        console.error(error);
    });
}

//dev, starts server, watches for changes, reloads browser
function dev() {

    php.server({}, function () {
        browserSync({
            proxy: 'http://localhost:8080/voetGevoel/',
            port: 8080,
            notify: false,
            online: false,
            open: false,
        });
    });

    gulp.watch('./theme/**/*.scss').on('change', gulp.series(styles, function () {
        browserSync.reload();
    }));

    gulp.watch('./theme/**/*.js').on('change', gulp.series(js, function () {
        browserSync.reload();
    }));

    gulp.watch('./**/*.php').on('change', function () {
        browserSync.reload();
    });

    //open browser on laragon url
    openBrowser();
}

exports.js = js
exports.dev = dev