<?php 

$folder_za_brisanje = 'pljas';

function brisac($folder_za_brisanje){
	$sadrzaj_foldera = scandir($folder_za_brisanje);

	$c = count($sadrzaj_foldera);
	for ($i=2; $i < $c ; $i++) { 
		$za_brisanje = $folder_za_brisanje.'/'.$sadrzaj_foldera[$i];
		if (is_file($za_brisanje)){
			unlink($za_brisanje);
		}else{
			brisac($za_brisanje);
		}
	}
	rmdir($folder_za_brisanje);	

}

brisac($folder_za_brisanje);

?>