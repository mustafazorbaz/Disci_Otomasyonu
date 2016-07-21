<?php
echo("<br/><br/>");
include"baglantiDB.php";
  $sorgu=mysql_query("SELECT * FROM sikcasorulansorular");
  if ($sorgu) 
  {
      echo"<table border='0'>";
      while ($satir=mysql_fetch_array($sorgu))
      {
         
        $baslik = $satir["baslik"]; 
        $icerik = $satir["icerik"]; 
        echo
        "<tr>
        <td >
        <h3>$baslik</h3>$icerik
        </td>
        </tr>

        ";
      }
      echo"</table>";
  }
  else
    echo"Sorguda Sorun  Olşutu";
?>