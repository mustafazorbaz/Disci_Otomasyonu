<?php
session_start();
include "baglantiDB.php";
if (@$_SESSION["oturumuye"]==true)
 {
	
	$tc=$_POST["tc"];
	$sifre=$_POST["sifre"];
	$sorgu=mysql_query("DELETE FROM  uyeler WHERE tc='$tc' and sifre='$sifre' ");
 	@$deger=mysql_num_rows($sorgu);
	if ($sorgu) 
	{
		echo "<script>  alert('Silme İslemi Tamamlandı');
		window.location='uye_cikis.php'; </script> ";

	}
	else
		echo "<script>  alert('Silme İslemi Başarısız'); 
		 window.location='uyesil.php'; </script> ";
		 exit();

}
else
{
	echo "<script>  alert('Üye Silme İçin Lütfen Giriş Yapınız');
	window.location='uyegiris.php'; 
	</script> ";
	exit();
}


?>