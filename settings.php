<?php
/**
 * simple-mailing - A simple email manager
 *
 * @package  simple-mailing
 * @author   Luc Gerrits <luc.gerrits@orange.fr>
 */
include "include/top.php";
?>
<style type="text/css">
.home_box{
	background-color: rgba(86,61,124,.15);
	border: 1px solid rgba(86,61,124,.2);
}
</style>
<div class="container">
	<ol class="breadcrumb">
	  <li class="breadcrumb-item active">Settings</li>
	</ol>
	<div class="row">
		<h3>
		Settings<small class="text-muted"> (not edditable)</small>
		</h3>
		<div class="input-group">
		  <span class="input-group-addon" id="basic-email">Sender name firstname</span>
		  <input type="text" class="form-control" aria-describedby="basic-email" value="<?php echo $sender["name"]; ?>">
		</div>
		<div class="input-group">
		  <span class="input-group-addon" id="basic-email">Sender email</span>
		  <input type="text" class="form-control" aria-describedby="basic-email" value="<?php echo $sender["email"]; ?>">
		</div>

	</div>
</div>
<?php
include "include/bottom.php";
?>