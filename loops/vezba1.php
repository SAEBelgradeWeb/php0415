<?php 
	// 1. administrator - god mode
	// 2. novinar - moze da pise clanke, edituje itd
	// 3. gost - moze samo da cita tekstove i da pise komentare
	$user_level = 'novinar';
	$menu = Array(
		'admin'=> Array('ADMIN PANEL'),
		'novinar'=>Array('NOVI TEKST','LOGOUT'),
		'gost' => Array('B92.NET','VIDEO','TV','RADIO','BLOG','FORUM','APPS','O NAMA')
		);
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>B92.net</title>
 </head>
 <body>
 	<header>
 	<ul>
 		<?php 
 			switch ($user_level) {
 				case 'admin':
 					foreach ($menu['admin'] as $link){
 						echo '<li>'.$link.'</li>';
 					}
 	 			case 'novinar':
 					foreach ($menu['novinar'] as $link){
 						echo '<li>'.$link.'</li>';
 					}
 				case 'gost': 
 					foreach ($menu['gost'] as $link){
 						echo '<li>'.$link.'</li>';
 					}	

 			}
 		?>
 	</ul>
 	</header>
 	<div>
 		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores neque temporibus corporis possimus magnam nihil maxime, rerum debitis vitae odit incidunt nostrum iste eius eum hic deserunt voluptatum suscipit, vero.
 	</div>
 	<footer>
 		
 	</footer>
 </body>
 </html>