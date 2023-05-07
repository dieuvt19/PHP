<?php
    include 'printVariable.php';
    // mang lien tuc - mang so nguyen
    // // C1
    // $courses = array();
    // $courses[]= 'PHP';
    // $courses[]= 'Zend Framework';
    // $courses[]= 'Joomla';

    // // C2
    // $courses = array();
    // $courses[0]= 'PHP';
    // $courses[1]= 'Zend Framework';
    // $courses[2]= 'Joomla';

    // C3
    $courses = array('PHP','Zend Framework','Joomla');
    // $courses = array();
   
    // echo $courses[1];
    // // use vong lap for
    // if (!empty($courses)) {
    //     for ($i=0; $i < count($courses); $i++) { 
    //         echo $courses[$i] . '<br/>';
    //     }
    // } else {
    //     echo 'Khong in';
    // }

    printVariable($courses);
    // use vong lap foreach
    if (!empty($courses)) {
        foreach ($courses as $key => $value) {
            echo $value . '<br/>';
        }
    } else {
        # code...
    }

    /*

    */
    
?>