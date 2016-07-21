<?php
include "baglantiDB.php";
$tarih=$_POST["tarihilk"];


//echo "<!--Size  Adetini göstrir SİZE 1 olursa açılır menü olur--> ";
$deger=0;
$sayac=0;
$sorgu1="Select saat From saatler ";
if($sonuc=mysql_query($sorgu1))
{
		while($satir=mysql_fetch_array($sonuc))
		{
				//echo $satir["id"]."-".$satir["saat"]."<br/>";
				

			$sorgu2="Select saat From randevular WHERE tarih='$tarih' ";
			//echo "<option value='s'>$sorgu2</option>";
			if($sonuc2=mysql_query($sorgu2))
			{				
				while($satir2=mysql_fetch_array($sonuc2))
				{
					if($satir["saat"]===$satir2["saat"])
					 {
							$deger=1;
							$sayac++;
							if($sayac==9)
							{
									echo "<option value='DOLU'>DOLU</option>";
							}
							break;
					 }

					
			 	}
			 	 if($deger==0) 
			 		{
			 		echo "<option value='".$satir['saat']."'>".$satir['saat']."</option>";
			 		}
			 		$deger=0;
			}
			
			
		}
}
else
{
 	echo "Baglantıda Problem oluştu";

}





//echo "</select>";

?>