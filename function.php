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
            function createBox(){
                $value = '<div style="width:200px; height: 50px;">';
                $value .= '<p>Box A <span>(200x50)</span></p>';
                $value .=  '</div>';
                return $value;
            }
            $result = createBox();
            echo $result;
        ?>
    </div>
</body>
</html>
