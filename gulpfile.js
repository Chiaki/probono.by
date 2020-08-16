var gulp = require('gulp');
var jshint = require('gulp-jshint');
var concat = require('gulp-concat');
var concatcss = require('gulp-concat-css');
var cssnano = require('gulp-cssnano');
//var uncss = require('gulp-uncss');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');

// var scripts_external = [
//   './assets/jquery/dist/jquery.js',
// ];
// var scripts_dk = [
// 	'./js/dk.js'
// ];
// var styles_external = [
//   './assets/bootstrap/dist/css/bootstrap.css',
// ];
var styles_dk = [
  './scss/style.scss'
];
var styles_dk_watch = [
  './scss/*'
];

// gulp.task('lint', function() {
// 	return new Promise(function(resolve, reject) {
// 	  gulp.src(scripts_dk)
// 	    .pipe(jshint())
// 	    .pipe(jshint.reporter('default'));
// 	  resolve();
// 	});
// });

// gulp.task('scripts-external', function(){
// 	return new Promise(function(resolve, reject) {
// 	    gulp.src(scripts_external)
// 	        .pipe(concat('external.min.js'))
// 	        .pipe(uglify())
// 	        .pipe(gulp.dest('./js/'));
// 	    resolve();
// 	});
// });

// gulp.task('scripts-dk', function(){
// 	return new Promise(function(resolve, reject) {
// 	    gulp.src(scripts_dk)
// 	        .pipe(concat('dk.min.js'))
// 	        .pipe(uglify())
// 	        .pipe(gulp.dest('./js/'));
// 	    resolve();
// 	});
// });

// gulp.task('styles-external', function () {
// 	return new Promise(function(resolve, reject) {
// 	  gulp.src(styles_external)
// 	    .pipe(concatcss('external.min.css'))
// 	    .pipe(cssnano())
// 	    .pipe(gulp.dest('./css'));
// 	  resolve();
// 	});
// });

gulp.task('styles-dk', function () {
	return new Promise(function(resolve, reject) {
	  gulp.src(styles_dk)
	    .pipe(sass())
	    .pipe(concatcss('style.css'))
	    .pipe(cssnano())
	    .pipe(gulp.dest('./css'));
	  resolve();
	});
});

gulp.task('watch',function(){
	return new Promise(function(resolve, reject) {
	  gulp.watch(styles_dk_watch, gulp.series("styles-dk"));
	  // gulp.watch(scripts_dk, gulp.series("scripts-dk"));
	  resolve();
	});
});

gulp.task('default', gulp.series (gulp.parallel('styles-dk'), 'watch',
    function (done) { done(); }    
));
