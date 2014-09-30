var gulp = require('gulp');
var minifyCSS = require('gulp-minify-CSS');

gulp.task('default', function() {
	// code
});

gulp.task('minify-css', function() {
	gulp.src('style.css')
		.pipe(minifyCSS({keepBreaks:true}))
		.pipe(gulp.dest('./build/'))
});