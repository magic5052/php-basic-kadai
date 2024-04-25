<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        for ($i = 0; $i <= 10; $i++) {
            echo $i . "<br>";
        }
        ?>
    </p>
    <p>
        <?php

        for($i = 1; $i<=10; $i++) {
            $num = mt_rand(0,20);
            echo "{$i}番目の数字は{$num}です。<br>";

            if ($num == 20) {
                echo "{$num}が出たので繰り返し処理を強制終了します。";
                break;
            }
        }
        ?>
    </p>
</body>

</html>