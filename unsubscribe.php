<?php
/**
 * simple-mailing - A simple email manager
 *
 * @package  simple-mailing
 * @author   Luc Gerrits <luc.gerrits@orange.fr>
 */
$m = new MongoClient();
$db = $m->selectDB("xxxxxxxx");
$contacts = $db->contacts;
if (isset($_GET["id"])) {
	$newdata = array('$set' => array("enable" => false));
	$contacts->update(array( '_id' => new MongoID( $_GET["id"] ) ),$newdata );
}

echo "<h2>You won't receive any emails from xxxxxxxx anymore.</h2>";
?>