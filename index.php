<?php
/**
 * simple-mailing - A simple email manager
 *
 * @package  simple-mailing
 * @author   Luc Gerrits <luc.gerrits@orange.fr>
 */
include "include/top.php";
$cursor = $sended->find();
if ($cursor->count() > 0) {
    $cursor->next();
    $image = $cursor->current();
    $tot_sended=$image["total"];
} else {
	$sended->insert(array("total"=>0));
    $tot_sended=0;
}
?>
<style type="text/css">
.home_box{
	background-color: rgba(86,61,124,.15);
	border: 1px solid rgba(86,61,124,.2);
}
</style>
<div class="container">
	<ol class="breadcrumb">
	  <li class="breadcrumb-item active">Home</li>
	</ol>
	<div class="row">
		<div class="col home_box">
			<h2>Contacts: <?php echo $contacts->count(array("enable" => true)); ?> </h2> 
		</div>
		<div class="col home_box">
			<h2>Total Mail Sended: <?php echo $tot_sended; ?> </h2> 
		</div>
	</div>
		<hr>
	<div class="row">
		<div class="col">
		<h2>Mail Status:</h2>
		<code>
<?php
$file = file("/mail_log/send_log");
for ($i = max(0, count($file)-1); $i < count($file); $i++) {
  echo $file[$i] . "<br>";
}
?>
</code>
<br>
<small>(refresh the page to refresh the status)</small>
		</div>
	</div>
</div>

<?php
include "include/bottom.php";
?>