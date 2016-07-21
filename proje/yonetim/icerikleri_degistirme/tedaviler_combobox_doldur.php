<?php
include "../baglantiDB.php";

$sorgu1="SELECT  * From tedaviler  ";
if($sonuc=mysql_query($sorgu1))
{
		while($satir=mysql_fetch_array($sonuc))
		{
			echo "<option value='".$satir["baslik"]."'>".$satir['baslik']."</option>";
		}
}
else
{
 	echo "Sorguda Problem Oluştu";

}

?>