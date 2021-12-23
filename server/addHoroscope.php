<?php
require_once "listHoroscope.php";
if(isset($_POST['birth_date']) && !isset($_SESSION['horoscope'])){
    $date = explode('-',$_POST['birth_date']);
    $birth_date = $date[1] . $date[2];
    if(find_horoscope($birth_date)){
        session_start();
        $_SESSION['horoscope'] = find_horoscope($birth_date);
        echo json_encode(true);
    } else {
        echo json_encode(false) ;
    }
} else {
    echo json_encode(false) ;
}