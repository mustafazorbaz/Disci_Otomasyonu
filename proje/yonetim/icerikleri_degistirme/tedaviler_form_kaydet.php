<?php

include"../baglantiDB.php";

  if(@$_POST["kaydet"])
  {
    $icerik=mysql_real_escape_string($_POST["icerik"]); //mysql_real_escape_string:  bu  metot  yapıştırılan  yazıların alınmasını da saglar
    
  	$id=$_POST["id"];
  	$baslik=$_POST["baslik"];
  	$url=$_POST["url"];
    $sorgu=mysql_query("UPDATE  tedaviler SET id='$id',baslik='$baslik',icerik='$icerik',url='$url'  WHERE id='$id'");
    if (!$sorgu) {
    	echo"hatalı sorgu".$sorgu;
    }
    
    echo "<script> window.location ='tedaviler1.php';</script>";

  }


?>