<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $sum = 0;

        while ($sum <= 20) {
            $num = mt_rand(0, 10);
            echo "{$num}が出ました。<br>";

            if ($num % 2 == 0) {
                echo "{$num}が偶数なので加算しません。<br>";
                continue;
            }

            $sum += $num;
            echo "現在の合計は{$sum}です。<br>";

        }

        ?>
    </p>
</body>

</html>