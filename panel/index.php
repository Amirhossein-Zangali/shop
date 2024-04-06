<?php
include '../includes/init.php';

if( is_user_login() ){
    $user = current_user();
    echo "hello " . $user['name']; 
}else{
    echo 'Login';
}
