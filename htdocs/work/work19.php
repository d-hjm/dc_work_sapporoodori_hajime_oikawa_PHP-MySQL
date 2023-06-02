


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>WORK19</title>
</head>
<body>
    <form method="post">
            <div ><input type="text" name="">
            <div>タイトル</div>
            <input type="text" name="title">
            <br>
            <div>書き込み内容</div>
            <input type="text" name="content">
            <br>
            <br>
            <input type="submit" value="送信">
            <br>
    </form>
    <?php

        $title = $_POST["title"];
        $content = $_POST["content"]."\n";

        $fp_w=fopen("read&write.txt","a");
        fwrite($fp_w,$title.":".$content);

        $data = file_get_contents("read&write.txt");
        $data = explode( "\n", $data);
        $cnt = count($data);
        $array = array_reverse($data);
        if($title !== ""&&$content !== ""){
            for($i=0;$i<$cnt;$i++){
                echo "$array[$i]<br>";
            }
        }else{
            $miss="入力情報が不足しています<br>";
            for($i=0;$i<$cnt;$i++){
                echo "$array[$i]<br>";
            }
        }

        // ftruncate($fp_w,0);
        // print_r($data);
        fclose($fp_w);
    ?>
</body>
</html>
