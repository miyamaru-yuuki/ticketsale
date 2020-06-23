<?php
require_once ('function.php');
require_once ('tickettable_class.php');
$tickettable = new ticketTable(db());
$seatType = $tickettable->getTicketAll();
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
                        <?php
                        foreach ($seatType as $data){
                            echo '<option value="' .$data->getSeatId(). '">' .$data->getSeatType(). '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <input type="radio" name="generalstudent" value="0">一般
                    <input type="radio" name="generalstudent" value="1">小中高
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
