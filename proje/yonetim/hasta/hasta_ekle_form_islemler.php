<?php
include"../baglantiDB.php";
//error_reporting(0); //Gereksiz hatalar varsa bunları es geçer.
$tc=$_POST["tc"];
$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$email=$_POST["email"];
$adres=$_POST["adres"];
$telefon=$_POST["telefon"];
$k_tarih=$_POST["k_tarih"];
$d_yeri=$_POST["d_yeri"];
$d_tarih=$_POST["d_tarih"];
$il=$_POST["il"];

$islem=0;

if ($tc==""||$ad==""||$soyad==""||$email==""||$adres==""||$telefon==""||$k_tarih==""||$d_yeri==""||$d_tarih==""||$il=="") 
{
	echo
	"
	<script>
	alert('Lütfen Boş alan bırakmayınız...');
	window.location = 'hasta_ekle.php';
	</script>
	";
}
else
{
	$sorguTcKontrol=mysql_query("SELECT * FROM hastalar");
	if($sonuc=$sorguTcKontrol) //atama ve true  false  degeri dönmekte
	{
			
			while($satir=mysql_fetch_array($sonuc))
			{
					//echo $satir["id"]."-".$satir["tarih"]."-".$satir["saat"]."<br/>";
					if ($satir["tc"]===$tc)
					{
						echo
						"
						<script>
						alert('Daha önceden bu TC No.  adına  kayıt mevcuttur...');
						window.location = 'hasta_ekle.php';
						</script>
						";
						$islem=1;
						break;
					}
					
			}
			$bugun=date("Y");
			$yenibugun=date("Y",strtotime($bugun)); 
			$d_tarihYeni=date("Y",strtotime($d_tarih)); 
  			$k_tarihYeni=date("Y",strtotime($k_tarih));
			if($d_tarihYeni>$yenibugun)
			{
					$islem=1;
						echo
						"
						<script>
						alert('Bu Doğum Tarihi  Girilemez...');
						window.location = 'hasta_ekle.php';
						</script>
						";

			}
			if($k_tarihYeni>$yenibugun)
			{
					$islem=1;
						echo
						"
						<script>
						alert('Bu Kayıt Tarihi  Girilemez...');
						window.location = 'hasta_ekle.php';
						</script>
						";

			}
			if($islem==0)
			{
				$sorgu=mysql_query("INSERT INTO hastalar (tc,ad,soyad,email,adres,telefon,k_tarih,d_yeri,d_tarih,il) VALUES ('$tc','$ad','$soyad','$email','$adres','$telefon','$k_tarih','$d_yeri','$d_tarih','$il')");
				if ($sorgu)
				{
					
					echo
						"
						<script>
						alert('Hasta Kaydı Başarılı Bir şekilde Kaydedildi...');
						window.location ='hasta_ekle.php';
						</script>
						";
				}
				else
				{
						echo
						"
						<script>
						alert('Hasta Kaydı Yapılamadı _Sorguda_ Problem oluştu');
						window.location = 'hasta_ekle.php';
						</script>
						";
				}
			}
	}
	
}


?>