<?php
require_once ('function.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    <title><?php echo title(); ?></title>
    <style>
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo css(); ?>">
</head>
<body>
<?php
//エラー処理
if(isset($_GET['error']) && $_GET['error'] == 1){
    echo '<p>指定した画面を表示できませんでした。</p>';
}elseif(isset($_GET['error']) && $_GET['error'] == 2){
    echo '<p>枚数が入力されていません。</p>';
}
?>
<div id="wrapper">
    <header>
        <h1>チケット販売ページ</h1>
    </header>
    <div id="contents">
        <main>
            <form method="POST" action="kakunin.php">
                <div>席種:
                    <select name="seatId">
                        <option value="0">S席</option>
                        <option value="1">A席</option>
                        <option value="2">B席</option>
                        <option value="3">C席</option>
                    </select>
                </div>
                <div>
                    <input type="radio" name="generalstudent" value="1" checked>一般
                    <input type="radio" name="generalstudent" value="2">小中高
                </div>
                <div>枚数:<input type="number" name="number"></div>
                <div><input type="submit" value="購入"></div>
            </form>
        </main>
    </div>
    <footer>
    </footer>
</div>
</body>
