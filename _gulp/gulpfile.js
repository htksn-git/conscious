// プラグイン読み込み ////////////////////////////////////////////
// gulpプラグイン
const gulp = require('gulp');
// Sassをコンパイル
const sass = require('gulp-sass')(require('sass'));
// 複数のSassファイルを結合
const concat = require('gulp-concat');
// コンパイル後のcssファイル冒頭に任意の文字列を書き込む
const header = require('gulp-header');
const replace = require('gulp-replace'); // 文字置換用
// CSS圧縮
const compressCSS = require('gulp-clean-css');
// JavaScript圧縮
const compressJS = require('gulp-uglify');
// ファイルのリネーム
const rename = require('gulp-rename');

// 指定 ////////////////////////////////////////////
const filePathSCSS = '../sass/*.scss';
const filePathCSS = '../';
const filePathJS = '../js/*.js';
const filePathMinJS = '../js/min/';
const header_content = `@charset "UTF-8";
/*! CSS Document */
/*!
Theme Name: conscious
*/
`;

// タスク作成 ////////////////////////////////////////////
gulp.task("default", () => {
  // ★ .scssファイルを監視
  return gulp.watch(filePathSCSS, () => {
    // .scssファイルを取得
    return (
      gulp.src(filePathSCSS)
				// 複数のSassファイルを結合
        .pipe(concat('style.css'))
        // Sassのコンパイルを実行
        .pipe(
          sass({
            outputStyle: "expanded",
          })
          // Sassのコンパイルエラーを表示
          // (これがないと自動的に止まってしまう)
          .on("error", sass.logError)
        )
        // コンパイル後のcssファイル冒頭に任意の文字列を書き込む
        .pipe(header(header_content))
        // 自動で付与される@charset指定を削除
        .pipe(replace(/@charset "UTF-8";/g, ''))
				// CSS圧縮
        .pipe(compressCSS())

				// CSS保存
        .pipe(gulp.dest(filePathCSS))
    );
  });
});

// gulp.task("default", () => {
//   // ★ JSファイルを監視
//   return gulp.watch(filePathJS, () => {
// 		// JSファイルを取得
// 		gulp.src(filePathJS)
// 			// 複数のJSファイルを結合
// 			.pipe(concat('script.js'))
// 			// JS圧縮
// 			.pipe(compressJS())
// 			// ファイルのリネーム
// 			// .pipe(rename({
// 			// 	extname: '.min.js'
// 			// }))

// 			// JS保存
// 			.pipe(gulp.dest(filePathMinJS))
//   });
// });
