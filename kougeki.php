<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    <title>攻撃</title>
    <style>
    </style>
</head>
<body>
<div id="wrapper">
    <header>
        <h1>クイズ</h1>
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
                    <input type="hidden" name="generalstudent" value="<script>alert(1)</script>">
                </div>
                <input type="hidden" name="number" value="3">
                <div><input type="submit" value="購入"></div>
            </form>
        </main>
    </div>
    <footer>
    </footer>
</div>
</body>
