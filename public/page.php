<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $_GET["t"]; ?>｜A&D株式会社</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <a href="/" class="navbar-brand"><img src="/assets/img/s_ad.png" width="30"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#gnavi">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div id="gnavi" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="page.php?p=topics&t=お知らせ一覧">お知らせ一覧</a></li>
                <li><a href="/board">掲示板</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
<?php
echo file_get_contents("./pages/" . $_GET["p"]);
?>
</div>
    <footer>
        <div><a href="/page.php?p=policy&t=プライバシーポリシー">プライバシーポリシー</a> | <a href="/page.php?p=term&t=利用規約">利用規約</a> | <a href="/page.php?p=company&t=会社概要">会社概要</a> | <a href="/inquiry">お問い合わせ</a></div>
        <p>Copyright 2016 A&D株式会社 All rights reserved.</p>
    </footer>
</body>
</html>
