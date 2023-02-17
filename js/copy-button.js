// コピーするボタンを作成
const preTags = document.querySelectorAll('pre');
preTags.forEach(preTag => {
  const codeTag = preTag.querySelector('code');
  const copyButton = document.createElement('button');
  copyButton.innerText = 'copy';
  copyButton.className = 'code-button';
  preTag.appendChild(copyButton);

  // コピーするボタンがクリックされたときの処理
  copyButton.addEventListener('click', () => {
    // コピーするテキストを作成
    const text = codeTag.innerText;

    // テキストエリアを作成して、コピーするテキストを設定
    const textArea = document.createElement('textarea');
    textArea.value = text;
    document.body.appendChild(textArea);

    // テキストエリアを選択して、コピーを実行
    textArea.select();
    document.execCommand('copy');

    // テキストエリアを削除
    document.body.removeChild(textArea);

    // コピー完了を表示
    copyButton.innerText = 'done!';
    setTimeout(() => {
      copyButton.innerText = 'copy';
    }, 3000);
  });
});
