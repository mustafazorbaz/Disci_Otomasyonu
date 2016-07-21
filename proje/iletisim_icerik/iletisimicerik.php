<h1>Bize Ulaşın</h1>
<h2>İletişim</h2>
<p>&nbsp;</p>
<div class="iletisimbilgi">
<?php include"baglantiDB.php"; 
$sorgu=mysql_query("SELECT * FROM iletisim  ");
if ($sorgu)
{
	
	while ($satir=mysql_fetch_array($sorgu))
	{
		echo $satir["icerik"];

	}
	
}
else
	echo"sorguda hata oluştu";
?>
</div>