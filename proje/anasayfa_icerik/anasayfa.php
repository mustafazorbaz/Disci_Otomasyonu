
<div id="content">
<?php include"baglantiDB.php"; 

$limit="LIMIT 3";
if(@$_POST["tamami"])
{
	$limit=" ";
}

$soruDuyurular=mysql_query("SELECT * FROM duyurular ORDER BY tarih DESC $limit ");
if ($soruDuyurular)
{	
	echo "<center style='font-size:35px; 	font-weight:bold;'>Duyurular</center>";

	echo"<table border='0' width='950' align='center'>";
	while ($satir=mysql_fetch_array($soruDuyurular))
	{
		echo"<tr>
		     <td style='font-size:25px; 	font-weight:bold; color:#000093;'>".$satir["tarih"]."</td>
			<td  style='font-size:25px; 	font-weight:bold; color:#C10000;'>".$satir["baslik"]."</td>
			</tr>
			 <tr ><td  width='180' ><img src='".$satir["resim"]."' alt='".$satir["baslik"]."' height='150' width='150'    title='".$satir["baslik"]."'></td>
			 <td  style='font-size:20px; 	font-weight:bold; vertical-align:top; text-indent:20px;
'>".$satir['icerik']."</td>
			 </tr>
			<tr><td>&nbsp;</td></tr>
		";

	}
	echo"</table>";
		if($limit=="LIMIT 3")
		{
		echo "<form action='index.php' method='post'>
		<input style='font-weight:bold; font-size:20px;' type='submit' name='tamami' id='tamami' value='Devamını Gör'   /> 
		</form>";
		}
}
else
	echo"sorguda hata oluştu";

echo "<br/><br/>";





$soruKategorilerResimler=mysql_query("SELECT * FROM kategoriler");
$soruKategorilerBaslik=mysql_query("SELECT * FROM kategoriler");
$soruKategorilerIcerik=mysql_query("SELECT * FROM kategoriler");
if ($soruKategorilerResimler&&$soruKategorilerBaslik&&$soruKategorilerIcerik)
{
	echo"<table border='0' width='1000'><tr width='165'>";
	while ($satirResimler=mysql_fetch_array($soruKategorilerResimler))
	{
		echo"
		<td><center><img src='".$satirResimler["resim"]."'/></center></td>
		";

	}
	echo"</tr><tr width='166'>";

	while ($satirBaslik=mysql_fetch_array($soruKategorilerBaslik))
	{
		echo"
		<td><center><h4>".$satirBaslik["baslik"]."</h4></center></td>
		";

	}
	echo"</tr><tr width='166'>";

	while ($satirIcerik=mysql_fetch_array($soruKategorilerIcerik))
	{
		echo"
		<td><center>".$satirIcerik["icerik"]."</center></td>
		";

	}
	echo"</tr></table>";
}
else
	echo"sorguda hata oluştu";

echo "<br/><br/>";
?>

</div>