const gulp = require('gulp')
const sass = require('gulp-sass')
const rename = require('gulp-rename')
const browserSync = require('browser-sync')
const php = require('gulp-connect-php')
const postcss = require("gulp-postcss");
const autoprefixer = require('autoprefixer');

const cssnano = require("cssnano");

var reload = browserSync.reload

var input = './sass/*'
var output = './public/styles/'

gulp.task('sass', function () {
    return gulp
        .src(input)
        .pipe(sass({indentedSyntax: true}))
        .pipe(postcss([autoprefixer({overrideBrowserslist: ['last 8 versions', '> 1%', 'ie 8', 'ie 7']})]))
        .pipe(gulp.dest(output))
        .pipe(rename({suffix: '.min'}))
        .pipe(postcss([cssnano(), autoprefixer({overrideBrowserslist: ['last 8 versions', '> 1%', 'ie 8', 'ie 7']})]))
        .pipe(gulp.dest(output))
        .pipe(reload({stream: true}))
})

/* Reload task */
gulp.task('bs-reload', function () {
    browserSync.reload()
})

/* Prepare Browser-sync for localhost */
gulp.task('browser-sync', function () {
    browserSync.init(['public/styles/*.css', 'public/pages/*.php', 'public/components/*.php'], {
        proxy: 'localhost:8010',
        port: 3020,
        open: true,
        notify: false
    })
})

gulp.task('watch', function () {
    return gulp
        .watch(input, gulp.parallel('sass'))
})

gulp.task('default', gulp.parallel('sass', 'watch', 'browser-sync'))