<?php

include"../baglantiDB.php";

  if(@$_POST["ekle"])
  {
  
    date_default_timezone_set('Europe/Istanbul');
    $zaman=date("H:i:s");
	$tarih=date("Y-m-d");
  	$sorgu=mysql_query("INSERT INTO  duyurular  (tarih,baslik,resim,icerik) VALUES ('$tarih','$zaman','','')");
    if (!$sorgu) {
    	echo"hatali sorgu".$sorgu;
    }
    
    echo "<script> window.location ='duyurular1.php';</script>";

  }


?>