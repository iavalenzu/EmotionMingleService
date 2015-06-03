<?php 

	//Este array contiene los valores que mostrar el arbol para cada hoja, por el momento son valores random
	//la idea es que sigan alguna logica y representen datos obtenidos de alguna red social lo que 
	//permitiria mostrar el estado de un contacto representado en los colores de las hojas
	$array = array(
	    "Leaf1" => rand(0, 20),
	    "Leaf2" => rand(0, 20),
	    "Leaf3" => rand(0, 20),
	    "Leaf4" => rand(0, 20),
	    "Leaf5" => rand(0, 20),
	    "Leaf6" => rand(0, 20),
	    "Leaf7" => rand(0, 20),
	    "Leaf8" => rand(0, 20)
	);

	echo json_encode($array);

?>
