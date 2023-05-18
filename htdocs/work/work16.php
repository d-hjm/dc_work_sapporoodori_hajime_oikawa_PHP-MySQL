<!DOCTYPE  html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>WORK16</title>
    </head>
    <body>
        <div>名前を書いてください</div>
        <form method="get" action="work16_02.php">
            <input type="text" name="name_text">
        <div>彼(彼女、または自分)は…</div>
            <input type="checkbox" name="check[]">グッド</input>
            <input type="checkbox" name="check[]">グレート</input>
            <input type="checkbox" name="check[]">うわー！！！</input>
            <input type="submit" value="送信">(複数回答可)</input>
        </form>
    </body>
</html>

$_GET={name,check[0,1,2]}
