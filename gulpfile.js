var gulp = require('gulp'),
stylus = require('gulp-stylus'),
clean = require('gulp-clean'),
cleanCSS = require('gulp-clean-css'),
plumber = require('gulp-plumber'),
imagemin = require('gulp-imagemin'),
htmlmin = require('gulp-htmlmin'),
uglify = require('gulp-uglify'),
concat = require('gulp-concat'),
jeet        = require('jeet'),
rupture     = require('rupture'),
koutoSwiss  = require('kouto-swiss'),
browserSync = require('browser-sync'),
sourcemaps = require('gulp-sourcemaps');


gulp.task('browser-sync', function() {
    browserSync({
        server: {
            baseDir: 'public/'
        }
    });
});

// Copiar arquivos para pasta public
gulp.task('copy', function() {
    return gulp.src(['source/{fonts,vendor,img}/**/*'], {base: 'source'})
        .pipe(gulp.dest('public'))
        .pipe(browserSync.reload({stream:true}))
});

// Apaga os arquivos
gulp.task('clean', function() {
    return gulp.src('public/', {read: false})
        .pipe(clean({force: true}));
});

// Compilar Stylus para CSS
gulp.task('stylus', function(){
    gulp.src('source/stylus/main.styl')
    .pipe(plumber())
    .pipe(stylus({
        use:[koutoSwiss(), jeet(), rupture()]
    }))
    .pipe(gulp.dest('source/css/'))
});

// Minificar HTML
gulp.task('minify-html', function() {
  return gulp.src('source/**/*.html')
    .pipe(htmlmin({collapseWhitespace: true}))
    .pipe(gulp.dest('public/'))
    .pipe(browserSync.reload({stream:true}))
});

// Minificar JS
var scripts = [
    './source/vendor/jquery/dist/jquery.js',
    './source/js/*.js'
];
gulp.task('js', function() {
    return gulp.src(scripts)
        .pipe(sourcemaps.init({loadMaps: true}))
            .pipe(concat('bundle.js'))
            .pipe(uglify())
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('public/js'))
        .pipe(browserSync.reload({stream:true}))
});

// Minificar CSS
gulp.task('minify-css', function() {
  return gulp.src('source/css/*.css')
    .pipe(sourcemaps.init({loadMaps: true}))
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('public/css/'))
    .pipe(browserSync.reload({stream:true}))
});

// Otimizar Imagens
gulp.task('imagemin', function() {
    return gulp.src('source/img/**/*')
        .pipe(plumber())
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [
                {removeViewBox: false},
                {cleanupIDs: false}
            ],
            interlaced: true,
            optimizationLevel: 3
        }))
        .pipe(gulp.dest('public/img/'))
        .pipe(browserSync.reload({stream:true}))
});

// Escuta

/* Alias */
gulp.task('default', ['stylus', 'js', 'imagemin', 'copy', 'minify-css', 'minify-html', 'watch', 'browser-sync']);
gulp.task('watch', function(){
    gulp.watch('source/img/**/*', ['imagemin']);
    gulp.watch('source/stylus/**/*.styl', ['stylus']);
    gulp.watch('source/css/*.css', ['minify-css']);
    gulp.watch('source/*.html', ['minify-html']);
    gulp.watch('source/js/*.js', ['js']);
    gulp.watch(['source/{fonts,vendor}/**/*'], ['copy']);
});
