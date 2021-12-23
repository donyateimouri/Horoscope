<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_SESSION['horoscope'])){
    echo json_encode($_SESSION['horoscope']);
}