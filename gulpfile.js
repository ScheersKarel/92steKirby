const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const cssnano = require("gulp-cssnano");
const browserSync = require("browser-sync").create();
const sassGlob = require("gulp-sass-glob");
const jsmin = require("gulp-jsmin");
const concat = require("gulp-concat");
const rename = require("gulp-rename");
var php = require("gulp-connect-php");
const opn = require("opn");

// Styles task
async function styles() {
  return gulp
    .src("./theme/main.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(cssnano())
    .pipe(gulp.dest("./assets/css/"));
}

// JS task
async function js() {
  return gulp
    .src("./theme/**/*.js")
    .pipe(concat("main.js"))
    .pipe(jsmin())
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest("./assets/js/"));
}

// Serve PHP server and BrowserSync
function serve() {
  php.server({ base: ".", port: 3000, keepalive: true });
  browserSync.init({
    proxy: "127.0.0.1:3000",
    port: 8080,
    open: true,
  });
}

// Open browser on Laragon URL
function openBrowser() {
  opn("http://localhost:8080"); // Laragon URL
}

// Watch task
function dev() {
  gulp.watch(
    "./theme/**/*.scss",
    gulp.series(styles, function (done) {
      browserSync.reload();
      done();
    })
  );

  gulp.watch(
    "./theme/**/*.js",
    gulp.series(js, function (done) {
      browserSync.reload();
      done();
    })
  );

  gulp.watch("./**/*.php").on("change", function () {
    browserSync.reload();
  });

  serve(); // Start the server
  openBrowser();
}
const build = gulp.series(styles, js);
exports.build = build;
exports.js = js;
exports.dev = dev;
exports.styles = styles;
