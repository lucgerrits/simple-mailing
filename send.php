<?php
/**
 * simple-mailing - A simple email manager
 *
 * @package  simple-mailing
 * @author   Luc Gerrits <luc.gerrits@orange.fr>
 */
include "include/top.php";
?>

<div class="container">
	<ol class="breadcrumb">
	  <li class="breadcrumb-item active">Send Emails</li>
	</ol>
	<div class="row">
		<div class="col">
			<h3>Choose a template and select the receiver(s).</h3>
		</div>
	</div>
	<div class="row">

<?php
if (isset($_POST["receiver"]) && isset($_POST["template"]))
{
	$params=$_POST["template"];
	foreach ($_POST["receiver"] as $key => $value) {
		$params.=" ".$value;
	}
	$cmd = "php5 send_emails.php ".$params." >> /mail_log/send_log &";
	shell_exec($cmd);
?>
	<div class="col">
		<p><?php //echo $cmd; ?></p>
		<div class="alert alert-success" role="alert">
		  Sending .... (This can take a long time, you can close this window if you want.)
		  <br>The status on the email sending is on the home page.
		</div>
	</div>
<?php
}
else
{
?>
		<form method="post">
		<div class="col">
			Send to:
<label class="checkbox-inline"><input type="checkbox" name="receiver[]" value="stranger"> Strangers </label>
<label class="checkbox-inline"><input type="checkbox" name="receiver[]" value="family"> Family </label>
<label class="checkbox-inline"><input type="checkbox" name="receiver[]" value="friend"> Friends </label>
<label class="checkbox-inline"><input type="checkbox" name="receiver[]" value="closefriend"> Close Friends </label>

		</div>
		<div class="col">
		Select a template:<small> (or create one <a href="/email_templates.php?new=1">here</a>)</small>
			<select class="form-control" name="template">
<?php
$cursor = $email_tmp->find(array("enable"=>true));
$cursor=iterator_to_array($cursor,false);
foreach ($cursor as $key => $value) {
	if(isset($value["_id"]))
	{
		$val=$value["_id"]->{'$id'};
		echo "<option value=\"".$val."\">".$value["name"]."</option>";
	}
}
?>
			</select>
			<br>
	        <button type="submit" class="btn btn-primary">Send</button>
	        <br>
	    	<small>Note: If the email in the language for a contact doesn't exist, english will be used by default.</small>
		</div>
		</form>
<?php
}
?>
	</div>
	<div class="row">
		<div class="col">
		<br>
		<hr>
			<h2><u>History:</u></h2>
			<table id="hist-table" class="display" width="100%" cellspacing="0">
		        <thead>
		            <tr>
		                <th>Date</th>
		                <th>Template name</th>
		                <th>to</th>
		                <th>Tot Sended</th>
		            </tr>
		        </thead>
		        <tfoot>
		            <tr>
		                <th>Date</th>
		                <th>Template name</th>
		                <th>to</th>
		                <th>Tot Sended</th>
		            </tr>
		        </tfoot>
		    </table>
		</div>
	</div>
</div>

<?php
include "include/bottom.php";
?>