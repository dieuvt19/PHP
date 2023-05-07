<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="content">
        <?php
            function createBox($content, $width=150, $height=50){
                $result = '<div style="width:'.$width.'px; height: '.$height.'px; border: 1px solid black;">';
                $result .= '<p>'.$content.'<span>('.$width.'x'.$height.')</span></p>';
                $result .= '</div>';
                return $result;
            }
            $boxA = createBox('Box A', 300, 200);
            $boxB = createBox('Box B');
            echo $boxA;
            echo $boxB;
        ?>
    </div>
</body>
</html>
