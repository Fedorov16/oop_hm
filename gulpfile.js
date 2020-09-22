'use strict';

const gulp = require('gulp'),//система описания задач
      sass = require('gulp-sass'),//плагин препроцессора sass
      prefixer = require('gulp-autoprefixer'),//плагин расстановки вендорных префиксов
      plumber = require('gulp-plumber'),//плагин обработчика ошибок
      browserSync = require('browser-sync'),//веб-сервер
      bourbonLib = require('bourbon'),//библиотека
      bourbon = require('node-bourbon'),//библиотека
      rigger = require('gulp-rigger'),//сборка
      reload = browserSync.reload,//перезагрузка веб-сервера
      rimraf = require('rimraf');//плагин удаления файлов

const path ={
    src:{
        scss:'assets/gulp/css/style.scss',
        js:'assets/gulp/js/*.js'
    },
    build:{
        scss:'assets/css/',
        js:'assets/js/'
    },
    watch:{
        scss:'assets/gulp/css/style.scss',
        js:'assets/gulp/js/*.js'
    },
    clean:{
        scss:'assets/css/',
        js:'assets/js/'
    }
};

gulp.task('clean',function(done){
    rimraf(path.clean.scss, done);
});

gulp.task('dev:scss',function(done){
    gulp.src(path.src.scss,{sourcemaps:true})
        .pipe(plumber())
        .pipe(sass({
            outputStyle:"compressed",
            includePaths: bourbon.includePaths
        }))
        .pipe(prefixer({
            remove:true
        }))
        .pipe(gulp.dest(path.build.scss,{sourcemaps:'.'}))
        .pipe(reload({stream:true}));
    done();
});

gulp.task('prod:js',function(done){
    gulp.src(path.src.js)
        .pipe(plumber())
        .pipe(rigger())
        .pipe(gulp.dest(path.build.js))
        .pipe(reload({stream:true}));//reload webserver
    done();
});

gulp.task('watch',function(done){
        gulp.watch(path.watch.scss,gulp.series('dev:scss'));
        gulp.watch(path.watch.js,gulp.series('prod:js'));
    done();
});

gulp.task('default',
    gulp.series(
        'clean',
         
            'prod:js',
            'dev:scss',
         
        'watch'
        )
);