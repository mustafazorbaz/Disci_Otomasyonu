<?php 
	include"baglantiDB.php";

$id=$_POST["id"];   
$tc=$_POST["tc"];
$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$tel=$_POST["tel"];
$tarih=$_POST["tarih"];
$saat=$_POST["saat"];
$eposta=$_POST["eposta"];
//echo $tc."-".$ad."-".$soyad;
//echo "TC :<br/>".$tc;

$simditarih=date("Y-m-d");
//echo "simdi".$saat."<br/>";
$simdisaat=date("H:i:s");
if(($simditarih>$tarih))
{
	echo 
		"
		<script>
		alert('Bu tarihte randevu alınamaz!!!.');
		window.location = 'randevular.php';
		</script>
		";
}
elseif(($simditarih==$tarih)&&($simdisaat>=$saat))
{
	echo 
		"
		<script>
		alert('Bu tarihte randevu alınamaz!!!');
		window.location = 'randevular.php';
		</script>
		";
}
elseif($saat=='DOLU')
{
		echo 
		"
		<script>
		alert('Bu tarihte boş randevu yok!!!');
		window.location = 'randevular.php';
		</script>
		";
}
elseif(($tc=='')||($ad=='')||($soyad=='')||($tel=='')||($tarih=='')||($saat=='')||($eposta==''))
{
	echo 
		"
		<script>
		alert('Alanlar boş geçilemez !!!');
		window.location = 'randevular.php';
		</script>
		";
}
else
{


	$deger=0;
	$sql1="SELECT tarih,saat FROM randevular ";
	if($sonuc=mysql_query($sql1))
	{
		
		while($satir=mysql_fetch_array($sonuc))
		{
				
				if (($satir["tarih"]===$tarih) && ($satir["saat"]===$saat ))
				{
					echo 
						"
						<script>
						alert('Bu  randevu alınamaz!!!');
						</script>
						";
					$deger=1;
					break;
				}

		}
		if($deger==0)
		{
				$sql2="UPDATE  randevular SET  id='$id',tc='$tc',ad='$ad',soyad='$soyad',tel='$tel',tarih='$tarih',saat='$saat',eposta='$eposta'  WHERE id='$id'";
			
				if(mysql_query($sql2))
				{
					echo 
						"
						<script>
						window.location = 'randevular.php';
						</script>
						";
				}
				else
 				echo 
					"
					<script>
					alert('Eklenemedi !!!');
					window.location = 'duzenlerandevu.php';
					</script>
					";
		}
	}
	else
	{
 	echo "Baglantıda Problem oluştu";

	}
}


?>