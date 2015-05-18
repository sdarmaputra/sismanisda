<?php
session_start();
if (!isset($_SESSION['valid'])) $_SESSION['valid'] = false;
if ($_SESSION['valid']){    
    $userid = $_SESSION['userid'];
    $username = $_SESSION['username'];
    $usertype = $_SESSION['usertype'];
    if (isset($page) && $page == 'login') {
    	if ($usertype == 2) {header("location: alumniindex.php");}
    		else if ($usertype == 1) header("location: adminindex.php");
    }
    	
}
else {
	$_SESSION['valid'] = false;
    $userid = NULL;
    $username = NULL;
    $usertype = NULL;
    if (!isset($page) || $page!='login') header("location: login.php");
}
?>