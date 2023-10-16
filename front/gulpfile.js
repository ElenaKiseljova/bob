const project_folder = 'dist';
const source_folder = '#src';

const path = {
  build: {
    html: project_folder + '/',
    css: project_folder + '/css/',
    js: project_folder + '/js/',
    img: project_folder + '/img/',
    fonts: project_folder + '/fonts/',
  },
  src: {
    html: [source_folder + '/*.html', '!' + source_folder + '/html/*.html'],
    php: source_folder + '/*.php',
    css: source_folder + '/scss/style.scss',
    js: source_folder + '/js/**/*.js',
    img: source_folder + '/img/**/*.+(png|jpg|gif|ico|svg|webp|mp4)',
    fonts: source_folder + '/fonts/**/*.*',
    svg: source_folder + '/img/icons/*.svg',
  },
  watch: {
    php: source_folder + '/**/*.php',
    html: source_folder + '/**/*.html',
    css: source_folder + '/scss/**/*.scss',
    js: source_folder + '/js/**/*.js',
    img: source_folder + '/img/**/*.+(png|jpg|gif|ico|svg|webp|mp4)',
    fonts: source_folder + '/fonts/**/*.*',
  },
  clean: './' + project_folder + '/',
};

const { src, dest, parallel } = require('gulp'),
  gulp = require('gulp'),
  browsersync = require('browser-sync').create(),
  fileInclude = require('gulp-file-include'),
  del = require('del'),
  sass = require('gulp-sass')(require('sass')),
  autoprefixer = require('gulp-autoprefixer'),
  media_queries = require('gulp-group-css-media-queries'),
  clean_css = require('gulp-clean-css'),
  rename = require('gulp-rename'),
  uglify = require('gulp-uglify-es').default,
  imagemin = require('gulp-image-sans-guetzli'),
  svgSprite = require('gulp-svg-sprite');

function browserSync() {
  browsersync.init({
    server: {
      baseDir: './' + project_folder + '/',
    },
    port: 3000,
    notify: false,
  });
}
const svgSprites = () => {
  return src(path.src.svg)
    .pipe(
      svgSprite({
        mode: {
          stack: {
            sprite: '../sprite.svg',
          },
        },
      })
    )
    .pipe(dest(path.build.img));
};
function html() {
  return src(path.src.html)
    .pipe(fileInclude())
    .pipe(dest(path.build.html))
    .pipe(browsersync.stream());
}
function php() {
  return src(path.src.php)
    .pipe(fileInclude())
    .pipe(dest(path.build.html))
    .pipe(browsersync.stream());
}
function css() {
  return src(path.src.css)
    .pipe(
      sass({
        outputStyle: 'expanded',
      })
    )
    .pipe(media_queries())
    .pipe(
      autoprefixer({
        overrideBrowserslist: ['last 5 versions'],
        cascade: true,
      })
    )

    .pipe(dest(path.build.css))
    .pipe(clean_css())
    .pipe(
      rename({
        extname: '.min.css',
      })
    )
    .pipe(dest(path.build.css))
    .pipe(browsersync.stream());
}
function js() {
  return src(path.src.js)
    .pipe(uglify())
    .pipe(dest(path.build.js))
    .pipe(browsersync.stream());
}
function images() {
  return (
    src(path.src.img)
      /* .pipe(
      imagemin({
        pngquant: true,
        optipng: false,
        zopflipng: true,
        jpegRecompress: false,
        mozjpeg: true,
        gifsicle: true,
        svgo: true,
        concurrent: 7,
      })
    ) */
      .pipe(dest(path.build.img))
      .pipe(browsersync.stream())
  );
}
function fonts() {
  return src(path.src.fonts).pipe(dest(path.build.fonts));
}
function watchFiles() {
  gulp.watch([path.watch.php], php);
  gulp.watch([path.watch.html], html);
  gulp.watch([path.watch.css], css);
  gulp.watch([path.watch.js], js);
  gulp.watch([path.watch.img], images);
  gulp.watch([path.watch.fonts], fonts);
}
function clean() {
  return del(path.clean);
}
const build = gulp.series(
  clean,
  gulp.parallel(css, html, php, js, images, fonts, svgSprites)
);
const watch = gulp.parallel(build, watchFiles, browserSync);

exports.fonts = fonts;
exports.images = images;
exports.js = js;
exports.css = css;
exports.html = html;
exports.build = build;
exports.watch = watch;
exports.default = watch;

