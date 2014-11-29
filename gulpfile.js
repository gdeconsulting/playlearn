var gulp = require('gulp');
var merge = require('merge-stream');
var concat = require('gulp-concat');
var sass = require('gulp-sass');

gulp.task('default', function() {
  return gulp.src(['bower_components/bootstrap-sass-official/assets/javascripts/*', 'bower_components/jquery/dist/*'])
    .pipe(concat('result.txt'))
    .pipe(gulp.dest('build'));
});

gulp.task('test', function() {
  var bootstrap = gulp.src('bower_components/bootstrap-sass-official/assets/javascripts/*.js')
    .pipe(gulp.dest('web/bootstrap'));

  var bootstrapCss = gulp.src('bower_components/bootstrap-sass-official/assets/stylesheets/*.scss')
      .pipe(gulp.dest('web/bootstrap'));

  var jquery = gulp.src('bower_components/jquery/dist/jquery.js')
    .pipe(gulp.dest('web/jquery'));

  return merge(bootstrap, jquery, bootstrapCss);
});

gulp.task('sass', function () {
  gulp.src('web/bootstrap/*.scss')
      .pipe(sass({outputStyle: 'compressed', errLogToConsole: true}))
      .pipe(gulp.dest('web/bootstrap/dist.css'));
});
