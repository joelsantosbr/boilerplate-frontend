var gulp = require('gulp'),
clean = require('gulp-clean'),
plumber = require('gulp-plumber'),
imagemin = require('gulp-imagemin'),
htmlmin = require('gulp-htmlmin'),
concat = require('gulp-concat'),
browserSync = require('browser-sync'),
sourcemaps = require('gulp-sourcemaps');
// css
var cssnano = require('cssnano'),
    stylus = require('gulp-stylus'),
    postcss = require('gulp-postcss'),
    autoprefixer = require('autoprefixer'),
    jeet        = require('jeet'),
    rupture     = require('rupture'),
    koutoSwiss  = require('kouto-swiss');
// js
var uglify = require('gulp-uglify');

gulp.task('browser-sync', function() {
    browserSync({
        server: {
            baseDir: 'public/'
        }
    });
});

// Copiar arquivos para pasta public
gulp.task('copy', function() {
    return gulp.src(['app/{fonts,vendor,img}/**/*'], {base: 'app'})
        .pipe(gulp.dest('public'))
        .pipe(browserSync.reload({stream:true}));
});

// Apaga os arquivos
gulp.task('clean', function() {
    return gulp.src('public/', {read: false})
        .pipe(clean({force: true}));
});

// Compilar Stylus para CSS
gulp.task('stylus', function(){
    gulp.src('app/stylus/main.styl')
    .pipe(plumber())
    .pipe(stylus({
        use:[koutoSwiss(), jeet(), rupture()],
        'resolve url': true,
        // 'include css': true,
        define: {
            url: require('stylus').resolver()
        }
    }))
    .pipe(gulp.dest('app/css/'));
});

// Minificar HTML
gulp.task('minify-html', function() {
  return gulp.src('app/*.html')
    .pipe(htmlmin({collapseWhitespace: true}))
    .pipe(gulp.dest('public/'))
    .pipe(browserSync.reload({stream:true}));
});

// Minificar JS
var scripts = [
    './app/vendor/jquery/dist/jquery.js',
    './app/js/*.js'
];
gulp.task('js', function() {
    return gulp.src(scripts)
        .pipe(sourcemaps.init({loadMaps: true}))
            .pipe(concat('bundle.js'))
            .pipe(uglify())
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('public/js'))
        .pipe(browserSync.reload({stream:true}));
});

// Minificar CSS
gulp.task('minify-css', function() {
    var plugins = [
        autoprefixer({grid: false}),
        cssnano()
    ];
  return gulp.src('app/css/*.css')
    .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(postcss(plugins))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('public/css/'))
    .pipe(browserSync.reload({stream:true}));
});

// Otimizar Imagens
gulp.task('imagemin', function() {
    return gulp.src('app/img/**/*')
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
    gulp.watch('app/img/**/*', ['imagemin']);
    gulp.watch('app/stylus/**/*.styl', ['stylus']);
    gulp.watch('app/css/*.css', ['minify-css']);
    gulp.watch('app/*.html', ['minify-html']);
    gulp.watch('app/js/*.js', ['js']);
    gulp.watch(['app/{fonts,vendor}/**/*'], ['copy']);
});
