
<?php
	include('baglantiDB.php');		//veri tabnı  baglantısı için
	session_start();				//session  başladı oturum  yani

	$kullanici=$_POST['kullanici'];
	$sifre=$_POST['parola'];
	 
	if(@$_SESSION['oturum']==true)	//Bu if blogu oturum açıksa  açık sayfa gelsin istedim 
	{
		header("Location:randevular.php");//açıksa  yonetim.php sayfasına yonlendirdi.
	}
	else
	{
		
		$sorgu=mysql_query("SELECT * FROM oturum WHERE user='$kullanici' and  password='$sifre'");
		if($sorgu)					
		{
			
						while($satir=mysql_fetch_array($sorgu))
						{
							
							$_SESSION["id"]=$satir["id"];
							$_SESSION["kullanici"]=$satir["user"];
							$_SESSION["sifre"]=$satir["password"];
							

							$_SESSION["oturum"]=true;
							echo "<script> window.location='randevular.php'; </script> ";
							exit();
						}
				
		}
		
	}
	
	if (@$_SESSION["oturum"]!=true)
	{	
		echo "<script>  alert('Giriş Başarısız !!!'); 
		 window.location='index.php'; </script> ";
		exit();
	}
?>












