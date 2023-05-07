<?php
    include 'printVariable.php';
    // Quan ly thong tin sinh vien
    // SV1 name, gender, score
    
    // // C1
    // $students = array();
    // $students['SV001'] = array('name'=>'John','gender'=>1, 'score'=> array(4,5,6));
    // $students['SV002'] = array('name'=>'Peter','gender'=>1, 'score'=> array(5,6,7));
    // $students['SV003'] = array('name'=>'Marry','gender'=>0, 'score'=> array(7,8,9));

    // printVariable($students);

     // C2
    $students = array(
        'SV001' => array('name'=>'John','gender'=>1, 'score'=> array(4,5,6)),
        'SV002' => array('name'=>'Peter','gender'=>1, 'score'=> array(5,6,7)),
        'SV003' => array('name'=>'Marry','gender'=>0, 'score'=> array(7,8,9)),
    );

    printVariable($students);

    // // in ra ten cua SV002
    // echo $students['SV002']['name'];
    // --------------------------------------
    // // diem mon thu 2 cua SV003
    // echo $students['SV003']['score'][1];
    // --------------------------------------
    // // doi ten SV003 thand Emma
    // $students['SV003']['name']='Emma';
    // echo $students['SV003']['name'];
    // --------------------------------------
    // // doi diem mon thu 2 SV003 thand 10
    // $students['SV003']['score'][1]=10;
    // echo $students['SV003']['score'][1];
    // --------------------------------------
    // John - Boy - 15
    // Peter - Boy - 18
    // Marry - Boy - 24

    // function sumScore($score) {
    //     $sum=0;
    //    foreach ($score as $key => $value) {
    //     $sum +=$value;
    //    }
    //    return $sum;
    // }

    if(!empty($students)) {
        foreach ($students as $key => $value) {
            $name = $value['name'];
            $gender = $value['gender'] === 1 ? 'Boy' : 'Girl';
            $score = $value['score'];

            $total = array_sum($score);

            // echo  'Name: ' . $name . ' - Gender: ' . $gender . ' - Total score: ' . sumScore($score) . '<br/>';
            echo  'Name: ' . $name . ' - Gender: ' . $gender . ' - Total score: ' .  $total . '<br/>';
        }
    }
    
?>