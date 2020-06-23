<?php
require_once ('function.php');
require_once ('tickettable_class.php');
$tickettable = new ticketTable(db());

if(!isset($_POST['seatId'],$_POST['generalstudent'],$_POST['number'])){
    header("Location: http://mmr.e5.valueserver.jp/quiz/index.php?error=1");
    exit();
}
$seatId = $_POST['seatId'];
$generalstudent = $_POST['generalstudent'];
$number = $_POST['number'];
$ticket = $tickettable->getTicket($seatId,$generalstudent);

var_dump($ticket);

//$karahantei = str_replace(array(" ", "　"), "", $name);
//if(empty($karahantei)){
//    header("Location: http://mmr.e5.valueserver.jp/quiz/quiz.php?error=2");
//    exit();
//}
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
            <p>席種:<?php echo $seatType; ?></p>
            <p>単価:<?php echo $seatType; ?></p>
            <p>枚数:<?php echo $number; ?></p>
            <p>金額:<?php echo $seatType; ?></p>
        </main>
    </div>
    <footer>
    </footer>
</div>
</body>
