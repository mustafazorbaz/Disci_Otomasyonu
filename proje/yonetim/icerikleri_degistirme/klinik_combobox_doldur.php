<?php
include "../baglantiDB.php";
echo "ecalisti";
$sorgu1=mysql_query("SELECT  * FROM klinik  ");
if($sorgu1)
{
		
		while($satir=mysql_fetch_array($sorgu1))
		{
			echo "<option value='".$satir["id"]."'>".$satir['id']."</option>";
		}
}
else
{
 	echo "<option value='hata oldu'>hata var</option>";

}

?>