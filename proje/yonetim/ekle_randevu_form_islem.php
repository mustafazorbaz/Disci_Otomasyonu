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
	echo 
	"
	<script>
	alert('Bu Tarih Geçersiz !!!');
	window.location = 'randevular.php';
	</script>
	";
}
elseif(($simditarih==$tarih)&&($simdisaat>=$saat))
{
	echo 
	"
	<script>
	alert('Bu Saat Geçersiz !!!');
	window.location = 'eklerandevu.php';
	</script>
	";
}
elseif($saat=='DOLU')
{
	echo 
	"
	<script>
	alert('Secilen Tarihte Boş Randevu Yok!!!');
	window.location = 'eklerandevu.php';
	</script>
	";
}
elseif(($tc=='')||($ad=='')||($soyad=='')||($tel=='')||($tarih=='')||($saat=='')||($eposta==''))
{
	echo 
	"
	<script>
	alert('Boş Alan Girilemez !!!');
	window.location = 'eklerandevu.php';
	</script>
	";
}
else
{
//javascript:history.back(-1);

	$deger=0;
	$sql1="Select tarih,saat From randevular ";
	if($sonuc=mysql_query($sql1))
	{
		
		while($satir=mysql_fetch_array($sonuc))
		{
				//echo $satir["id"]."-".$satir["tarih"]."-".$satir["saat"]."<br/>";
				if (($satir["tarih"]===$tarih) && ($satir["saat"]===$saat ))
				{
		
					$deger=1;
					break;
				}
		}
		if($deger==0)
		{
				$sql2="INSERT INTO randevular (tc,ad,soyad,tel,tarih,saat,eposta) VALUES('$tc','$ad','$soyad','$tel','$tarih','$saat','$eposta')";
			
				if(mysql_query($sql2))
				{
						echo 
						"
						<script>
						alert('Randevu Başarılı Bir Şekilde Alındı...');
						window.location = 'eklerandevu.php';
						</script>
						";
				}
				else
 				echo 
					"
					<script>
					alert('Randevu Alınamadı !!!');
					window.location = 'eklerandevu.php';
					</script>
					";
		}
	}
	else
	{
			echo 
			"
			<script>
			alert('Baglantıda Problem Oluştu !!!');
			window.location = 'eklerandevu.php';
			</script>
			";

	}
}


?>