var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    sass = require('gulp-sass'),
    minify = require('gulp-minify-css'),
    watch = require('gulp-watch');

gulp.task('js', function () {
    gulp.src([
      'js/jquery.js',
      'js/jquery-migrate.js',
      //'js/customizer.js',
      'js/intersection-observer.js',
      'js/scrollama.min.js',
      'js/scrollreveal.js',
      'js/skip-link-focus-fix.js',
      'js/main.js'
    ]).pipe(uglify())
	     .pipe(concat('app.js'))
      .pipe(gulp.dest('build'));
});

gulp.task('css', function () {
    return gulp.src(['sass/start.+(scss|css)', 'css/*.+(scss|css)'])
        .pipe(sass())
        .pipe(minify({keepBreaks: true}))
	    .pipe(concat('app.css'))
        .pipe(gulp.dest('build'));
});

gulp.task('w', function () {
    gulp.watch(['sass/**/*.+(scss|css)', 'css/*.+(scss|css)', 'js/*.js'], ['css', 'js']);
});
