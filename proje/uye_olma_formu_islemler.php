<?php
session_start();
include "baglantiDB.php";
if (@$_SESSION["oturumuye"]!=true)
 {
	
	$tc=$_POST["tc"];
	$ad=$_POST["ad"];
	$soyad=$_POST["soyad"];
	$tel=$_POST["tel"];
	$adres=$_POST["adres"];
	$dogumyili=$_POST["dogumyili"];
	$eposta=$_POST["eposta"];
	$sifre=$_POST["sifre"];


	$sorguKontrol=mysql_query("select * from uyeler Where tc='$tc'");
	$deger=mysql_num_rows($sorguKontrol);
	if ($tc==""||$ad==""||$soyad==""||$tel==""||$adres==""||$dogumyili==""||$eposta==""||$sifre=="")
	{
		echo "<script>  alert('Alanlar boş geçişlemez...');
			window.location='uyeol.php'; </script> ";
	}
	elseif ($deger>=1) 
	{
		echo "<script>  alert('Üyelik  daha önceden yapılmış tekrar üye olunamaz...');
			window.location='index.php'; </script> ";
	}
	else
	{


		$sorgu=mysql_query("INSERT INTO  uyeler (tc,ad,soyad,tel,adres,dogumtarih,eposta,sifre) VALUES ('$tc','$ad','$soyad','$tel','$adres','$dogumyili','$eposta','$sifre') ");
		if($sorgu) 
		{
			echo "<script>  alert('Üye Olma Işlemi Başarılı...');
			window.location='uyegiris.php'; </script> ";

		}
		else
			echo "<script>  alert('Üye Olma Işlemi Başarısız!!!'); 
			 window.location='uyeol.php'; </script> ";

	}
}
else
{
	echo "<script>  alert('Üyelik için çıkış yapmalısınız !!!');
	window.location='uyegiris.php'; 
	</script> ";

}


?>