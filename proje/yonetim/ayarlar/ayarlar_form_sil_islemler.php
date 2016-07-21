<?php
	session_start();
	include "../baglantiDB.php";
	$id=$_SESSION["id"];
	
	$sorgu=mysql_query("DELETE FROM oturum WHERE id='$id'");
	if($sorgu)
	{
		echo "<script>  alert('Başarılı Bir Şekilde Kullanıcı Silindi...'); 
		 window.location='../cikis.php'; </script> ";
		exit();
	}
	else
	{
		echo "<script>  alert('İşlem Başarısız !!!'); </script> ";
	}
	
		

?>