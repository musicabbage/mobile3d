<?php
class Load {

	// Defaults to constructor as no specific constructor is defined
	function view($file_name, $data = null)
	{
		// Check for data
		if( is_array($data) ) {
			extract($data);
		}

		// Cincatemat the view file with .php extension to include the view as a php file
		include $file_name . '.php';
	}

	// function partialHTML($file_name, $data = null)
	// {
	// 	// Check for data
	// 	if( is_array($data) ) {
	// 		extract($data);
	// 	}
	// 	$dataa = array('Name' => 'John', 'Age' => '24');
	// 	extract($dataa);
	// 	// echo implode(" ", $data[0]);
	// 	$options = array(
	// 		'http' => array(
	// 		'method' => 'GET',
	// 		'content' => http_build_query($dataa))
	// 	);
	// 	$context  = stream_context_create($options);
	// 	// echo $dataa['Name'];
	// 	// echo implode(" ", $dataa);
	// 	// echo json_encode($data);
	// 	echo file_get_contents($file_name . '.php', false, $context);
	// 	// echo '<?php include "application/view/models.php";
	// }
}
?>