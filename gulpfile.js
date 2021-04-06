const gulp = require('gulp');

const { src, series, parallel, dest, watch } = require('gulp');
const sass = require('gulp-sass');
const rename = require('gulp-rename');
sass.compiler = require('node-sass');

function cssTask() {
    return gulp.src('./src/sass/**/*.scss')
        .pipe(sass())
        .pipe(rename('app.css'))
        .pipe(gulp.dest('./dist/css'))
}

gulp.task('sass', function () {
    return gulp.src('./src/sass/**/*.scss')
        .pipe(sass())
        .pipe(rename('app.css'))
        .pipe(gulp.dest('./dist/css'))
});

exports.build = sass;

