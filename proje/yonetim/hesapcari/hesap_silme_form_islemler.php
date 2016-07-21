<?php
include"../baglantiDB.php";
$sec="";
$silme="";
@$sec=$_POST["sec"];
@$silme=$_POST["silme"];

if ($sec==""&&$silme=="")
{
	$sec="id";
	@$silme=$_GET["deger"];

}

if (($sec=="sec*")) 
{

	echo 
	"
	<script>
	alert('Lütfen sileme yapmak için kriter belirleyiniz');
	window.location = 'hesapCari.php';
	</script>
	";



}
else
{

		


			if ($sec=="id")
			{

				$kotrolid=mysql_query("SELECT * FROM hesapcari WHERE id='$silme'");
				if ($kotrolid)
				{
					$sart=0;
					while ($satir=mysql_fetch_array($kotrolid))
					{

						if($satir["id"]==$silme)
						{
							$sart=1;
							$sorgusilmeid="DELETE  FROM hesapcari WHERE id='$silme' ";
					
							if(mysql_query($sorgusilmeid)) 
							{
							echo 
								"
								<script>
								alert('Hesap  Başarılı Bir Şekilde Silindi ');
								window.location = 'hesapCari.php';
								</script>
								";
								exit();
																
							}
							
						}


					}
					if($sart==0)
					{
						echo 
						"<script> alert('Hesap  Kaydı Bulunamadı !!!'); window.location = 'hesapCari.php'; </script> ";
						exit();
					}
					

				}
				else
				{
					echo 
					"<script> alert('Hesap Kaydı Bulunamadı !!! '); window.location = 'hesapCari.php'; </script> ";
					exit();
				}
			}

			if($sec=="tc")
			{
				$kotroltc=mysql_query("SELECT * FROM hesapcari WHERE tc='$silme'");
				if ($kotroltc)
				{
					$sart=0;
					while ($satir=mysql_fetch_array($kotroltc))
					{

						if($satir["tc"]==$silme)
						{
							$sart=1;
							$sorgusilmetc="DELETE  FROM hesapcari WHERE tc='$silme' ";
					
							if(mysql_query($sorgusilmetc)) 
							{
							echo 
								"
								<script>
								alert('Hesap  Başarılı Bir Şekilde Silindi ');
								window.location = 'hesapCari.php';
								</script>
								";
								exit();
																
							}
							
						}


					}
					if($sart==0)
					{
						echo 
						"<script> alert('Hesap  Kaydı Bulunamadı !!!'); window.location = 'hesapCari.php'; </script> ";
						exit();
					}
					

				}
				else
				{
					echo 
					"<script> alert('Hesap Kaydı Bulunamadı !!! '); window.location = 'hesapCari.php'; </script> ";
					exit();
				}

			}

			


}



?>
