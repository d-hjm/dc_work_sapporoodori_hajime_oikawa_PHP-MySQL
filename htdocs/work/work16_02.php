<!DOCTYPE  html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>WORK16</title>
    </head>
    <body>
        <?php
            if( isset( $_GET['name_text'] ) && isset( $_GET['check[]'] )) {
                print  htmlspecialchars($_GET['name_text']."は".$_GET['check[]']."です。", ENT_QUOTES, 'UTF-8');
            }else if(isset( $_GET['name_text'] )&&isset( $_GET['check[]'] )===null){
                print 'チェックボックスにチェックを入れてください。';
            }else if(isset( $_GET['name_text'] )===""&&isset( $_GET['check[]'] )){
                print '名前を入力してください';
            }else{
                print '何か入力して…';
            }
        ?>
        <pre>
            <?php 
            print_r($_GET);
            ?>
        </pre>
            
        ?>
    </body>
</html>