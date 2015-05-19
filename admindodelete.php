<?php
	include("db.php");
	$doDelete = $_POST['doDelete'];
	if ($doDelete == 1)
	{
		$id = $_POST['id'];
		$u = mysqli_query($conn, "SELECT user_iduser FROM alumni WHERE idalumni=".$id);
		$u = mysqli_fetch_row($u);
		$v = mysqli_query($conn, "DELETE FROM alumni WHERE idalumni=".$id);
		$w = mysqli_query($conn, "SELECT namauser FROM user WHERE iduser=".$u[0]);
		$x = mysqli_query($conn, "DELETE FROM user WHERE iduser=".$u[0]);
		$msgStat = 1;
		$msgContent = "Berhasil! Data pengguna dengan nama akun <i>".$w[0]."</i> berhasil dihapus."	
	}
	
?>