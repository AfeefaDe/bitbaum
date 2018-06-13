var gulp = require('gulp')
var sass = require('gulp-sass')
var prefix = require('gulp-autoprefixer')
var cssmin = require('gulp-cssmin')
var rename = require('gulp-rename')
var notify = require('gulp-notify')
var browserSync = require('browser-sync')
var php = require('gulp-connect-php')

var reload = browserSync.reload

var input = './sass/*'
var output = './public/styles/'

gulp.task('sass', function () {
  return gulp
    .src(input)
    .pipe(sass({indentedSyntax: true}))
    .on('error', function (err) {
      notify.onError({
        title: 'Error',
        message: '<%= error.message %>',
      })(err)
      this.emit('end')
    })
    .pipe(prefix('last 8 versions', '> 1%', 'ie 8', 'ie 7'))
    .pipe(gulp.dest(output))
    .pipe(rename({suffix: '.min'}))
    .pipe(cssmin())
    .pipe(gulp.dest(output))
    .pipe(reload({stream:true}))
})

gulp.task('php', function() {
  php.server({ configCallback: function _configCallback(type, collection) {
    if (type === php.OPTIONS_SPAWN_OBJ) {
      // Windows Batch files are NOT executable on their own. This will start a shell 
      // session then execute. 
      collection.shell = true
      return collection
    }
  }, port: 8010, keepalive: true, base: './public'})
})

/* Reload task */
gulp.task('bs-reload', function () {
  browserSync.reload()
})

/* Prepare Browser-sync for localhost */
gulp.task('browser-sync', function() {
  browserSync.init(['public/styles/*.css', '*.php'], {
    proxy: 'localhost:8010',
    port: 3020,
    open: true,
    notify: false
  })
})

gulp.task('watch', function() {
  return gulp
    .watch(input, ['sass'])
})

gulp.task('default', ['php', 'sass', 'watch', 'browser-sync'])