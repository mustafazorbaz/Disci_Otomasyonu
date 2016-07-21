<?php
	session_start();
	include "../baglantiDB.php";
	$kullanici=$_POST["kullanici"];
	$sifre=$_POST["sifre"];
	$sorgu=mysql_query("INSERT INTO oturum (user,password) VALUES  ('$kullanici','$sifre')");
	if($sorgu)
	{
		echo "<script>  alert('Yeni Kullanıcı Başarılı Bir Şekilde Eklendi...'); 
		 window.location='../randevular.php'; </script> ";
		exit();
	}
	else
	{
		echo "<script>  alert('İşlem Başarısız !!!'); </script> ";
	}
	
		

?>