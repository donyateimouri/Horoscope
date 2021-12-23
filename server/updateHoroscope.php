<?php
session_start();
require_once "listHoroscope.php";
if($_SESSION['horoscope']){
    $date = explode('-',$_POST['birth_date']);
    $birth_date = $date[1] . $date[2];
    if(find_horoscope($birth_date)){
        $_SESSION['horoscope'] = find_horoscope($birth_date);
        echo json_encode($_SESSION['horoscope']);
    } else {
        echo json_encode(false) ;
    }
} else {
    echo json_encode(false) ;
}