<?php
function user_login( $username, $password ){

    $login_sql  = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $login_stmt = db()->query( $login_sql );
    
    $user       = $login_stmt->fetch( PDO::FETCH_ASSOC );

    return $user;

}

function logout(){
    unset( $_SESSION['user_id'] );
}

function is_user_login(){
    return isset( $_SESSION['user_id'] );
}

function get_current_user_id(){
    return isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : 0;
}

function current_user(){
    if( is_user_login() ){
        return get_user( get_current_user_id() );
    }
    return false;
}

function get_user( $user_id ){

    $login_sql  = "SELECT * FROM users WHERE ID = $user_id";

    $login_stmt = db()->query( $login_sql );
    
    $user       = $login_stmt->fetch( PDO::FETCH_ASSOC );

    return $user;

}