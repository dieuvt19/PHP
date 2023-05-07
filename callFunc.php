<?php
    // Cach 1: import by require
    //  if error will no work
    // require 'function12.php';

    // Cach 2: import by include
    //  if error will work part is not error
    include 'function.php';

    $result = sumDigit(18);
    echo $result;
    echo 'include';
?>