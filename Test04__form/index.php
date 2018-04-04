<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS"> -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Test04__form</title>

  <link href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/exvalidation.css">
  <link rel="stylesheet" href="css/test04.css">

</head>

<body>
  <header class="head">
    <div class="head__bg">
      <h1 class="head__text">H1が入ります）世界中で踊れるサルサをメインとしたダンススタジオ</h1>
    </div>
    <img src="images/logo_top.svg" alt="Logo" class="hidesp">
    <img src="images/logo_topsp.svg" alt="Logo SP" class="head__resizeimg hide">
  </header>


  <a href="" class="url url--top">TOP</a>
  <span class="url">&gt;</span>
  <a href="" class="url url--next">お問い合わせ</a>
  <section class="center">
    <h1 class="maintitle">お問い合わせ</h1>
  </section>

  <div class="blueban">
    <h2 class="blueban__title">
      お電話からのお問い合わせ
    </h2>

    <h3 class="blueban__script">ご質問やお問い合わせもお気軽にどうぞ</h3>

    <div class="blueban__timemar">
      <img src="images/img_phonenumsp.png" alt="phone" class="blueban__phonenum hide">
      <img src="images/img_phonenum.png" alt="phone" class="blueban__phonenum hidesp">
      <span class="blueban__time">【営業時間】00:00〜00:00（◯・◯を除く）</span>
    </div>

    <h2 class="blueban__title">WEBからのお問い合わせ</h2>
    <div class="container">
      <p class="container__under">お問い合わせ内容と必要項目を入力し、
        <span class="break">「入力内容を確認する」ボタンを押してください。</span>
        <br>
        <span class="container__under--red">【必須】</span>項目は必ず入力してください。
      </p>
      <div class="container__pad">
        <img src="images/img_step1.jpg" alt="" class="hidesp widhun">
        <img src="images/img_step1sp.jpg" alt="" class="hide widhun">
      </div>
    </div>
  </div>

  <form action="step2.php" method="post" onsubmit="return check()" id="frmContact" name="form1" class="form-1">
    <table class="formcontainer formcontainer--mar">
      <tr class="formcontainer__bor">
        <th class="formcontainer__col1 formcontainer__col1--red">
          <span class="formcontainer__ban formcontainer__ban--red">必須</span>
          <p class="formcontainer__col1__text formcontainer__col1__text--main">お問い合わせ内容</p>
        </th>
        <td class="formcontainer__col2">
          <select name="request" id="request">
            <option value="インストラクターの派遣">インストラクターの派遣</option>
            <option value="スタジオレンタル">スタジオレンタル</option>
            <option value="レッスンに関するご質問・お問い合わせ">レッスンに関するご質問・お問い合わせ</option>
            <option value="イベントの出演依頼">イベントの出演依頼</option>
            <option value="その他">その他</option>
          </select>
        </td>
      </tr>
      <!--page1-->
      <tr class="formcontainer__bor page125 hideform">
        <th class="formcontainer__col1 formcontainer__col1--red">
          <span class="formcontainer__ban formcontainer__ban--grey">任意</span>
          <p class="formcontainer__col1__text formcontainer__col1__text--main">ご希望のジャンル</p>
        </th>
        <td class="formcontainer__col2">
          <select name="genre" id="genre">
            <option value="" disabled selected>選択してください</option>
            <option value="ラ アバナ">ラ アバナ</option>
            <option value="ケイブ">ケイブ</option>
            <option value="サハラ">サハラ</option>
            <option value="ステラ">ステラ</option>
          </select>
        </td>
      </tr>
      <!--page2-->
      <tr class="formcontainer__bor page25 hideform">
        <th class="formcontainer__col1 formcontainer__col1--red">
          <span class="formcontainer__ban formcontainer__ban--red">必須</span>
          <p class="formcontainer__col1__text formcontainer__col1__text--main">レンタル希望日</p>
        </th>
        <td class="formcontainer__col2" id="tdaddrowp2">
          <input type="text" name="datepicker" id="datepicker" class="formcontainer__inputdate" placeholder="例） 0000/00/00">
          <div class="formcontainer__col2--styletext">
            <p class="formcontainer__col2--text" id="addrowp2"><span class="formcontainer__col2--borlink">希望日を追加</span></p>
          </div>
        </td>
      </tr>
      <!--page5-->
      <tr class="formcontainer__bor page5 hideform">
        <th class="formcontainer__col1 formcontainer__col1--green">
          <span class="formcontainer__ban formcontainer__ban--grey">任意</span>
          <p class="formcontainer__col1__text formcontainer__col1__text--main">ご予算</p>
        </th>
        <td class="formcontainer__col2">
          <input type="text" name="budget" id="budget" placeholder="例）00,000" class="smallin"> 円
        </td>
      </tr>

      <!--general page-->
      <tr class="formcontainer__bor">
        <th class="formcontainer__col1 formcontainer__col1--red">
          <span class="formcontainer__ban formcontainer__ban--red">必須</span>
          <p class="formcontainer__col1__text formcontainer__col1__text--main">名前</p>
        </th>
        <td class="formcontainer__col2">
          <input type="text" name="username" id="username" placeholder="例） 山田 花子">
        </td>
      </tr>
      <tr class="formcontainer__bor">
        <th class="formcontainer__col1 formcontainer__col1--red">
          <span class="formcontainer__ban formcontainer__ban--red">必須</span>
          <p class="formcontainer__col1__text formcontainer__col1__text--main">フリガナ</p>
        </th>
        <td class="formcontainer__col2">
          <input type="text" name="voice" id="voice" placeholder="例） ヤマダ ハナコ">
        </td>
      </tr>
      <tr class="formcontainer__bor hidefor4">
        <th class="formcontainer__col1 formcontainer__col1--green">
          <span class="formcontainer__ban formcontainer__ban--grey">任意</span>
          <p class="formcontainer__col1__text formcontainer__col1__text--main">会社・団体名</p>
        </th>
        <td class="formcontainer__col2">
          <input type="text" name="company" id="company" placeholder="例） 株式会社サルサベリー">
        </td>
      </tr>
      <tr class="formcontainer__bor">
        <th class="formcontainer__col1 formcontainer__col1--red">
          <span class="formcontainer__ban formcontainer__ban--red">必須</span>
          <p class="formcontainer__col1__text formcontainer__col1__text--main">電話番号</p>
        </th>
        <td class="formcontainer__col2">
          <input type="text" name="tel" id="tel" placeholder="例） 00000000000">
        </td>
      </tr>
      <tr class="formcontainer__bor">
        <th class="formcontainer__col1 formcontainer__col1--red">
          <span class="formcontainer__ban formcontainer__ban--red">必須</span>
          <p class="formcontainer__col1__text formcontainer__col1__text--main">メールアドレス</p>
        </th>
        <td class="formcontainer__col2">
          <input type="text" name="email" id="email" placeholder="例） sample@sample.com">
        </td>
      </tr>
      <tr class="formcontainer__bor">
        <th class="formcontainer__col1 formcontainer__col1--green">
          <span class="formcontainer__ban formcontainer__ban--grey">任意</span>
          <p class="formcontainer__col1__text formcontainer__col1__text--main">住所</p>
        </th>
        <td class="formcontainer__col2">
          〒
          <input type="text" name="zip11" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');" placeholder="例） 00000000000"
            class="smallin smallin--mar">
          <p class="formcontainer__col2__autoaddress">※郵便番号を入力すると、自動で住所が入力されます。</p>
          <input type="text" name="addr11" size="60" placeholder="例） 愛知県名古屋市中区〇〇" class="bigin">
        </td>
      </tr>

      <!--page end-->
      <tr class="formcontainer__bor  pageend">
        <th class="formcontainer__col1 formcontainer__col1--green">
          <span class="formcontainer__ban formcontainer__ban--red">必須</span>
          <p class="formcontainer__col1__text formcontainer__col1__text--main">内容の詳細・備考</p>
        </th>
        <td class="formcontainer__col2">
          <textarea name="comment" id="comment" cols="30" rows="8" class="bigtextarea"></textarea>
        </td>
      </tr>

    </table>

    <footer class="foot">
      <div class="formcontainer">
        <p class="foot__text">
          【個人情報の取扱いについて】
          <br>・本フォームからお客様が記入・登録された個人情報は、資料送付・電子メール送信・電話連絡などの目的で利用・保管します
          <br>・プライバシーポリシーについてはこちらをご覧ください。</p>
        <label for="" class="foot__agree">
          <input type="checkbox" name="check1" id="check1" value="ok"> 個人情報の取扱いに同意する
          <span></span>
        </label>
        <button name="action" class="foot__redbut" value="入力内容を確認する">入力内容を確認する</button>

        <p class="foot__info">上記フォームで送信できない場合は、必要項目をご記入の上、
          <span class="foot__mail">info@sample.co.jp</span>までメールをお送りください。</p>
        <p class="foot__copyright">Copyright © 仮）名古屋でベリーダンス・サルサならエルメスダンススタジオ.All Rights Reserved.</p>
      </div>
    </footer>
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
  <script src="js/exchecker-ja.js"></script>
  <script src="js/exvalidation.js"></script>
  <script src="js/test04.js"></script>
</body>



</html>