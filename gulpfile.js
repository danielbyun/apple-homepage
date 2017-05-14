// took everything and put it into a variable
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');

gulp.task("sass", function(){
    return gulp.src('app/scss/styles.scss')
        .pipe(sass())
        .pipe(gulp.dest('app/css'))
});

gulp.task('styles', function(){
    gulp.src('css/styles.css')
        .pipe(autoprefixer())
        .pipe(gulp.dest('dist'));
});

gulp.task('scripts', function(){
    gulp.src('app/')
})