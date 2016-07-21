<?php
	  $database = "db";
      $host = "localhost";
      $dbuser = "root";
      $dbpass = "";
 
	  $baglan = @mysql_connect($host,$dbuser,$dbpass);
	  mysql_query("SET CHARACTER SET 'utf8'");//türrkçe  karekter  probleminin  onune  geçtik
	  mysql_query("SET NAMES 'utf8'");
      if(! $baglan)  
	  	("Ver Baglantisi Yapilamadi");
      if(!@mysql_select_db($database,$baglan)) 
	  	("Veri Tabanina Baglanti Yapilamadi"); 
   
?>
