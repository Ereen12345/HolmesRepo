<?php include('../../private/initialize.php') ?>
<?php phpinfo() ?>
<?php

//$param=$_GET['test'])?$_GET['test']:'';
$param=$_GET['test']??'';
//echo $param
if('404'==$param){//If test  value is 404 ,then notify
    error_404();
}
elseif('500'==$param){
    error_500();
}

else{
    echo 'No error';
}


//echo url_for("staff/show.php");
//header( $_SERVER["SERVER_PROTOCOL"]."500 internal server error"); 
//header( "Location:".url_for('staff/index.php')); 
//redirect_to(url_for('staff/index.php'));

?>