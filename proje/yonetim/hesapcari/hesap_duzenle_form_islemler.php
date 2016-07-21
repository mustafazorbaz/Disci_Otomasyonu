<?php
include"../baglantiDB.php";
$id="";
$id=@$_POST["id"];
if($id=="")
{
	$id=@$_GET["duzenle"];
}
else
{

}

$sorgu=mysql_query("SELECT * FROM hesapcari WHERE id='$id'");
 $deger=mysql_num_rows($sorgu);
if($deger>0)
{
	while ($satir=mysql_fetch_array($sorgu)) {
		$satir["id"];
		$tc=$satir["tc"];
		$ad=$satir["ad"];
		$soyad=$satir["soyad"];
		$tarih=$satir["tarih"];
		$islem=$satir["islem"];
		$aciklama=$satir["aciklama"];
		$alacakli=$satir["alacakli"];
		$borclu=$satir["borclu"];
		$bakiye=$satir["bakiye"];
	}

}
else
{
	echo 
	"
	<script>
	alert('Veritabanında Böyle Bir İd Mevcut Degil');
	window.location ='hesapCari.php';
	</script>
	";
}

if (@$_POST["kaydet"])
{
	$tc=$_POST["tc"];
	$ad=$_POST["ad"];
	$soyad=$_POST["soyad"];
	$tarih=$_POST["tarih"];
	$islem=$_POST["islem"];
	$aciklama=$_POST["aciklama"];
	$alacakli=$_POST["alacakli"];
	$borclu=$_POST["borclu"];
	$bakiye=$alacakli-$borclu;
	
	
	$sorguKaydet=mysql_query("UPDATE hesapcari 
	SET id='$id',tc='$tc',ad='$ad',soyad='$soyad',tarih='$tarih',islem='$islem',aciklama='$aciklama',alacakli='$alacakli',borclu='$borclu',bakiye='$bakiye' WHERE id='$id'");
	if($sorguKaydet)
	{
		echo 
		"
		<script>
		alert('Güncelleme Başarıla Tamamlandı...');
		window.location ='hesapCari.php';
		</script>
		";
	}
	
}
?>
