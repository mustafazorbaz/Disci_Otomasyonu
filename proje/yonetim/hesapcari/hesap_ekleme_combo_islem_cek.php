<?php
include"../baglantiDB.php";
$sorgu=mysql_query("SELECT DISTINCT  islem FROM islemler ");
if($sorgu)
{
	while ($satir=mysql_fetch_array($sorgu))
	{
		$islem=$satir["islem"];
		echo "<option value='$islem'>$islem</option>";
	}
}
else
	echo "<option>Kişi kaydı bunmamakta</option>";

?>