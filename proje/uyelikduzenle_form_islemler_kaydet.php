<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include"baglantiDB.php";
@session_start();
 if(@$_SESSION['oturumuye']==true)
{ 

	$uyeId=$_SESSION["id"];
	$tc=$_POST["tc"];
	$ad=$_POST["ad"];
	$soyad=$_POST["soyad"];
	$tel=$_POST["tel"];
	$adres=$_POST["adres"];
	$dogumyili=$_POST["dogumyili"];
	$eposta=$_POST["eposta"];
	$sifre=$_POST["sifre"];

$sorgu=mysql_query("UPDATE uyeler 
	SET id='$uyeId',tc='$tc',ad='$ad',soyad='$soyad',tel='$tel',adres='$adres',dogumtarih='$dogumyili',eposta='$eposta',sifre='$sifre' WHERE id='$uyeId' ");
	if ($sorgu)
	{
		echo "<script>  alert('İşlem Başarılı Bir Şekilde Gerçekleşti...');
		window.location='uye_cikis.php'; 
		</script> ";
		exit();
	}
	else
	{
		echo "<script>  alert('Sorguda Hata oluştu !!!');
		window.location='uyegiris.php'; 
		</script> ";
		exit();
	}
	
  
 } 

?>