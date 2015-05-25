<pre>
<?php 

// $fajl = fopen('fajl.txt', 'r+');
// fwrite($fajl, "Dodao sam ovo");
// $filesize = filesize('fajl.txt');
// $read = fread($fajl, $filesize);

// var_dump($read);
// fclose($fajl);



// file_put_contents('fajl.txt', "Ovo ovde je dodato");
// $fajl = file_get_contents('fajl.txt');


// var_dump($fajl);


//rename('sae.txt', 'funkcije/sae.txt');

//rmdir('funkcije/direktorijum');


$dir = scandir(getcwd());

foreach ($dir as $nesto) {
	if($nesto != "." && $nesto !='..') {
		echo $nesto;
		echo "<br>";
	}
}


$dir = opendir(getcwd());

while($nesto = readdir($dir)) {

	if($nesto != "." && $nesto !='..') {
		echo $nesto;
		echo "<br>";
	}
}





closedir($dir);
 ?>
 </pre>