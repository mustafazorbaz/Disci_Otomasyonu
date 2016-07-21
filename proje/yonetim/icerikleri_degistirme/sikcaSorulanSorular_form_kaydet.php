<?php

include"../baglantiDB.php";

  if(@$_POST["kaydet"])
  {
    //mysql_real_escape_string:  bu  metot  yapıştırılan  yazıların alınmasını da saglar
    
  	$id=$_POST["id"];
  	$baslik=mysql_real_escape_string($_POST["baslik"]);
  	$icerik=mysql_real_escape_string($_POST["icerik"]);
  
	 
    $sorgu=mysql_query("UPDATE  sikcaSorulanSorular SET id='$id',baslik='$baslik',icerik='$icerik'  WHERE id='$id'");
    if (!$sorgu) {
    	echo"hatalı sorgu".$sorgu;
    }
    
    echo "<script> window.location ='sikcaSorulanSorular1.php';</script>";

  }


?>