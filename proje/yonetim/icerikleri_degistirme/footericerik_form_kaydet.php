<?php

include"../baglantiDB.php";

  if(@$_POST["kaydet"])
  {
    $icerik=mysql_real_escape_string($_POST["icerik"]); //mysql_real_escape_string:  bu  metot  yapıştırılan  yazıların alınmasını da saglar
    
  	$id="1";
    $sorgu=mysql_query("UPDATE  footeryazi SET id='$id',yazi='$icerik'  WHERE id='$id'");
    if (!$sorgu) {
    	echo"hatalı sorgu".$sorgu;
    }
    

  }


?>