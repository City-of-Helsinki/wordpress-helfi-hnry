const gulp = require('gulp'),
      sass = require('gulp-sass'),
      watch = require('gulp-watch'),
      browserSync = require('browser-sync').create();

gulp.task('sass', (done)=>{
        gulp.src('./scss/*.scss')
            .pipe(sass().on('error', sass.logError))
            .pipe(gulp.dest('./css'));
        browserSync.reload();
        done();
});

gulp.task('default', gulp.series('sass', (done)=>{
    browserSync.init({
		host: 'hnry.tunkki.mysteer.io',
		proxy: 'https://hnry.tunkki.mysteer.io/',
		open: false,
	});

	gulp.watch('./scss/**/*.scss', gulp.series('sass'));
	gulp.watch('js/**/*.js').on('change', browserSync.reload);
	gulp.watch('*.php').on('change', browserSync.reload);
	gulp.watch('./template-parts/**/*.php').on('change', browserSync.reload);
    done();
}));
