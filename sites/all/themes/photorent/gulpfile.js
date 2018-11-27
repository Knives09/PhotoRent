var gulp	= require('gulp'),
	sass	= require('gulp-sass');
	minify  = require('gulp-minify');
	

gulp.task('default', ['watch', 'sass']);

gulp.task('sass', function() {
	gulp.src(['./src/scss/style-custom.scss'])
	.pipe(sass({
		outputStyle: 'compressed'
	}).on('error', sass.logError))
	.pipe(gulp.dest('./assets/css'))
});

gulp.task('watch', function() {
	gulp.watch('./src/scss/*.scss', ['sass'])
	gulp.watch('./src/scss/*/*.scss', ['sass'])
});
/*gulp.task('compress', function() {
	gulp.src('./src/AppBundle/Resources/public/js-source/*.js')
		.pipe(minify({
			ext:{
	            min:'.js'
	        },
	        noSource: ['.js'],
			ignoreFiles: ['-min.js']
		}))
		.pipe(gulp.dest('./src/AppBundle/Resources/public/js'))
});*/