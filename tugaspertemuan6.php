<?php
$total_belanja= 150000;

if($total_belanja > 100000){
    echo "Anda dapet hadiah";
    echo "<br />";
}
?>

<?php
    $umur = 13;

    if ($umur < 18 ){
        echo "kamu tidak boleh membuka situs ini!";
        echo "<br />";
    } else {
        echo "Selamat Datang di Website Kami!";
        echo "<br />";
    }
?>

<?php
    $umur = 19;

    if ($umur < 18 ){
        echo "kamu tidak boleh membuka situs ini!";
        echo "<br />";
    } else {
        echo "selamat datang di website kami!";
        echo "<br />";
    }
?>

<?php

    $nilai = 88;

    if ($nilai > 90) {
        $grade = "A";
    } elseif($nilai > 80){
        $grade = "B";
    } elseif($nilai > 60){
        $grade = "C";
    } elseif($nilai > 40){
        $grade = "D";
    } elseif($nilai > 30){
        $grade = "E";
    } else {
        $grade = "F";
    }

    echo "Nilai Anda: $nilai<br>";
    echo "Grade: $grade";
    echo "<br />";

?>

<?php
    $level = 3;
    switch($level){
        case 1:
            echo "Pelajari HTML";
            break;
        case 2:
            echo "Pelajari CSS";
            break;
        default:
            echo "kamu bukan programmer!";    
    }
?>

