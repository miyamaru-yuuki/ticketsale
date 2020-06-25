<?php
require_once ('function.php');
require_once ('ticket_class.php');
if(!isset($_POST['seatId'],$_POST['generalstudent'],$_POST['number'])){
    header("Location: http://mmr.e5.valueserver.jp/ticketsale/index.php?error=1");
    exit();
}
$seatId = $_POST['seatId'];
$generalstudent = $_POST['generalstudent'];
$number = $_POST['number'];

$karahantei = str_replace(array(" ", "　"), "", $number);
if(empty($karahantei)){
    header("Location: http://mmr.e5.valueserver.jp/ticketsale/index.php?error=2");
    exit();
}
$ticket = new Ticket($seatId,$generalstudent,null);
$seatName = $ticket->getSeatName();
$tanka = $ticket->getTanka();
$kingaku = $tanka * $number;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    <title><?php echo title(); ?></title>
    <style>
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo css(); ?>?ver=3">
</head>
<body>
<div id="wrapper">
    <header>
        <h1>確認</h1>
    </header>
    <div id="contents">
        <main>
            <p>席種:<?php echo $seatName; ?></p>
            <p>単価:<?php echo $tanka; ?></p>
            <p>枚数:<?php echo $number; ?></p>
            <p>金額:<?php echo $kingaku; ?>円</p>
            <h3>支払い方法</h3>
            <form method="POST" action="kanryou.php">
                <div>支払い方法:
                    <select name="paymentId">
                        <option value="0">カード</option>
                        <option value="1">銀行</option>
                    </select>
                    <div><input type="hidden" name="kingaku" value="<?php echo $kingaku; ?>"></div>
                    <input type="submit" value="購入">
                </div>
            </form>
        </main>
    </div>
    <footer>
    </footer>
</div>
</body>
