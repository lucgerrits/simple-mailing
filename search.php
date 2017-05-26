<?php
/**
 * simple-mailing - A simple email manager
 *
 * @package  simple-mailing
 * @author   Luc Gerrits <luc.gerrits@orange.fr>
 */
include "include/top.php";

if (isset($_GET["delete"])) {
	$newdata = array('$set' => array("enable" => false));
	$contacts->update(array( '_id' => new MongoID( $_GET["delete"] ) ),$newdata );
}
?>

<div class="container">
	<ol class="breadcrumb">
	  <li class="breadcrumb-item active">Search</li>
	</ol>
	<div class="row">
		<div class="col">
		<h1><u>Contacts:</u></h1>
			<table id="search-table" class="display" width="100%" cellspacing="0">
		        <thead>
		            <tr>
		                <th>Name</th>
		                <th>Email</th>
		                <th>Social</th>
		                <th>Language</th>
		                <th></th>
		            </tr>
		        </thead>
		        <tfoot>
		            <tr>
		                <th>Name</th>
		                <th>Email</th>
		                <th>Social</th>
		                <th>Language</th>
		                <th></th>
		            </tr>
		        </tfoot>
		    </table>
	    <small>If you delete an contact by accident, recover is possible :).</small>
	    <small>If the contact has disappeared by itself it mean the contact has unsubscribe from xxxxxxxx by clicking unsubscribe in one the email you has send.</small>
		</div>
	</div>
</div>

<?php
include "include/bottom.php";
?>