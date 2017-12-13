var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('css', function() {
    gulp.src('resources/assets/sass/main.scss')
        .pipe(sass())
        .pipe(autoprefixer('last 10 version'))
        .pipe(gulp.dest('public/css'));
});

gulp.task('watch', function() {
    gulp.watch('resources/assets/sass/**/*.scss', ['css']);
});

gulp.task('default', ['watch']);
