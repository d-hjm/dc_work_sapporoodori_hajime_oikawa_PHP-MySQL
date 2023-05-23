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
            <input type="checkbox" name="check[]" value="グッド">グッド
            <input type="checkbox" name="check[]" value="グレード">グレート
            <input type="checkbox" name="check[]" value="うわー！">うわー！！！
            <input type="submit" value="送信">(複数回答可)</input>
        </form>
    </body>
</html>
