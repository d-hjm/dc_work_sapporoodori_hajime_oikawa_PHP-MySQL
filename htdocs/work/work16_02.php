<!DOCTYPE  html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>WORK16</title>
    </head>
    <body>
        <?php 
            $name = htmlspecialchars($_GET['name_text'], ENT_QUOTES, 'UTF-8');
            $check = $_GET["check"];
            $checkbox=array();
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
        ?>
        <pre>
            <?php
            echo "<p>".print_r($checkbox);."</p>";
            print_r(getAllCombinations($check));
            ?>
        </pre>
        <?php 
            var_dump($check);
        ?>
    </body>
</html>