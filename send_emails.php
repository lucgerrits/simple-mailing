<?php
/**
 * simple-mailing - A simple email manager
 *
 * @package  simple-mailing
 * @author   Luc Gerrits <luc.gerrits@orange.fr>
 */
require_once "Mail.php";
include "include/config.php";
echo "\n";
$now = time();
echo "Starting...\n";
$cursor = $sended->find();
if ($cursor->count() > 0) {
    $cursor->next();
    $image = $cursor->current();
    $tot_sended_id=$image["_id"];
    $tot_send=$image["total"];
}
foreach ($argv as $key => $value) {
	if ($key==0) {
		$path=$value;
	}
	if ($key==1) {
		$id=$value;
	}
	if ($key>1) {
		$receiver[]=$value;
	}
}
$total_sended =0;
//echo "Template id: ".$id."\n";
$c_template = $email_tmp->findOne(array("_id" => new MongoID( $id) ));
echo "Template used: ".$c_template["name"]."\n";
foreach ($receiver as $key => $value) {
	//echo "Search for contacts matching:".$value."\n";
	$cursor = $contacts->find(array("social" => $value, "enable"=> true));
	foreach ($cursor as $key => $value) {
		//echo "User found:".$value["name"]."\n";

		if (time()-$now<(24 * 60 * 60) && $tot_send<400) {
			$usub = "http://www.gerrits-margot.com/unsubscribe.php?id=".$value["_id"]->{'$id'};

			$title=$c_template["name_en"];
			$email_content=$top_mail.html_entity_decode($c_template["content_en"]).str_replace("[CONTACT_NAME]",$value["name"],str_replace("[UNSUBSCRIBE]",$usub,$footer_mail));
			if (isset($c_template["name_".$value["lang"]])) {
				$title=$c_template["name_".$value["lang"]];
				$email_content=$top_mail.html_entity_decode($c_template["content_".$value["lang"]]).str_replace("[CONTACT_NAME]",$value["name"],str_replace("[UNSUBSCRIBE]",$usub,$footer_mail));
			}

			$from = '<'.$sender["email"].'>';
			$to = '<'.$value["email"].'>';
			$subject = $title;
			$body = $email_content;

			$headers = array(
			    'From' => $from,
			    'To' => $to,
			    'Subject' => $subject,
			    "Content-Type" => "text/html; charset=UTF-8\r\n"
			);

			$smtp = Mail::factory('smtp', array(
			        'host' => 'ssl://smtp.gmail.com',
			        'port' => '465',
			        'auth' => true,
			        'username' => $sender["email"],
			        'password' => $sender["pwd"]
			    ));

			$mail = $smtp->send($to, $headers, $body);

			if (PEAR::isError($mail)) {
			    echo("Error sending: ".$mail->getMessage() . "\n");
			} else {
			    echo("Successfully sent!\n");
						$tot_send++;
						$total_sended++;
						$newdata = array('$set' => array("total" => $tot_send));
						$sended->update(array( '_id' => $tot_sended_id ),$newdata );
			}
			echo "Sending...\n";

			$wait=rand(2,10);
			//echo "Wait ".$wait." sec.\n";
			sleep($wait);
		}
		else
		{
			echo "To many email, need to wait 6hrs min.\n";
			sleep(1200);
		}
	}
}
$email_sended->insert(array("date"=>date("Y-m-d H:i:s"),"to"=>implode(", ", $receiver),"total_sended"=>$total_sended,"name"=>$c_template["name"]));
echo "Finiched !\n";
?>