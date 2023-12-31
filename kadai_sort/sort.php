<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
          function sort_2way($order) {
            $nums = [15, 4, 18, 23, 10];
            //昇順・降順
            if ($order == TRUE) {
              echo"昇順にソートします。";
              echo"<br>";
              sort($nums);
            } elseif ($order == false){
              echo"降順にソートします。";
              echo "<br>";
              rsort($nums);
            }
            //値を出力
            foreach ($nums as $array) {
              echo $array . "<br>";
            }
          }

          sort_2way(TRUE);

          sort_2way(FALSE);
        ?>
    </p>
</body>

</html>