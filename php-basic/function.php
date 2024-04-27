<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        function type_hinting_argument (int $num) {
            return $num * 2;
        }

        echo type_hinting_argument(2);

        ?>
    </p>
</body>

</html>