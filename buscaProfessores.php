<?php

header('Access-Control-Allow-Origin: *');

$connect = new PDO("mysql:host=localhost;dbname=id20421245_base_pi", "id20421245_base_pi_exemp", "Batatao1234@");

$received_data = json_decode(file_get_contents("php://input"));

$data = array();

if($received_data->query != '')
{
	$query = "
	SELECT * FROM fatec_professores 
	WHERE first_name LIKE '%".$received_data->query."%' 
	OR curso LIKE '%".$received_data->query."%' 
	ORDER BY salario DESC
	";
}
else
{
	$query = "
	SELECT * FROM fatec_professores 
	ORDER BY salario DESC
	";
}

$statement = $connect->prepare($query);

$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	$data[] = $row;
}

echo json_encode($data);

?>