<?php
    $shortage="";
    $title = $_POST["title"];
    $content = $_POST["content"];
    if($title == "" || $content == ""){
        $shortage="入力情報が不足しています";
    }else{
        $fp_w=fopen("read&write.txt","a");
        fwrite($fp_w,$title.":".$content."\n");
        // ftruncate($fp_w,0);
        fclose($fp_w);
    }
    $data = file_get_contents("read&write.txt");
    $data = explode( "\n", $data);
    $array = array_reverse($data);
    $cnt = count($array);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>WORK19</title>
</head>
<body>
    <form method="post">
            <p> <?php echo $shortage ?> </p>
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
    <ul>
        <?php for($i=1;$i<$cnt;$i++):?>
                <li> <?php echo $array[$i]."<br>"; ?> </li>
        <?php endfor; ?>
    </ul>
</body>
</html>
