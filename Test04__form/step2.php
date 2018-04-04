<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Step 1</title>

    <link rel="stylesheet" href="css/test04.css">
    <link rel="stylesheet" href="css/common.css">
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
        <h2 class="blueban__title">WEBからのお問い合わせ</h2>
        <div class="container">
            <div class="container__pad">
                <img src="images/img_step2.jpg" alt="" class="hidesp widhun">
                <img src="images/img_step2sp.jpg" alt="" class="hide widhun">
            </div>
        </div>
    </div>

    <table class="formcontainer formcontainer--marstep1">
        
        <tr class="formcontainer__bor">
            <th class="formcontainer__col1 formcontainer__col1--green">
                <p class="formcontainer__col1__text formcontainer__col1__text--step1">お問い合わせ内容</p>
            </th>
            <td class="formcontainer__col2 formcontainer__col2--step1">
            <?php if(isset($_POST["request"])) { echo $_POST["request"]; } ?>
            </td>
        </tr>
        <?php
            $request = $_POST['request'];
            if(($request=='インストラクターの派遣') ||($request=='スタジオレンタル')||($request=='イベントの出演依頼')){
            ?>
                <tr class="formcontainer__bor page25 hideform">
                    <th class="formcontainer__col1 formcontainer__col1--green">
                        <p class="formcontainer__col1__text formcontainer__col1__text--step1">ご希望のジャンル</p>
                    </th>
                    <td class="formcontainer__col2 formcontainer__col2--step1">
                        <?php if(isset($_POST["genre"])) { echo $_POST["genre"]; } ?>
                    </td>
                </tr>
            <?php
            }
            if(($request=='スタジオレンタル')||($request=='イベントの出演依頼')){
            ?>
                <tr class="formcontainer__bor page25 hideform">
                    <th class="formcontainer__col1 formcontainer__col1--green">
                    <p class="formcontainer__col1__text formcontainer__col1__text--step1">レンタル希望日</p>
                    </th>
                    <td class="formcontainer__col2 formcontainer__col2--step1">
                        <?php if(isset($_POST["datepicker"])) { echo $_POST["datepicker"]; } ?>
                    </td>
                </tr>
            <?php
            }
            if(($request=='イベントの出演依頼')){
            ?>
                <tr class="formcontainer__bor">
                    <th class="formcontainer__col1 formcontainer__col1--green">
                    <p class="formcontainer__col1__text formcontainer__col1__text--step1">ご予算</p>
                    </th>
                    <td class="formcontainer__col2 formcontainer__col2--step1">
                        <?php if(isset($_POST["budget"])) { echo $_POST["budget"]; } ?>
                    </td>
                </tr>
            <?php
            }
        ?>


        <tr class="formcontainer__bor">
            <th class="formcontainer__col1 formcontainer__col1--green">
                <p class="formcontainer__col1__text formcontainer__col1__text--step1">名前</p>
            </th>
            <td class="formcontainer__col2 formcontainer__col2--step1">
            <?php if(isset($_POST["username"])) { echo $_POST["username"]; } ?>
            </td>
        </tr>

        <tr class="formcontainer__bor">
            <th class="formcontainer__col1 formcontainer__col1--green">
                <p class="formcontainer__col1__text formcontainer__col1__text--step1">フリガナ</p>
            </th>
            <td class="formcontainer__col2 formcontainer__col2--step1">
            <?php if(isset($_POST["voice"])) { echo $_POST["voice"]; } ?>
            </td>
        </tr>

        <?php
            $request = $_POST['request'];
            if($request!='レッスンに関するご質問・お問い合わせ'){
            ?>
            <tr class="formcontainer__bor">
                <th class="formcontainer__col1 formcontainer__col1--green">
                    <p class="formcontainer__col1__text formcontainer__col1__text--step1">会社・団体名</p>
                </th>
                <td class="formcontainer__col2 formcontainer__col2--step1">
                    <?php if(isset($_POST["company"])) { echo $_POST["company"]; } ?>
                </td>
            </tr>
            <?php
            }
        ?>

        <tr class="formcontainer__bor">
            <th class="formcontainer__col1 formcontainer__col1--green">
                <p class="formcontainer__col1__text formcontainer__col1__text--step1">電話番号</p>
            </th>
            <td class="formcontainer__col2 formcontainer__col2--step1">
            <?php if(isset($_POST["tel"])) { echo $_POST["tel"]; } ?>
            </td>
        </tr>

        <tr class="formcontainer__bor">
            <th class="formcontainer__col1 formcontainer__col1--green">
                <p class="formcontainer__col1__text formcontainer__col1__text--step1">メールアドレス</p>
            </th>
            <td class="formcontainer__col2 formcontainer__col2--step1">
            <?php if(isset($_POST["email"])) { echo $_POST["email"]; } ?>
            </td>
        </tr>

        <tr class="formcontainer__bor">
            <th class="formcontainer__col1 formcontainer__col1--green">
                <p class="formcontainer__col1__text formcontainer__col1__text--step1">住所</p>
            </th>
            <td class="formcontainer__col2 formcontainer__col2--step1">
            <?php if(isset($_POST["addr11"])) { echo $_POST["addr11"]; } ?>
            </td>
        </tr>

        <tr class="formcontainer__bor">
            <th class="formcontainer__col1 formcontainer__col1--green">
                <p class="formcontainer__col1__text formcontainer__col1__text--step1">内容の詳細・備考</p>
            </th>
            <td class="formcontainer__col2 formcontainer__col2--step1">
            <?php if(isset($_POST["comment"])) { echo $_POST["comment"]; } ?>
            </td>
        </tr>

    </table>

    <div class="container link">
        <a href="index.php" class="link__mar">◀ 内容を修正する</a>
    </div>

    <footer class="center">
        <form action="thanks.php" class="foot__sizebut">
            <input type="submit" class="foot__redbut" value="入力内容を確認する" />
        </form>
        <p class="foot__info">上記フォームで送信できない場合は、必要項目をご記入の上、
                <span class="foot__mail">info@sample.co.jp</span>までメールをお送りください。</p>
              <p class="foot__copyright">Copyright © 仮）名古屋でベリーダンス・サルサならエルメスダンススタジオ.All Rights Reserved.</p>
        </div>
    </footer>


    <?php
    $request = $_POST['request'];
    echo 'bien la :' . $request;
    die();
        if($request==''){
            ?>
            <div></div>
               hahahah 
            <?php
        }
    ?>
</body>

</html>