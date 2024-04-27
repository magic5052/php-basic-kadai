<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $personal_data = ['name' => 'andreas', 'age' => 30, 'gender' => 'male'];
        foreach ($personal_data as $key => $value) {
            echo "{$key}は{$value}です。<br>";
        }
        ?>
    </p>
    <p>出身地を選択してください。</p>
    <form>
        <select name="" id="">
            <?php
            $birthplaces = ['北海道地方', '東北地方', '関東地方', '中部地方', '近畿地方', '中国・四国地方', '九州地方'];

            foreach ($birthplaces as $birthplace) {
                echo "<option>{$birthplace}</option>";
            }
            ?>
        </select>
    </form>
</body>