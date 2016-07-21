<?php

include"../baglantiDB.php";

  if(@$_POST["kaydet"])
  {
    //mysql_real_escape_string:  bu  metot  yapıştırılan  yazıların alınmasını da saglar
    
  	$id=$_POST["id"];
  	$baslik=mysql_real_escape_string($_POST["baslik"]);
  	$icerik=mysql_real_escape_string($_POST["icerik"]);
  	$resim=mysql_real_escape_string($_POST["url"]);
    $sorgu=mysql_query("UPDATE  kategoriler SET id='$id',baslik='$baslik',icerik='$icerik',resim='$resim'  WHERE id='$id'");
    if (!$sorgu) {
    	echo"hatalı sorgu".$sorgu;
    }
    
    echo "<script> window.location ='kategoriler1.php';</script>";

  }


?>