<!DOCTYPE html>
<html>
<head>
	<title>Kelime Saydırma</title>
</head>
<body>

<?php
		/*
		sinan karayaman
		20.12.2017
		*/
	function KelimeleriSay($Kelimeler){

		$KelimelerParcala = explode(" ", $Kelimeler);

		$Sonuc = array();
		foreach ($KelimelerParcala as $Kelime) {

		    $Say = 0;
		    foreach ($KelimelerParcala as $Kontrol) {

		        if($Kelime === $Kontrol){

		            $Say++;

		        }

		    }

			$Sonuc[] = $Kelime." Kelimesi ".$Say." Tane Var";

		}

		$Sonuc = array_unique($Sonuc);
		$Sonuc = implode("<br>", $Sonuc);

		return $Sonuc;

	}

	$Kelimeler = 'Buraya Kelimeler Gelecektir';

	$KelimeleriSaydir = KelimeleriSay($Kelimeler);
	echo $KelimeleriSaydir;
	
?>

</body>
</html>