<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>WORK05</title>
</head>
<body>
    <?php 
    // 要件1　ランダムに生成された1~100の正の整数が判定され、下記のように表示される。
        $score = rand(1,100);		// 1~100までのランダムな数値を取得
        print '取得した整数は'.$score.'です。</p>';
        switch(true) {
            case $score%3===0&&$score%6===0:
            print '<p>3と6の倍数です。</p>'; //3の倍数かつ6の倍数である場合：「3と6の倍数です」と表示
            break;
            case $score%3===0&&$score%6!==0:
            print '<p>3の倍数で、6の倍数ではありません。</p>'; // 3の倍数であるが、6の倍数ではない場合：「3の倍数で、6の倍数ではありません」と表示
            break;
            case $score%3!==0:
            print '<p>倍数ではありません</p>'; // 3の倍数ではない場合：「倍数ではありません」と表示
            break;
        }
    
    //要件2 ランダムに生成された1~10の正の整数（random01, random02）が判定され、下記の例ように(1)生成された数(2)どちらが大きいか(3)3の倍数の個数が表示される。

    // 違う数の場合「random01 = 3, random02 = 4 です。 random02の方が大きいです。2つの数字の中には3の倍数が1つ含まれています。」
    // 同じ数の場合「random01 = 3, random02 = 3 です。 2つは同じ数です。2つの数字の中には3の倍数が2つ含まれています。」
    // 3の倍数が含まれていない場合、後半の文章は「2つの数字の中に3の倍数が含まれていません」と表示
        
        $random01 = rand(1,10); 
        $random02 = rand(1,10);

        switch(true){
            case $random01>$random02:
                switch(true){
                    case $random01%3===0&&$random02%3===0:
                    print '<p>random01 = '.$random01.'、random02 = '.$random02.'です。random01の方が大きいです。2つの数字の中には3の倍数が2つ含まれています。</p>';
                    break; 
                    case $random01%3===0||$random02%3===0:
                    print '<p>random01 = '.$random01.'、random02 = '.$random02.'です。random01の方が大きいです。2つの数字の中には3の倍数が1つ含まれています。</p>';
                    break; 
                    case $random01%3!==0&&$random02%3!==0:
                    print '<p>random01 = '.$random01.'、random02 = '.$random02.'です。random01の方が大きいです。2つの数字の中には3の倍数が含まれていません。</p>';
                    break; 
                }
            case $random01<$random02:
                switch(true){
                    case $random01%3===0&&$random02%3===0:
                    print '<p>random01 = '.$random01.'、random02 = '.$random02.'です。random02の方が大きいです。2つの数字の中には3の倍数が2つ含まれています。</p>';
                    break; 
                    case $random01%3===0||$random02%3===0:
                    print '<p>random01 = '.$random01.'、random02 = '.$random02.'です。random02の方が大きいです。2つの数字の中には3の倍数が1つ含まれています。</p>';
                    break; 
                    case $random01%3!==0&&$random02%3!==0:
                    print '<p>random01 = '.$random01.'、random02 = '.$random02.'です。random02の方が大きいです。2つの数字の中には3の倍数が含まれていません。</p>';
                    break;
                }
            case $random01===$random02:
                switch(true){
                    case $random01%3===0&&$random02%3===0:
                    print '<p>random01 = '.$random01.'、random02 = '.$random02.'です。2つは同じ数です。2つの数字の中には3の倍数が2つ含まれています。</p>';
                    break;
                    case $random01%3===0||$random02%3===0:
                    print '<p>random01 = '.$random01.'、random02 = '.$random02.'です。2つは同じ数です。2つの数字の中には3の倍数が1つ含まれています。</p>';
                    break;
                    case $random01%3!==0&&$random02%3!==0:
                    print '<p>random01 = '.$random01.'、random02 = '.$random02.'です。2つは同じ数です。2つの数字の中には3の倍数が含まれていません。</p>';
                    break;
                };
        };
    ?>
</body>
</html>