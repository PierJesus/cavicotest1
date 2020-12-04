<?php
$Method ==$SERVER["REQUEST_METHOD"];
if ($Method="POST")
{
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);
	$text = $json->result->parameters->text;

	switch ($text) {
		case 'Hola':
			$speech = 'Hola, como estás';
			break;
		case 'Adios':
			$speech = 'Adios, nos vemos pronto';
			break;
		case 'Nos vemos':
			$speech = 'Hasta pronto';
			break;

		default:
			$speech ='Disculpa, no te entendí, dime algo mas'
			break;
	}

	$response = new \stdClass();
	$response->speech="";
	$response->displaytext="";
	$response->source = "webhook"
	echo json_encode($response);

}
 else
{
	echo = "Metodo no permitido"
}

?>