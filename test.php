<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bạn thuộc chòm sao nào?</title>
    <style>
        * {
        margin: 0;
         padding: 0;
         }

        .content {
          margin: 20px auto;
          width: 600px;
          border: 1px solid #999;
        }

        .content h1 {
          color: red;
          text-align: center;
        }

        .content div.row {
          margin-top: 20px;
        }

        .content div.row span {
          display: inline-block;
          width: 255px;
          text-align: right;
        }

        .content div.row input[type='text'] {
          padding: 3px 5px;
        }

        .content div.row input[type='submit'] {
          padding: 3px 5px;
          display: block;
          margin: 0 auto 20px auto;
        }

        .content div.row p {
          font-weight: bold;
          font-size: 20px;
          text-align: center;
        }

        .content div.rusult {
          margin-left: 50px;
          margin-bottom: 30px;
        }

        .content div.rusult img {
          width: 100px;
          height: 100px;
          float: left;
          overflow: hidden;
        }

        .content div.rusult p {
          text-align: justify;
          height: 100px;
          font-size: 22px;
          line-height: 100px;
        }

        .content div.rusult p span {
          font-style: italic;
        }
      </style>
</head>
    <?php 
    $day = '';
    $month = '';

    $image = '';
    $name = '';
    $time = '';

    $flagShow = true;
    $result='';

    if (isset($_POST['day']) && isset($_POST['month'])) {
        $day = $_POST['day'];
        $month = $_POST['month'];
        if(is_numeric($day) && is_numeric($month)){
          switch ($month) {
            case 1:
              if ($day <= 19) {
                $image = 'capricorn';
                $name = 'Ma Kết';
                $time = '23/12 - 19/01';
              }

              if ($day >= 20) {
                $image = 'aquarius';
                $name = 'Bảo Bình';
                $time = '20/01 - 19/02';
              }

              if ($day < 1 || $day > 31) $flagShow = false;
              break;
            
            case 2:
              if ($day <= 19) {
                $image = 'aquarius';
                $name = 'Bảo Bình';
                $time = '20/01 - 19/02';
              }

              if ($day >= 20) {
                $image = 'pisces';
                $name = 'Song Ngư';
                $time = '20/02 - 21/03';
              }
              if ($day < 1 || $day > 29) $flagShow = false;
              break;

            case 3:
              if ($day <= 21) {
                $image = 'pisces';
                $name = 'Song Ngư';
                $time = '20/02 - 21/03';
              }

              if ($day >= 22) {
                $image = 'pisces';
                $name = 'Bạch Dương';
                $time = '22/03 - 20/04';
              }
              break;
            
            default:
              $flagShow = false;
              break;
          }
           if ($flagShow) {
            $result = ' <div class="rusult">
            <img src="images/' . $image . '.jpg" alt="' . $image . '">
            <p>' . $name . ' <span>(' . ucfirst($image) . ': ' . $time . ')</span></p>
            </div>';
          } else {
            $result = 'Dữ liệu không hợp lệ';
          }
        } else {
          $flagShow = false;
          $result = 'Dữ liệu không hợp lệ';
        }
    }
    ?>
<body>
    <div class='content'>
        <h1>Bạn thuộc chòm sao gì?</h1>
        <form action="#" method='post' class='form'>
            <div class='row'>
                <span>Ngày sinh</span>
                <input type="text" name='day' value='<?php  echo $day ?>'/>
            </div>

            <div class='row'>
                <span>Tháng sinh</span>
                <input type="text" name='month' value='<?php  echo $month ?>'/>
            </div>

            <div class='row'>
                <input type="submit" value='Lấy chòm sao'/>
            </div>
        </form>

        <?php
          echo $result;
        ?>
    </div>
</body>
</html>