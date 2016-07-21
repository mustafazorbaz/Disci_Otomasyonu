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
	window.location = 'index.php';
	</script>
	";
	exit();


}
else
{

		


			if ($sec=="id")
			{

				$kotrolid=mysql_query("SELECT * FROM hastalar WHERE id='$silme'");
				if ($kotrolid)
				{
					$sart=0;
					while ($satir=mysql_fetch_array($kotrolid))
					{

						if($satir["id"]==$silme)
						{
							$sart=1;
							$sorgusilmeid="DELETE  FROM hastalar WHERE id='$silme' ";
					
							if(mysql_query($sorgusilmeid)) 
							{
							echo 
								"
								<script>
								alert('Hasta Kaydı Başarılı Bir Şekilde Silindi ');
								window.location = 'index.php';
								</script>
								";
								exit();
																
							}
							
						}


					}
					if($sart==0)
					{
						echo 
						"<script> alert('Hasta Kaydı Bulunamadı !!!'); window.location = 'index.php'; </script> ";
						exit();
					}
					

				}
				else
				{
					echo 
						"<script> alert('Hasta Kaydı Bulunamadı !!!'); window.location = 'index.php'; </script> ";
					exit();
				}
							
			}

			if($sec=="tc")
			{
				$kotroltc=mysql_query("SELECT * FROM hastalar WHERE tc='$silme'");
				if ($kotroltc)
				{
					$sart=0;
					while ($satir=mysql_fetch_array($kotroltc))
					{
						
						if($satir["tc"]==$silme)
						{
							$sart=1;
							$sorguaramatc="DELETE  FROM hastalar WHERE tc='$silme' ORDER BY id DESC ";

							if(mysql_query($sorguaramatc)) 
							{
									echo 
								"
								<script>
								alert('Hasta Kaydı Başarılı Bir Şekilde Silindi ');
								window.location = 'index.php';
								</script>
								";
								exit();
							}
						}
					}
					if($sart==0)
					{
						echo 
						"<script> alert('Hasta Kaydı Bulunamadı !!!'); window.location = 'index.php'; </script> ";
						exit();
					}


				}
				else
				{
					echo 
						"<script> alert('Hasta Kaydı Bulunamadı !!!'); window.location = 'index.php'; </script> ";
					exit();
				}

			}
	
			


}



?>
