<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>WORK15</title>
</head>
<body>
    <?php
    $class01=["tokugawa","oda","toyotomi","takeda"];
    $class02=["minamoto","taira","sugawara","fujiwara"];
    $school=[$class01,$class02];

    // $test=rand(1,100);
    // echo "<p>class01の".$class01[0]."さんは".$test."点です。</P>";
    // $class01[0]=$test;

    for($j=1;$j<3;$j++){
        for($i=0;$i<4;$i++){
            $test=rand(1,100);
            echo "<p>class0".$j."の".${'class0'.$j}[$i]."さんは".$test."点です。</P>"; 
            ${'class0'.$j}[$i]=$test;
        }
    }

    <pre>
    echo "<p>".$school[0][1]."</P>";
    print_r($school);

    if($school[0][1]>$school[1][2]){
        echo "<p>odaさんの方が点数が高いです。</P>";
    }else if($school[0][1]<$school[1][2]){
        echo "<p>sugawaraさんの方が点数が高いです。</P>";
    }else{
        
    }


    // for($k=0;$k<8;)
    ?>

</body>
</html>