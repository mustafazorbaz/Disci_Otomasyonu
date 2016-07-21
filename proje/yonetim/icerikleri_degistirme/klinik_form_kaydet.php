<?php

include"../baglantiDB.php";

  if(@$_POST["kaydet"])
  {
    //mysql_real_escape_string:  bu  metot  yapıştırılan  yazıların alınmasını da saglar
    
  	$id=$_POST["id"];
  	$resim1=mysql_real_escape_string($_POST["resim1"]);
  	$resim2=mysql_real_escape_string($_POST["resim2"]);
  	$resim3=mysql_real_escape_string($_POST["resim3"]);
	$resim4=mysql_real_escape_string($_POST["resim4"]);
    $sorgu=mysql_query("UPDATE  klinik SET id='$id',resim1='$resim1',resim2='$resim2',resim3='$resim3',resim4='$resim4'  WHERE id='$id'");
    if (!$sorgu) {
    	echo"hatalı sorgu".$sorgu;
    }
    
    echo "<script> window.location ='klinik1.php';</script>";

  }


?>