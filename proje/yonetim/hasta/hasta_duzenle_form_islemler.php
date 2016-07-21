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


	$sorgu=mysql_query("SELECT * FROM hastalar WHERE id='$id'");
	 $deger=mysql_num_rows($sorgu);
	if($deger>0)
	{
		while ($satir=mysql_fetch_array($sorgu)) {
			$satir["id"];
			$tc=$satir["tc"];
			$ad=$satir["ad"];
			$soyad=$satir["soyad"];
			$email=$satir["email"];
			$adres=$satir["adres"];
			$telefon=$satir["telefon"];
			$k_tarih=$satir["k_tarih"];
			$d_tarih=$satir["d_tarih"];
			$d_yeri=$satir["d_yeri"];
			$il=$satir["il"];
			break;
		}

	}
	else
	{
		echo 
		"
		<script>
		alert('Veritabanında Böyle Bir İd Mevcut Degil');
		window.location ='index.php';
		</script>
		";
	}

if (@$_POST["kaydet"])
{			
	
	$tcYeni=$_POST["tc"];
	$adYeni=$_POST["ad"];
	$soyadYeni=$_POST["soyad"];
	$emailYeni=$_POST["email"];
	$adresYeni=$_POST["adres"];
	$telefonYeni=$_POST["telefon"];
	$k_tarihYeni=$_POST["k_tarih"];
	$d_tarihYeni=$_POST["d_tarih"];
	$d_yeriYeni=$_POST["d_yeri"];
	$ilYeni=$_POST["il"];

	$sorguKaydet=mysql_query("UPDATE hastalar
SET id='$id',tc='$tcYeni',ad='$adYeni',soyad='$soyadYeni',email='$emailYeni',adres='$adresYeni',telefon='$telefonYeni',k_tarih='$k_tarihYeni',d_tarih='$d_tarihYeni',d_yeri='$d_yeriYeni',il='$ilYeni' 
  WHERE id='$id'");
	if ($sorguKaydet)
	{
		echo 
		"
		<script>
		alert('Güncelleme Başarılı Bir Şekilde  Tamamlandı...');
		window.location ='index.php';
		</script>
		";
		 exit();
	}
}

?>
