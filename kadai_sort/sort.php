
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <?php

    // ソート関数を作成
    function sort_2way(&$array, $order)
    {
        // 昇順か降順かを判定
        if ($order === true) {
            sort($array);
        } else {
            rsort($array);
        }

        // ソート結果を1行ずつ表示
        foreach ($array as $value) {
            echo $value . "<br>";
        }
    }

    // ソートする配列を宣言
    $nums = [15, 4, 18, 23, 10];

    echo "昇順ソート<br>";
    sort_2way($nums, true);

    echo "降順ソート<br>";
    sort_2way($nums, false);

    ?>
</body>

</html>
