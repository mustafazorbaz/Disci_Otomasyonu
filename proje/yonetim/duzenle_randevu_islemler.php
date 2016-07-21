<?php
include"baglantiDB.php";

$duzenleme=$_POST["duzenleme"];
$tarih=$_POST["tarihilk"];


if (($duzenleme=="")||($tarih==""))
{
	echo 
	"
	<script>
	alert('Lütfen düzenleme  için alanı doldurunuz');
	window.location = 'randevular.php';
	</script>
	";
	
}
else
{
			

				$sorguaramaid=mysql_query("SELECT * FROM randevular WHERE id='$duzenleme' ");
				if($sorguaramaid) 
				{
					
						while($satiraramaid=mysql_fetch_array($sorguaramaid))
						{
							
							include "duzenle_randevu_form.php";
							
						}
				}
				else
				{
					echo"<script>Bu id de  Kayıt Bulunamadı</script>
					window.location = 'randevular.php';
					";
					
				}

			
}




?>
