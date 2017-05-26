<?php
/**
 * simple-mailing - A simple email manager
 *
 * @package  simple-mailing
 * @author   Luc Gerrits <luc.gerrits@orange.fr>
 */

$sender = array(
	"email"=>"your email",
	"pwd"=>"xxxxxxxxxx",
	"name"=>"Your name"
	);


$m = new MongoClient();
$db = $m->selectDB("your db in mongodb");
$contacts = $db->contacts;
$sended = $db->sended;
$email_sended = $db->email_sended;
$email_tmp = $db->mail_templates;


$top_mail = "<html><head><meta http-equiv=\"Content-Type\"  content=\"text/html charset=UTF-8\" /></head><body>";
$footer_mail = "<hr><p style=\"text-align:center\">Sent by xxxxxxx, for [CONTACT_NAME]<br />xxxxx<br />xxxxx<br /><a href=\"[UNSUBSCRIBE]\" style=\"color:#AAAAAA;\" target=\"_blank\">Unsubscribe</a></p></body></html>";

?>
