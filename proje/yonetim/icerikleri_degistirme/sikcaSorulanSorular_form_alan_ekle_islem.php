<?php

include"../baglantiDB.php";

  if(@$_POST["ekle"])
  {
  
    $zaman=date("H:i:s");
  	$sorgu=mysql_query("INSERT INTO  sikcaSorulanSorular  (baslik,icerik) VALUES ('$zaman','')");
    if (!$sorgu) {
    	echo"hatali sorgu".$sorgu;
    }
    
    echo "<script> window.location ='sikcaSorulanSorular1.php';</script>";

  }


?>