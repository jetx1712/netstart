// --> Gulp padrão
const gulp = require('gulp');

// --> Css Sass
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const purgecss = require('gulp-purgecss');
sass.compiler = require('node-sass');

// --> JavaScript
const concat = require('gulp-concat');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');

// -->Img
// const image = require('gulp-image');
const webp = require('gulp-webp');

/* -------------------------------- CSS/SASS -------------------------------- */

function networkCSS() {
  return gulp
    .src('assets/build/css/scss/network/index.scss')
    .pipe(sass({
      outputStyle: 'compressed',
    }))
    // .pipe(
    //   purgecss({
    //     content: ['application/views/melhorInternet.php'],
    //     whitelist: [''],
    //   })
    // )
    .pipe(
      cleanCSS(
        { debug: true },
        details => {
          console.log(`${details.name}: ${details.stats.originalSize}`);
          console.log(`${details.name}: ${details.stats.minifiedSize}`);
        }
      )
    )
    .pipe(concat('all.network.css'))
    .pipe(gulp.dest('assets/dist/css'));
}


function sassComp() {
  return gulp
    .src('assets/build/css/scss/style.scss')
    .pipe(
      sass({
        outputStyle: 'compressed',
      })
    )
    .pipe(gulp.dest('assets/build/css'));
}

function css() {
  return gulp
    .src(['assets/build/css/plugins/*.css', 'assets/build/css/style.css'])
    .pipe(concat('all.min.css'))
    .pipe(
      purgecss({
        content: ['application/views/**/*.php'],
        whitelist: [
          'active',
          'anime',
          'anime-start',
          'ativo',
          '__move',
          'responsive-menu',
          'esconderMenu',
          'slick-arrow',
          'slick-prev',
          'slick-next',
          'activeItem',
          'timeline-one-child',
          'prev-arrow',
          'next-arrow',
          'owl-nav',
          'prev-slide',
          'next-slide',
          'slick-disabled',
          'opened',
        ],
      })
    )
    .pipe(
      cleanCSS(
        {
          debug: true,
        },
        details => {
          console.log(`${details.name}: ${details.stats.originalSize}`);
          console.log(`${details.name}: ${details.stats.minifiedSize}`);
        }
      )
    )
    .pipe(gulp.dest('assets/dist/css'));
}

/* ------------------------------- JAVASCRIPT ------------------------------- */
function jsCore() {
  return gulp
    .src([
      'assets/build/js/core/jquery.min.js',
      'assets/build/js/core/popper.min.js',
      'assets/build/js/core/bootstrap.min.js',
      'assets/build/js/plugin/*.js',
    ])
    .pipe(concat('corePlugins.all.js'))
    .pipe(gulp.dest('assets/build/js/concat'));
}

function js() {
  return gulp
    .src(['assets/build/js/app.js'])
    .pipe(concat('all.js'))
    .pipe(
      babel({
        presets: ['env'],
      })
    )
    .pipe(uglify())
    .pipe(gulp.dest('assets/build/js/concat'));
}

function networkJS() {
  return gulp
    .src(['assets/build/js/network/app.js'])
    .pipe(concat('app.network.js'))
    .pipe(
      babel({
        presets: ['env'],
      })
    )
    .pipe(uglify())
    .pipe(gulp.dest('assets/dist/js'));
}

// function jsConcat() {
//   return gulp.src(['assets/build/js/concat/corePlugins.all.js',
//       'assets/build/js/concat/all.js',
//     ])
//     .pipe(concat('all.min.js'))
//     .pipe(gulp.dest('assets/dist/js'))
// }

/* --------------------------------- IMAGENS -------------------------------- */
// function img() {
//   return gulp.src('assets/build/img/**/*').pipe(image()).pipe(gulp.dest('assets/dist/img/img-otimizadas'));
// }

function imgWebp() {
  return gulp.src('assets/dist/img/img-otimizadas/**/*').pipe(webp()).pipe(gulp.dest('assets/dist/img/webp'));
}

/* ---------------------------------- WATCH --------------------------------- */
function watch() {
  gulp.watch('assets/build/css/scss/**/*.scss', sassComp);
  gulp.watch('assets/build/css/style.css', css);
  // gulp.watch('assets/build/js/**/*.js', js);
  // gulp.watch('assets/build/img/**/*', img);
  // gulp.watch('assets/dist/img/img-otimizadas', imgWebp);
}

function networkWatch() {
  gulp.watch('assets/build/css/scss/network/**/*.scss', networkCSS);
  gulp.watch('assets/build/js/network/**/*.js', networkJS);
  // gulp.watch('assets/build/js/**/*.js', js);
  // gulp.watch('assets/build/img/**/*', img, );
  // gulp.watch('assets/dist/img/img-otimizadas', imgWebp);
}

// --> Exportando
exports.css = css;
exports.js = js;
exports.jsCore = jsCore;
//exports.jsConcat = jsConcat;
// exports.img = img;
exports.imgWebp = imgWebp;
exports.watch = watch;
exports.sassComp = sassComp;
exports.networkJS = networkJS;
exports.networkCSS = networkCSS;
exports.default = gulp.parallel(watch, sassComp, css, js);
exports.network = gulp.parallel(networkWatch, networkJS, networkCSS);