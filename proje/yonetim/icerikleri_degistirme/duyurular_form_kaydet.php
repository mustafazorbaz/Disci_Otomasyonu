<?php

include"../baglantiDB.php";

  if(@$_POST["kaydet"])
  {
    //mysql_real_escape_string:  bu  metot  yapıştırılan  yazıların alınmasını da saglar
    
  	$id=$_POST["id"];
    $tarih=mysql_real_escape_string($_POST["tarih"]);
  	$baslik=mysql_real_escape_string($_POST["baslik"]);
  	$icerik=mysql_real_escape_string($_POST["icerik"]);
  	$resim=mysql_real_escape_string($_POST["url"]);
    $sorgu=mysql_query("UPDATE  duyurular SET id='$id',tarih='$tarih',baslik='$baslik',icerik='$icerik',resim='$resim'  WHERE id='$id'");
    if (!$sorgu) {
    	echo"hatalı sorgu".$sorgu;
    }
    
    echo "<script> window.location ='duyurular1.php';</script>";

  }


?>