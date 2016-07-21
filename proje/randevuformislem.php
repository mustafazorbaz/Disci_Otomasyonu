<?php 
	include"baglantiDB.php";
   
$tc=$_POST["tc"];
$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$tel=$_POST["tel"];
$tarih=$_POST["tarih"];
$saat=$_POST["saat"];
$eposta=$_POST["eposta"];



$simditarih=date("Y-m-d");
$simdisaat=date("H:i:s");
if(($simditarih>$tarih))
{
	echo "<script>  alert('Bu Tarih  Girilemez !!!');
			window.location='randevu.php'; </script> ";
			exit();
 
}
elseif(($simditarih==$tarih)&&($simdisaat>=$saat))
{
	echo "<script>  alert('Bu Tarih  Girilemez !!!');
			window.location='randevu.php'; </script> ";
			exit();
 }
elseif($saat=='DOLU')
{
	echo "<script>  alert('Boş Randevu Mevcut Değil !!!');
			window.location='randevu.php'; </script> ";
			exit();
 
}
elseif(($tc=='')||($ad=='')||($soyad=='')||($tel=='')||($tarih=='')||($saat=='')||($eposta==''))
{
	echo "<script>  alert('Tüm Alanları Doldurunuz !!!');
			window.location='randevu.php'; </script> ";
			exit();
 
}
else
{


	$deger=0;
	$sql1="Select tarih,saat From randevular ";
	if($sonuc=mysql_query($sql1))
	{
		
		while($satir=mysql_fetch_array($sonuc))
		{
				
				if (($satir["tarih"]===$tarih) && ($satir["saat"]===$saat ))
				{
					echo "<script>  alert('Bu Randevu Alınamaz !!!');
					window.location='randevu.php'; </script> ";
					$deger=1;
					exit();
					
					break;
				}
		}
		if($deger==0)
		{
				$sql2="INSERT INTO randevular (tc,ad,soyad,tel,tarih,saat,eposta) VALUES('$tc','$ad','$soyad','$tel','$tarih','$saat','$eposta')";
			
				if(mysql_query($sql2))
				{
					echo "<script>  alert('Randevu Başarılı Şekilde Kaydedildi...');
					window.location='randevu.php'; </script> ";
				}
				else
 					echo "<script>  alert('Randevu Alınamadı ...');
					window.location='randevu.php'; </script> ";
		}
	}
	else
	{
 	echo "Baglantıda Problem oluştu";

	}
}


?>