<?php

include"../baglantiDB.php";

  if(@$_POST["ekle"])
  {
  
  
  	$sorgu=mysql_query("INSERT INTO  klinik  (resim1,resim2,resim3,resim4) VALUES ('','','','')");
    if (!$sorgu) {
    	echo"hatali sorgu".$sorgu;
    }
    
    echo "<script> window.location ='klinik1.php';</script>";

  }


?>