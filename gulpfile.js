const gulp = require('gulp');
const cssnano = require('gulp-cssnano');
const del = require('del');
const htmlmin = require('gulp-html-minifier');
const watch = require('gulp-watch');
const fileinclude = require('gulp-file-include');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const spritesmith = require('gulp.spritesmith');
const image = require('gulp-image');


gulp.task('sprite', function () {
    return gulp.src('img/icons/*.png')
        .pipe(spritesmith({
            imgName: 'icons.png'
        }));
});

gulp.task('fileinclude', function () {
    return gulp.src(['index.html'])
        .pipe(fileinclude({
            prefix: '@@',
            basepath: '@file'
        }))
        .pipe(gulp.dest('./'));
});

gulp.task('sass', function () {
    return gulp.src('src/css/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('src/css'));
});

gulp.task('sass-watch', function () {
    return watch('src/css/**/*.scss', function () {
        gulp.src('src/css/style.scss')
            .pipe(sass().on('error', sass.logError))
            .pipe(autoprefixer({
                browsers: ['last 2 versions'],
                cascade: false
            }))
            .pipe(gulp.dest('src/css'));
    });
});

gulp.task('css-min', function () {
    return gulp.src('src/css/style.css')
        .pipe(cssnano())
        .pipe(gulp.dest('dist/css'));
});

gulp.task('autoprefix', function () {
    return gulp.src('src/css/style.css')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('src/css/'));
});

gulp.task('htmlmin', function () {
    return gulp.src('src/*.html')
        .pipe(htmlmin({
            collapseWhitespace: true
        }))
        .pipe(gulp.dest('dist/'));
});

gulp.task('img', function () {
    return gulp.src('src/img/**/*')
        .pipe(image())
        .pipe(gulp.dest('dist/img/'));
});

gulp.task('clean', function () {
    return del.sync('dist');
});

gulp.task('build', ['clean', 'sass', 'autoprefix', 'img', 'htmlmin', 'css-min'], function () {
    gulp.src('src/font-awesome/**/*')
        .pipe(gulp.dest('dist/font-awesome/'));
    gulp.src('src/fonts/**/*')
        .pipe(gulp.dest('dist/fonts/'));
    gulp.src('src/js/**/*')
        .pipe(gulp.dest('dist/js/'));
    gulp.src('src/*.php')
        .pipe(gulp.dest('dist/'));
});
