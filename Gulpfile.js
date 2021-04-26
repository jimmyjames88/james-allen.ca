'use strict'
const { src, dest } = require('gulp');
const sass = require('gulp-sass');

function compileSass(done) {
	src('dev/sass/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(dest('dev/css'));
		done();
}

exports.compileSass = compileSass;



// var gulp = require('gulp');
// var sass = require('gulp-sass');
// var connect = require('gulp-connect-php7');

// gulp.task('connect', function(){
// 	connect.server({
// 		base: 'dist',
// 		port: 3000
// 	})
// })

// gulp.task('watch', function(){
// 	gulp.watch('dev/**/*',['build']);
// });

// gulp.task('build', function() {

// 	gulp.src(['dev/**/*', '!dev/sass/**/*', '!dev/sass/'])
// 		.pipe(gulp.dest('dist'));

//     gulp.src('dev/sass/**/*.scss')
//         .pipe(sass().on('error', sass.logError))
//         .pipe(gulp.dest('dist/css'))
// });

// //Watch task
// gulp.task('default',['build', 'connect', 'watch']);
