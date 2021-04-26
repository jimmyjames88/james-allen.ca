'use strict'
const { src, dest, watch } = require('gulp');
const sass = require('gulp-sass');
const phpConnect = require("gulp-connect-php");
const clean = require('gulp-clean');
const browsersync = require('browser-sync')

// Watch files
function watchFiles() {
    watch('./dev/scss/*', doSass);
}

//Php connect
function connectsync() {
    phpConnect.server({
        // a standalone PHP server that browsersync connects to via proxy
        port: 3000,
        keepalive: true,
        base: "dev"
    }, function (){
        browsersync({
            proxy: '127.0.0.1:3000'
        });
    });
}

// BrowserSync Reload
function browserSyncReload(done) {
    browsersync.reload();
    done();
}

function doSass(done) {
	src('dev/sass/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(dest('dev/css'));
		done();
}

function cleanFiles(clean) {
	return src('./assets/*', {
		read: false
	})
	.pipe(clean());
}

function moveFiles() {
	return src('dev/**/*')
	.pipe(dest('./dist'))
}

exports.doSass = doSass;
exports.connectsync = connectsync;
exports.cleanFiles = cleanFiles;



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
