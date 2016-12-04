var gulp = require('gulp'),
stylus = require('gulp-stylus'),
clean = require('gulp-clean'),
cleanCSS = require('gulp-clean-css'),
plumber = require('gulp-plumber'),
imagemin = require('gulp-imagemin'),
htmlmin = require('gulp-htmlmin'),
uglify = require('gulp-uglify'),
concat = require('gulp-concat'),
rename = require('gulp-rename'),
jeet        = require('jeet'),
rupture     = require('rupture'),
koutoSwiss  = require('kouto-swiss'),
prefixer    = require('autoprefixer-stylus'),
duo = require('gulp-duojs'),
browserSync = require('browser-sync');


gulp.task('browser-sync', function() {
    browserSync({
        server: {
            baseDir: 'dist/'
        }
    });
});

// Copiar arquivos para pasta dist
gulp.task('copy', function() {
    return gulp.src(['source/{fonts,libraries,images}/**/*'], {base: 'source'})
        .pipe(gulp.dest('dist'))
        .pipe(browserSync.reload({stream:true}))
});

// Apaga os arquivos
gulp.task('clean', function() {
    return gulp.src('dist/', {read: false})
        .pipe(clean({force: true}));
});

// Compilar Stylus para CSS
gulp.task('stylus', function(){
    gulp.src('source/stylus/main.styl')
    .pipe(plumber())
    .pipe(stylus({
        use:[koutoSwiss(), prefixer(), jeet(), rupture()]
    }))
    .pipe(gulp.dest('source/stylesheets/'))
});

// Minificar HTML
gulp.task('minify-html', function() {
  return gulp.src('source/*.html')
    .pipe(htmlmin({collapseWhitespace: true}))
    .pipe(gulp.dest('dist/'))
    .pipe(browserSync.reload({stream:true}))
});

// DuoJS
gulp.task('duojs', function () {
  gulp.src('source/scripts/all.js')
    .pipe(duo({standalone: 'foobar'}))
    .pipe(gulp.dest('source/scripts/build/'));
});

// Minificar JS
gulp.task('uglify', function(){
    return gulp.src('source/scripts/build/all.js')
        .pipe(rename('bundle.js'))
        .pipe(plumber())
        .pipe(uglify())
        .pipe(gulp.dest('dist/scripts/'))
        .pipe(browserSync.reload({stream:true}))
});

// Minificar CSS
gulp.task('minify-css', function() {
  return gulp.src('source/stylesheets/*.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('dist/stylesheets/'))
    .pipe(browserSync.reload({stream:true}))
});

// Otimizar Imagens
gulp.task('imagemin', function() {
    return gulp.src('source/images/**/*')
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
        .pipe(gulp.dest('dist/images/'))
        .pipe(browserSync.reload({stream:true}))
});

// Escuta

/* Alias */
gulp.task('default', ['stylus','duojs', 'uglify', 'imagemin', 'copy', 'minify-css', 'minify-html', 'browser-sync', 'watch']);
gulp.task('watch', function(){
    gulp.watch('source/images/**/*', ['imagemin']);
    gulp.watch('source/stylus/**/*.styl', ['stylus']);
    gulp.watch('source/stylesheets/*.css', ['minify-css']);
    gulp.watch('source/*.html', ['minify-html']);
    gulp.watch('source/scripts/all.js', ['duojs']);
    gulp.watch('source/scripts/build/all.js', ['uglify']);
    gulp.watch(['source/{fonts,libraries}/**/*'], ['copy']);
});
