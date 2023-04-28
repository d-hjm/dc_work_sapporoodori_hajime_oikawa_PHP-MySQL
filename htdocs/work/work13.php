<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>WORK13</title>
</head>
<body>
    <?php
        $i=1;
        while($i<=100):
            if($i%3===0&&$i%4===0):
                print 'Fizz Buzz';
            elseif($i%3===0):
                print 'Fizz';
            elseif($i%4===0):
                print 'Buzz';
            else:
                print $i;
            endif;
            $i++;
        endwhile;
    ?>

    <p>1</p>
    <?php
        $j=1;
        while($j<=9):
            $k=1;
            while($k<=9):
                print '<p>'.$j.'*'.$k.'</p>';
                $k++;
            endwhile;
            $j++;
        endwhile;

        $l=1;
        while($l<=10):
            $n=1;
            while($n<=$l):
                print '*';
                $n++;
            endwhile;
            if($l<10):
                print '<p>!</p>';
            endif;
            $l++;
        endwhile;
    ?>
</body>
</html>