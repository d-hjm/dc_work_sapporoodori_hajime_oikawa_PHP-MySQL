<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>WORK15</title>
</head>
<body>
    <?php
    $school=[$class01,$class02];
    $class01=["tokugawa","oda","toyotomi","takeda"];
    $class02=["minamoto","taira","sugawara","fujiwara"];

    for($j=0;$j<2;$j++){
        for($i=0;$i<4;$i++){
            $test=rand(1,100);
            echo "<p>class0".$j."の".$class01[$i]."さんは".$test."点です。</P>";
        }
    }
    ?>

</body>
</html>