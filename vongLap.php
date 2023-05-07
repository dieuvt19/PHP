<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vẽ tam giác</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <h1>Vẽ tam giác</h1>
        <ul>
            <li><a href="vongLap.php?type=1"><img src="images-rose/01.jpg" alt=""></a></li>
            <li><a href="vongLap.php?type=2"><img src="images-rose/02.jpg" alt=""></a></li>
            <li><a href="vongLap.php?type=3"><img src="images-rose/03.jpeg" alt=""></a></li>
        </ul>

        <div class="result">
            <?php
                $result = '';
                if (isset($_GET['type'])) {
                    $type = $_GET['type'];
                    switch ($type) {
                        case 1:
                          $i = 1;
                          $n = 10;
                          while ($i <= $n) {
                              $result .= str_repeat('*',$i) . '<br>';
                              $i++;
                          }
                        break;
                        case 2:
                          $i = 6;
                          $n = 10;
                          while ($i >= 1) {
                              $result .= str_repeat('*',$i) . '<br>';
                              $i--;
                          }
                        break;
                        case 3:
                          $i = 1;
                          $n = 10;
                          while ($i <= $n) {
                              $space = str_repeat('&nbsp;&nbsp',$n - $i);
                              $character = str_repeat('*',$i*2-1);
                              $result .= $space . $character . '<br />';
                              $i++;
                          }
                        break;
                    }
                    echo $result;
                }
            ?>
        </div>
    </div>

</body>
</html>