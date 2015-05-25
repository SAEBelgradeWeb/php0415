<?php 
		
	function obrisi_sve($dirzaobrisati){
		// sadrzaj trenutnog direktorijuma
		var_dump($dirzaobrisati);
			// broji clanove niza			
			$skeniran = scandir($dirzaobrisati);
			var_dump($skeniran);
			$br = count($skeniran);
			echo $br;
			// otvara i stampa dir
			$otvoren = opendir($dirzaobrisati);
			var_dump($otvoren);
				for ($i=0; $i < $br; $i++) {
					echo "loop";
					// cita dir 
					$procitan = readdir($otvoren);
					var_dump($procitan);
					// skladisti trenutni fajl/folder
					$trenutni = $dirzaobrisati . "/" . $procitan;
					//sklanja tacke
					if($procitan !== "." && $procitan !== ".."){
					// proverava da li je fajl ili folder
						if(is_file($trenutni)){
							echo "isfile";
							unlink($trenutni);
							$novidir = $dirzaobrisati;
						} elseif(is_dir($trenutni)){
							echo "isdir";
							$novidir = $trenutni;							
						} 
					} else {
						echo "else";
						rmdir($dirzaobrisati);
						$novidir = 'C:\wamp\www\delete';
					}
				}




		echo "<br>novi";
		var_dump($novidir);
		echo "trenutni";
		var_dump($trenutni);
		// echo "parent";
		// var_dump(dirname($trenutni));

		obrisi_sve($novidir);
			
		


		
	}

	obrisi_sve('C:\wamp\www\delete');


 ?>