// プラグイン読み込み ////////////////////////////////////////////
// gulpプラグイン
const gulp = require('gulp');
// Sassをコンパイル
const sass = require('gulp-sass')(require('sass'));
// 複数のSassファイルを結合
const concat = require('gulp-concat');
// コンパイル後のcssファイル冒頭に任意の文字列を書き込む
const header = require('gulp-header');
const replace = require('gulp-replace');


// プラグイン読み込み ////////////////////////////////////////////
const filePath_scss = '../sass/*.scss';
const filePath_css = '../';
const header_content = `@charset "UTF-8";
/* CSS Document */
/*
Theme Name: conscious
*/
`;


// タスク作成 ////////////////////////////////////////////
gulp.task("default", () => {
  // ★ style.scssファイルを監視
  return gulp.watch(filePath_scss, () => {
    // style.scssの更新があった場合の処理

    // style.scssファイルを取得
    return (
      gulp.src(filePath_scss)
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
        .pipe(replace(/@charset "UTF-8";/g, ''))
        .pipe(header(header_content))
        // 指定ディレクトリに保存
        .pipe(gulp.dest(filePath_css))
    );
  });
});
