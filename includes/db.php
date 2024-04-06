<?php

$db = new PDO( 'mysql:host=localhost;dbname=shop;charset=utf8', 'root', '' );

date_default_timezone_set( 'Asia/Tehran' );

function db(){
    global $db;
    return $db;
}