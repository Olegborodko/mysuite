var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    sass = require('gulp-sass'),
    minify = require('gulp-minify-css'),
    watch = require('gulp-watch');

gulp.task('js', function () {
    gulp.src([
      'js/jquery.min.js',
      //'js/jquery_2_13.js',
      //'js/jquery-migrate.js',
      'js/unyson/core.js',
      'js/unyson/transition.js',
      'js/unyson/background.js',
      'js/unyson/background.init.js',
      'js/intersection-observer.js',
      'js/scrollama.min.js',
      'js/scrollreveal.js',
      'js/skip-link-focus-fix.js',
      //'js/swiper.jquery.min.js',
      'js/swiper.min.js',
      'js/ion.rangeSlider.min.js',
      'js/main.js'
    ]).pipe(uglify())
	     .pipe(concat('app.js'))
      .pipe(gulp.dest('build'));
});

gulp.task('css', function () {
    return gulp.src(['sass/start.+(scss|css)', 'css/unyson/*.+(scss|css)', 'css/*.+(scss|css)'])
        .pipe(sass())
        .pipe(minify({keepBreaks: true}))
	    .pipe(concat('app.css'))
        .pipe(gulp.dest('build'));
});

gulp.task('css_admin_panel', function () {
  return gulp.src(['sass/admin_start.scss'])
  .pipe(sass())
  .pipe(minify({keepBreaks: true}))
  .pipe(concat('css_admin_panel.css'))
  .pipe(gulp.dest('build'));
});

// gulp.task('js_gallery', function () {
//     gulp.src([
//         'js/lightbox/core.js',
//         'js/lightbox/lightbox.js',
//         'js/lightbox/touch.js',
//         'js/lightbox/transition.js',
//         'js/lightbox/viewer.js'
//     ]).pipe(uglify())
//     .pipe(concat('lightbox.js'))
//     .pipe(gulp.dest('build'));
// });
//
// gulp.task('css_gallery', function () {
//     return gulp.src(['css/lightbox/*.+(scss|css)'])
//     .pipe(sass())
//     .pipe(minify({keepBreaks: true}))
//     .pipe(concat('lightbox.css'))
//     .pipe(gulp.dest('build'));
// });

gulp.task('w', function () {
    gulp.watch(['sass/**/*.+(scss|css)', 'css/*.+(scss|css)', 'js/*.js'], ['css', 'js', 'css_admin_panel']);
});
