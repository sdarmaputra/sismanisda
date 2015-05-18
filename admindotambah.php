<?php
	include("db.php");
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	$konfirmpass = $_POST['konfirmpass'];
	$namalengkap = $_POST['namalengkap'];
	$jenkel = $_POST['jenkel'];
	$asal_prov = $_POST['asal_prov'];
	$asal_kab = $_POST['asal_kab'];
	$tgllahir = $_POST['tgllahir'];
	$thnlulus = $_POST['thnlulus'];
	echo $username;
	echo $pass;
	echo $konfirmpass;
	echo $namalengkap;
	echo $jenkel;
	echo $asal_prov;
	echo $asal_kab;
	echo $tgllahir;
	echo $thnlulus;
	if ($pass == $konfirmpass){
		$u = mysqli_query($conn, "SELECT * FROM user where namauser='".$username."'");
		if ($u->num_rows == 0)
		{
			$t = mysqli_query($conn, "INSERT INTO user (namauser, passuser, tipeuser) values ('".$username."', '".$pass."',2)");		
		}	
		else echo "username conflict";
	}
	else echo "password missmatch";
	$u = mysqli_query($conn, "SELECT iduser FROM user where namauser='".$username."'");
	$u = mysqli_fetch_row($u);
	mysqli_query($conn, "INSERT INTO alumni (user_iduser, namalengkap, jenkel, asal_prov, asal_kab, tgllahir, thnlulus) values (".$u[0].", '".$namalengkap."',".$jenkel.", '".$asal_prov."', '".$asal_kab."', '".$tgllahir."', ".$thnlulus.")") or die(mysqli_error($conn));
	header("location: admintambah.php");
?>