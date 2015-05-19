<?php
	include("db.php");
	$id = $_POST['id'];
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	$konfirmpass = $_POST['konfirmpass'];
	$namalengkap = $_POST['namalengkap'];
	$jenkel = $_POST['jenkel'];
	$asal_prov = $_POST['asal_prov'];
	$asal_kab = $_POST['asal_kab'];
	$tgllahir = $_POST['tgllahir'];
	$thnlulus = $_POST['thnlulus'];
	if ($pass == $konfirmpass){
		$u = mysqli_query($conn, "UPDATE alumni SET namelengkap='".$namalengkap."', jenkel=".$jenkel.", asal_prov='".$asal_prov."', asal_kab='".$asal_kab."', tgllahir='".$tgllahir."', thnlulus=".$thnlulus." WHERE idalumni=".$id."");
		$v = mysqli_query($conn, "SELECT user_iduser FROM alumni WHERE idalumni=".$id);
		$v = mysqli_fetch_row($v);
		$w = mysqli_query($conn, "UPDATE user SET namauser='".$username."', passuser='".$pass."' WHERE iduser=".$v[0]);
	}
	else echo "password missmatch";
	header("location: admintambah.php");
?>