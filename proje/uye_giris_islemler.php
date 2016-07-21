<?php
include "baglantiDB.php";
	session_start();				//session  başladı oturum  yani
	error_reporting(0);				//Gürünecek olan hataları yok eder.Yani hatayi  yol sayar.

$tc=$_POST['tc'];
$sifre=$_POST['sifre'];


		$sorgu1=mysql_query("SELECT * FROM uyeler WHERE tc='$tc' AND sifre='$sifre'");
		if($sorgu1)					
		{
					
						while($satir=mysql_fetch_array($sorgu1))
						{

							$_SESSION["tc"]=$satir["tc"];
							$_SESSION["ad"]=$satir["ad"];
							$_SESSION["soyad"]=$satir["soyad"];
							$_SESSION["tel"]=$satir["tel"];
							$_SESSION["adres"]=$satir["adres"];
						    $_SESSION["yil"]=$satir["dogumtarih"];
							$_SESSION["eposta"]=$satir["eposta"];
							$_SESSION["sifre"]=$satir["sifre"];
							$_SESSION["id"]=$satir["id"];

							$_SESSION["oturumuye"]=true;
							echo "<script> window.location='index.php'; </script> ";
								 exit();
						}
				
		}
		else 
		{
			echo "<script>  alert('Giriş Başarısız !!!'); 
		    window.location='uyegiris.php'; </script> ";
			exit();
		}

	
	if ($_SESSION["oturumuye"]!=true)
	{	
		echo "<script>  alert('Giriş Başarısız !!!'); 
		 window.location='uyegiris.php'; </script> ";
			exit();
	}

?>













