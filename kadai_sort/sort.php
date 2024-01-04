<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
          $nums = [15, 4, 18, 23, 10];

          function sort_2way($array, $order) {
            //昇順・降順
            if ($order == TRUE) {
              echo"昇順にソートします。<br>";
              sort($array);
            } elseif ($order == false){
              echo"降順にソートします。<br>";
              rsort($array);
            }
            //値を出力
            foreach ($array as $num) {
              echo $num . "<br>";
            }
          }

          sort_2way($nums, TRUE);

          sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>