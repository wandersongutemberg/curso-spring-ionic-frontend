<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header('Content-Type: application/json');

$categorias = array(
	array(
		'id' => '1',
		'nome' => 'Informática'
	),
	array(
		'id' => '2',
		'nome' => 'Cozinha'
	),
	array(
		'id' => '3',
		'nome' => 'Mesa e banho'
	)
);

echo json_encode($categorias);