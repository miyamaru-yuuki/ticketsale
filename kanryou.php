<?php
require_once ('function.php');
require_once ('ticket_class.php');
if(!isset($_POST['paymentId'],$_POST['kingaku'])){
    header("Location: http://mmr.e5.valueserver.jp/ticketsale/index.php?error=1");
    exit();
}
$paymentId = $_POST['paymentId'];
$kingaku = $_POST['kingaku'];
$ticket = new Ticket(null,null,$paymentId);
$payment = $ticket->getPayment();
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
        <h1>ありがとうございました</h1>
    </header>
    <div id="contents">
        <main>
            <p>支払い方法:<?php echo $payment; ?></p>
            <p>金額:<?php echo $kingaku; ?></p>
            <p><a href="index.php">戻る</a></p>
        </main>
    </div>
    <footer>
    </footer>
</div>
</body>
