<!DOCTYPE  html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>WORK17</title>
    </head>
    <body>
        <div>名前を書いてください</div>
        <form method="post">
            <input type="text" name="name_text">
            <div>彼(彼女、または自分)は…</div>
            <input type="checkbox" name="check[]" value="グッド">グッド
            <input type="checkbox" name="check[]" value="グレート">グレート
            <input type="checkbox" name="check[]" value="うわー！">うわー！！！
            <input type="submit" value="送信">(複数回答可)</input>
        </form>
        <?php
            $name = htmlspecialchars($_POST['name_text'], ENT_QUOTES, 'UTF-8');
            $check = $_POST["check"];
            $checkbox=array();
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if($name != "" && isset($check)) {
                    print  $name."は";
                    for($i = 0;$i < count($check);$i++){
                        print $check[$i];
                        array_push($checkbox,$check[$i]);
                    }
                    print "です。";
                }else if($name != ""){
                    print 'チェックボックスにチェックを入れてください。';
                }else if(isset($check)){
                    print '名前を入力してください';
                }else{
                    print '何か入力して…';
                }
            }

        var_dump($_GET["page_id"]);
        ?>
         <pre>
            <?php
            echo print_r($checkbox);
            ?>
        </pre>
    </body>
</html>