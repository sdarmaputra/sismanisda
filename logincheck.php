<?php
include('db.php');
session_start();
$username = $_POST['username'];
$pass = $_POST['pass'];
$u = mysqli_query($conn, "SELECT * from user where namauser='".$username."'");
$u = mysqli_fetch_row($u);
if ($u[2] == $pass){
    $_SESSION['valid'] = true;
    $_SESSION['userid'] = $u[0];
    $_SESSION['username'] = $u[1];
    $_SESSION['usertype'] = $u[3];
    if ($_SESSION['usertype'] == 1) header("location: adminindex.php");
    elseif ($_SESSION['usertype'] == 2) {
    	header("location: alumniindex.php");
    }
}
else header("location: index.php");
?>