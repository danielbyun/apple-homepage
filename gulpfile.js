// took everything and put it into a variable
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');
var cleanCSS = require('gulp-clean-css');

gulp.task("sass", function(){
    return gulp.src('app/scss/apple.scss')
        .pipe(sass())
        .pipe(gulp.dest('app/css'))
});

gulp.task('flex', function(){
    gulp.src('app/css/apple.css')
        .pipe(autoprefixer())
        .pipe(gulp.dest('dist'));
});

gulp.task('scripts', function(){
    gulp.src('app/')
});

gulp.task('minify-css', function(){
    return gulp.src('dist/apple.css')
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('dist'))
});