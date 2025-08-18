<?php

//인젝션 방어
function stripslashes_deep($var){
    $var = is_array($var)?
                  array_map('stripslashes_deep', $var) :
                  stripslashes($var);

    return $var;
}

function mysql_real_escape_string_deep($var){
    $var = is_array($var)?
                  array_map('mysql_real_escape_string_deep', $var) :
                  mysql_real_escape_string($var);

    return $var;
}

if( get_magic_quotes_gpc() ){
    if( is_array($_POST) )
        $_POST = array_map( 'stripslashes_deep', $_POST );
    if( is_array($_GET) )
        $_GET = array_map( 'stripslashes_deep', $_GET );
}
 
if( is_array($_POST) )
    $_POST = array_map( 'mysql_real_escape_string_deep', $_POST );
if( is_array($_GET) )
    $_GET = array_map( 'mysql_real_escape_string_deep', $_GET);

?>