<?php
include"baglantiDB.php";
$sec="";
$silme="";
$sec=@$_POST["sec"];
$silme=@$_POST["silme"];
$durum="";
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
	window.location = 'randevular.php';
	</script>
	";



}
else
{

		


			if ($sec=="id")
			{
				$sorguid=mysql_query("SELECT * FROM randevular WHERE id='$silme' ");
				if ($sorguid)
				{
					$sart=0;
					while ($satir=mysql_fetch_array($sorguid))
					{ 

						$sart=1;
						if($satir["id"]==$silme)
						{
							$sorgusilmeid="DELETE  FROM randevular WHERE id='$silme' ";
					
							if(mysql_query($sorgusilmeid)) 
							{
									echo 
										"
										<script>
										alert('Randevu Silindi');
										window.location = 'randevular.php';
										</script>
										";
										exit();		
							}
							
						}

					}	
					if($sart==0)
						echo "<script> alert('Randevu Bulunamadı !!!'); window.location = 'randevular.php'; </script> ";
				}
				else
					echo "<script> alert('Randevu Bulunamadı !!!'); window.location = 'randevular.php'; </script> ";
	
				
			}

			if($sec=="tc")
			{
				$sorgutc=mysql_query("SELECT * FROM randevular WHERE tc='$silme' ");
				if ($sorgutc)
				{
					$sart=0;
					while ($satir=mysql_fetch_array($sorgutc))
					{ 

						$sart=1;
						if($satir["tc"]==$silme)
						{
							$sorgusilmetc="DELETE  FROM randevular WHERE tc='$silme' ";
							if(mysql_query($sorgusilmetc)) 
							{
								
										echo 
										"
										<script>
										alert('Randevu Silindi');
										window.location = 'randevular.php';
										</script>
										";
										exit();
										
							}
							
						}

					}	
					if($sart==0)
						echo "<script> alert('Randevu Bulunamadı !!!'); window.location = 'randevular.php'; </script> ";
				}
				else
					echo "<script> alert('Randevu Bulunamadı !!!'); window.location = 'randevular.php'; </script> ";
			}

			if($sec=="tarih")
			{
				$sorgutarih=mysql_query("SELECT * FROM randevular WHERE tarih='$silme' ");
				if ($sorgutarih)
				{
					$sart=0;
					while ($satir=mysql_fetch_array($sorgutarih))
					{ 

						$sart=1;
						if($satir["tarih"]==$silme)
						{
							$sorgusilmetarih="DELETE  FROM randevular WHERE tarih='$silme' ";
					
							if(mysql_query($sorgusilmetarih)) 
							{
										echo 
										"
										<script>
										alert('Randevu Silindi');
										window.location = 'randevular.php';
										</script>
										";
										exit();
							}
					
						}

					

					}	
					if($sart==0)
						echo "<script> alert('Randevu Bulunamadı !!!'); window.location = 'randevular.php'; </script> ";
				}
				else
				  echo "<script> alert('Randevu Bulunamadı !!!'); window.location = 'randevular.php'; </script> ";
			}

			if($sec=="saat")
			{
				$sorgusaat=mysql_query("SELECT * FROM randevular WHERE saat='$silme' ");
				if ($sorgusaat)
				{
					$sart=0;
					while ($satir=mysql_fetch_array($sorgusaat))
					{ 

						$sart=1;
						if($satir["saat"]==$silme)
						{
							$sorgusilmesaat="DELETE  FROM randevular WHERE saat='$silme' ";
					
							if(mysql_query($sorgusilmesaat)) 
							{
										echo 
										"
										<script>
										alert('Randevu Silindi');
										window.location = 'randevular.php';
										</script>
										";
										exit();
							}
					
						}


					}	
					if($sart==0)
						echo "<script> alert('Randevu Bulunamadı !!!'); window.location = 'randevular.php'; </script> ";

				}
				else
					echo "<script> alert('Randevu Bulunamadı !!!'); window.location = 'randevular.php'; </script> ";
			}


}



?>
