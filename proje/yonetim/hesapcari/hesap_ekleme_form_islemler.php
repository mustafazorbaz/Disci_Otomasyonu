<?php
include "../baglantiDB.php";
$tc=$_POST["tc"];
$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$tarih=$_POST["tarih"];
$islem=$_POST["islem"];
$aciklama=$_POST["aciklama"];
$alacakli=$_POST["alacakli"];
$borclu=$_POST["borclu"];



$deger=0;

if($tc=="*"||$ad=="*"||$soyad=="*"||$islem=="*"||$aciklama==""||$alacakli==""||$borclu=="")
{
	echo 
	"<script>
	alert('Lütfen Boş Alan Girmeyiniz...');
	window.location = 'hesap_ekleme.php';
	</script>
	";
	exit();
}
else
{
			$bugun=date("Y-m-d");
			$yenibugun=date("d.m.Y",strtotime($bugun)); 
			$yenitarih=date("d.m.Y",strtotime($tarih)); 
			if($yenitarih>$yenibugun)
			{
					$deger=1;
						echo
						"
						<script>
						alert('Bu Tarih Girilemez...');
						window.location = 'hesap_ekleme.php';
						</script>
						";

			}
			
			if($deger==0)
			{
				$bakiye=$alacakli-$borclu;
				$sorgu=mysql_query("INSERT INTO hesapcari (tc,ad,soyad,tarih,islem,aciklama,alacakli,borclu,bakiye) VALUES ('$tc','$ad','$soyad','$tarih','$islem','$aciklama','$alacakli','$borclu','$bakiye')");
				if (!$sorgu)
				{
					echo 
						"<script>
						alert('İşlem kaydı yapılamadı ...');
						window.location = 'hesap_ekleme.php';
						</script>
						";
				}
				
				header("Location:hesapCari.php");
			}

}


?>