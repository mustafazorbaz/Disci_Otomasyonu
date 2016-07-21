<?php
include "../baglantiDB.php";

$sorgu1=mysql_query("SELECT  * FROM sikcaSorulanSorular  ");
if($sorgu1)
{
		
		while($satir=mysql_fetch_array($sorgu1))
		{
			echo "<option value='".$satir["baslik"]."'>".$satir['baslik']."</option>";
		}
}
else
{
 	echo "<option value='hata oldu'>hata var</option>";

}

?>