<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        echo 45 + 18;
        echo '<br>';
        var_dump(45 > 18);

        echo '<br>';

        $num = mt_rand(0,4);
        echo $num;
        echo '<br>';
        if ($num == 4) {
            echo '大当たりです！';
        }
        
        ?>
    </p>
</body>

</html>