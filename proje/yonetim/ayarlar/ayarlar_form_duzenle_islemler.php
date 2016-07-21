<?php
	session_start();
	include "../baglantiDB.php";
	$id=$_SESSION["id"];
	$kullanici=$_POST["kullanici"];
	$sifre=$_POST["sifre"];
	$sorgu=mysql_query("UPDATE oturum SET id='$id',user='$kullanici',password='$sifre' WHERE id='$id'");
	if($sorgu)
	{
		echo "<script>  alert('Kullanıcı Update Başarılı Bir Şekilde Gerçekleştirildi...'); 
		 window.location='../cikis.php'; </script> ";
		exit();
	}
	else
	{
		echo "<script>  alert('İşlem Başarısız !!!'); </script> ";
	}
	
		

?>