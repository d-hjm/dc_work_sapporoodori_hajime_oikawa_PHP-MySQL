<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>WORK07</title>
</head>
<body>
    <!-- 要件1　ランダムに生成された1~100の正の整数が判定され、下記のように表示される。 -->
    <?php $score = rand(1,100); ?>  <!-- 1~100までのランダムな数値を取得 -->
    <p>取得した整数は<?php echo $score ?>です。</p>
        
    <?php if ($score%3===0&&$score%6===0): ?>
            <p>3と6の倍数です。</p>'; <!--3の倍数かつ6の倍数である場合：「3と6の倍数です」と表示 -->
    <?php elseif ($score%3===0&&$score%6!==0): ?>
            <p>3の倍数で、6の倍数ではありません。</p> <!--3の倍数であるが、6の倍数ではない場合：「3の倍数で、6の倍数ではありません」と表示 -->
    <?php elseif ($score%3!==0): ?>
            <p>倍数ではありません</p> <!-- 3の倍数ではない場合：「倍数ではありません」と表示 -->
    <?php endif; ?>
    
    <!-- 要件2 ランダムに生成された1~10の正の整数（random01, random02）が判定され、下記の例ように(1)生成された数(2)どちらが大きいか(3)3の倍数の個数が表示される。 -->

    <!-- 違う数の場合「random01 = 3, random02 = 4 です。 random02の方が大きいです。2つの数字の中には3の倍数が1つ含まれています。」 -->
    <!-- 同じ数の場合「random01 = 3, random02 = 3 です。 2つは同じ数です。2つの数字の中には3の倍数が2つ含まれています。」 -->
    <!-- 3の倍数が含まれていない場合、後半の文章は「2つの数字の中に3の倍数が含まれていません」と表示 -->
        
    <?php $random01 = rand(1,10);
          $random02 = rand(1,10); ?>

    <?php if($random01>$random02): 
            if($random01%3===0&&$random02%3===0): ?>
                <p>random01 = <?php echo $random01 ?>、random02 = <?php echo $random02 ?>です。random01の方が大きいです。2つの数字の中には3の倍数が2つ含まれています。</p>
            <?php elseif($random01%3===0||$random02%3===0): ?>
                <p>random01 = <?php echo $random01 ?>、random02 = <?php echo $random02 ?>です。random01の方が大きいです。2つの数字の中には3の倍数が1つ含まれています。</p>
            <?php elseif($random01%3!==0&&$random02%3!==0): ?>
                <p>random01 = <?php echo $random01 ?>、random02 = <?php echo $random02 ?>です。random01の方が大きいです。2つの数字の中には3の倍数が含まれていません。</p>
            <?php endif; ?>
    <?php elseif($random01<$random02):
            if($random01%3===0&&$random02%3===0): ?>
                <p>random01 = <?php echo $random01 ?>、random02 = <?php echo $random02 ?>です。random02の方が大きいです。2つの数字の中には3の倍数が2つ含まれています。</p>
            <?php elseif($random01%3===0||$random02%3===0): ?>
                <p>random01 = <?php echo $random01 ?>、random02 = <?php echo $random02 ?>です。random02の方が大きいです。2つの数字の中には3の倍数が1つ含まれています。</p>
            <?php elseif($random01%3!==0&&$random02%3!==0): ?>
                <p>random01 = <?php echo $random01 ?>、random02 = <?php echo $random02 ?>です。random02の方が大きいです。2つの数字の中には3の倍数が含まれていません。</p>
            <?php endif; ?>
    <?php elseif($random01===$random02):
            if($random01%3===0&&$random02%3===0): ?>
                <p>random01 = <?php echo $random01 ?>、random02 = <?php echo $random02 ?>です。2つは同じ数です。2つの数字の中には3の倍数が2つ含まれています。</p>
            <?php elseif($random01%3===0||$random02%3===0): ?>
                <p>random01 = <?php echo $random01 ?>、random02 = <?php echo $random02 ?>です。2つは同じ数です。2つの数字の中には3の倍数が1つ含まれています。</p>
            <?php elseif($random01%3!==0&&$random02%3!==0): ?>
                <p>random01 = <?php echo $random01 ?>、random02 = <?php echo $random02 ?>です。2つは同じ数です。2つの数字の中には3の倍数が含まれていません。</p>
            <?php endif;
    endif; ?>
</body>
</html>