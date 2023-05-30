<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>WORK19</title>
</head>
<body>
    <form method="post">
        <?php $fp_w=fopen("read&write.txt","w"); ?>
            <div>タイトル</div>
            <input type="text" name="textarea"><?php $title=""; ?> 
            <br>
            <div>書き込み内容</div>
            <input type="text" name="textarea"><?php $content=""; ?>
            <br>
            <br>
            <input type="submit" value="送信">
            <br>
        <?php
            fwrite($fp_w,$title.":".$content);
            

            $fp_r=fopen("read&write.txt","r");
            $line=fget($fp_r);
            echo $line;

            fclose($fp_r);
        ?>
    </form>



        
</body>
</html>