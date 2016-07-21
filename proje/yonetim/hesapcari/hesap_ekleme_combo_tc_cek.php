<?php
include"../baglantiDB.php";
$sorgu=mysql_query("SELECT DISTINCT  tc FROM hastalar ");
if($sorgu)
{
	while ($satir=mysql_fetch_array($sorgu))
	{
		$tc=$satir["tc"];
		echo "<option value='".$satir['tc']."' ".sec($tc)." >".$satir['tc']."</option>";
	}
}
else
	echo "<option>Kişi kaydı bunmamakta</option>";
function sec($x)
{
	if(@$_POST["tc"]==$x)
	{
		 return "selected";
	}

	
}
?>