<?php
    include 'printVariable.php';
    // mang khong lien tuc - mang ket hop
    // // C1
    // $courses = array();
    // $courses['php']= 'PHP';                 // index: php (key)
    // $courses['zend']= 'Zend Framework';     // index: zend (key)
    // $courses['joomla']= 'Joomla';           // key = joomla
    // $courses[]= 'Item 1';                   // key = 0
    // $courses[]= 'Item 2';                   // key = 1

    // C2
    $courses = array('php' => 'PHP','zend'=>'Zend Framework','joomla'=>'Joomla', 0=>'Item 1', 1=>'Item 2');
    // $courses = array();

    // printVariable($courses);
    // use vong lap foreach
    if (!empty($courses)) {
        foreach ($courses as $key => $value) {
            echo $key . ':' . ' ' . $value . '<br/>';
        }
    }
?>