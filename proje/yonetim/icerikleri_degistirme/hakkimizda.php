
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Randevular</title>
<link href="../girisSekil.css" rel="stylesheet" type="text/css" />
<link href="../formsekil.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php  session_start(); 
if(!$_SESSION['oturum']==true)
{
  header("Location:../index.php");
}

 ?>
<div id="kapsul">
    <div   id="header">
        <?php include"header.php"; ?>
    </div>
  <div id="content">
     <br/><br/>
     <h1><center>İçerikler </center></h1>    
   
    <?php

	include"../baglantiDB.php";
	
	  if(@$_POST["kaydet"])
	  {
		$icerik=mysql_real_escape_string($_POST["icerik"]); //mysql_real_escape_string:  bu  metot  yapıştırılan  yazıların alınmasını da saglar
		
		$id="1";
		$sorgu=mysql_query("UPDATE  hakkimizda SET id='$id',icerik='$icerik'  WHERE id='$id'");
		if (!$sorgu) {
			echo"hatalı sorgu".$sorgu;
		}
		
	
	  }
	
	
	?>
         <form name="form1" method="post" action="<?php echo "hakkimizda.php";?>">
      <p>
        <label for="icerik"></label>
        <input class="btn" type="submit" name="kaydet" id="kaydet" value="Kaydet">
      </p>
      <p>
        <textarea name="icerik" id="icerik" cols="130" rows="20"><?php
         include"../baglantiDB.php"; 
            $sorgu=mysql_query("SELECT icerik FROM hakkimizda WHERE id='1'");
        while ($satir=mysql_fetch_array($sorgu))
        {
            echo "".$satir["icerik"];
        }  
        ?></textarea>
      </p>
    </form>

     <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
  </div>
      <div id="footer">
        <?php include"footer.php"; ?>
      </div>
</div>

</body>
</html>
