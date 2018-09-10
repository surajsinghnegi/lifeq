<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");
include_once 'query.php';

$object = new query();
$allstorytype = $object->top10();
$json = array();
foreach ($allstorytype as  $result) {
		$data['name'] = $result->Quote_Category;
		// $name2 = (explode(",",$name));

		// $data['name'] = htmlspecialchars($name2[1].' '.$name2[0]);
		$data['quote'] = $result->Quote;
		array_push($json,$data);
}
header('Content-Type: application/json');
echo json_encode($json, JSON_UNESCAPED_UNICODE);


?>