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
                echo '<div style="width:200px; height: 50px;">';
                echo '<p>Box A <span>(200x50)</span></p>';
                echo '</div>';
            }
            createBox();
            createBox();
        ?>
    </div>
     
    
</body>
</html>
