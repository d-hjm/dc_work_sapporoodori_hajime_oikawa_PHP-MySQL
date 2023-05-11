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

    for($j=1;$j<3;$j++){
        for($i=0;$i<4;$i++){
            $test=rand(1,100);
            echo "<p>class0".$j."の".${'class0'.$j}[$i]."さんは".$test."点です。</P>"; 
            ${'class0'.$j}[$i]=$test;
        }
    }

    if($school[0][1]>$school[1][2]){
        echo "<p>odaさんの方が点数が高いです。</P>";
    }else{
        echo "<p>sugawaraさんの方が点数が高いです。</P>";
    }


    // for($k=0;$k<8;)
    ?>

</body>
</html>