<?php
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));

mysqli_select_db($con, 'tumlplacement');

error_reporting(E_ERROR | E_PARSE);

?>