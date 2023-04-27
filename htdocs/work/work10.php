<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>WORK10</title>
</head>
<body>
    <?php
        for($i=1;$i<=100;$i++){
            if($i%3===0&&$i%4===0):
                print 'Fizz Buzz';
            elseif($i%3===0):
                print 'Fizz';
            elseif($i%4===0):
                print 'Buzz';
            else:
                print $i;
            endif;
        }
    ?>

    <p>1</p>
    <?php 
        for($j=1;$j<=9;$j++){
            for($k=1;$k<=9;$k++){
                print '<p>'.$j.'*'.$k.'</p>';
            }
        }

        $p=print '*';
        
        for($l=1;$l<=9;$l++){
            if($l>9):
                print '<p>'.$l*$p.'</p>';
                print '!';
            else:
                print '<p>'.$l*$p.'</p>';
                print '!';
                print '<p>'.($l+1)*$p.'</p>';
            endif;
        }
    ?>
</body>
</html>