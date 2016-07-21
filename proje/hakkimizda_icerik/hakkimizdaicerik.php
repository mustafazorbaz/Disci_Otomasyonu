<?php
include"baglantiDB.php";

$sorgu=mysql_query("SELECT * FROM hakkimizda");
if ($sorgu) 
{   $satir=mysql_fetch_array($sorgu);
    echo $satir["icerik"];
    
}
 echo " 
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>";
?>
   
