<?php
session_start();
include "baglantiDB.php";

$tc=$_SESSION["tc"];
$sifre=$_SESSION["sifre"];

$sorgu=mysql_query("DELETE FROM  randevular WHERE tc='$tc' ");

if ($sorgu) 
{
	echo "<script>  alert('Silme İslemi Tamamlandı');
		window.location='index.php'; </script> ";

}
else
	echo "<script>  alert('Silme İslemi Başarısız'); window.location='randevu2.php'; </script> ";


?>