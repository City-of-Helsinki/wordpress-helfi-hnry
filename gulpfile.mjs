'use strict';

import * as dartSass from 'sass';
import gulpSass from 'gulp-sass';
import gulp from 'gulp';

const sass = gulpSass(dartSass);

gulp.task('sass', () => {
  return gulp.src('scss/*.scss')
      .pipe(sass().on('error', sass.logError))
      .pipe(gulp.dest('css'));
});

gulp.task('watch', () => {
  gulp.watch('scss/*.scss', gulp.parallel('sass'));
});

gulp.task('default', gulp.parallel('sass'));
