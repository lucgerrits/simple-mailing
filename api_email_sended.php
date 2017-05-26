<?php
/**
 * simple-mailing - A simple email manager
 *
 * @package  simple-mailing
 * @author   Luc Gerrits <luc.gerrits@orange.fr>
 */
include "include/config.php";

$cursor = $email_sended->find();
header('Content-Type: application/json');
$cursor=iterator_to_array($cursor,false);
/*
foreach ($cursor as $key => $value) {
	if(isset($value["_id"]))
	{
		$val=$value["_id"]->{'$id'};
		$cursor[$key]["del_id"]="<a href=\"?delete=".$val."\" class=\"btn btn-danger\">Delete</a>";
		unset($cursor[$key]["_id"]);
	}
}*/
echo json_encode(array("data"=>$cursor));
?>