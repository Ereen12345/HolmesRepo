<?php
function u($string=""){
    return urlencode($string);
}
function h($string=""){
    return htmlspecialchars($string);
}
function url_for($script_path=""){
    if($script_path[0]!='/'){
        $script_path='/'.$script_path;   
    }
    return WWW_ROOT.$string;
}

function error_404(){
    header( $_SERVER["SERVER_PROTOCOL"]."404 not  fOUND"); 
    exit();
}
function error_500(){
    header( $_SERVER["SERVER_PROTOCOL"]."500 iNTERNAL sERVER ERROR"); 
    exit();
}
function redirect_to($location)
{
 header("Location".$location);
}
    

?>
