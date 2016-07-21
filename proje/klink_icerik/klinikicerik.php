<?php
echo("<br/><br/>");
include"baglantiDB.php";
$sayi=0;
$sorgu=mysql_query("SELECT * FROM klinik");
if($sorgu)
{
   echo"<table border='1'>";
   while ($satir=mysql_fetch_array($sorgu))
   {
     $resim1=$satir["resim1"];
     $resim2=$satir["resim2"];
     $resim3=$satir["resim3"];
     $resim4=$satir["resim4"];

     echo"<tr>
     <td ><a href='$resim1'><img src='$resim1' title='resim".$sayi++."' width='250' heigth='140'></a></td>
     <td><a href='$resim2'><img src='$resim2' title='resim".$sayi++."' width='250' heigth='140'></a></td>
     <td><a href='$resim3'><img src='$resim3' title='resim".$sayi++."' width='250' heigth='140'></a></td>
     <td><a href='$resim4'><img src='$resim4' title='resim".$sayi++."' width='250' heigth='140'></a></td>
     </tr>";
   }
   echo"</table>";
}

?>