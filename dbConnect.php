<?php
$dbHost = "mysql.cs.uky.edu";
$dbUserAndName = "********";
$dbPass = "u0780919";

$_TABLE_NAME = "Items";
$_PART_ID_FIELD = "PID";
$_PART_PRICE_FIELD = "price";
$_PART_QUANTITY_FIELD = "quantity";
$_PART_NAME_FIELD = "name";
$_PART_DESCRIPTION_FIELD = "description";
$_PART_LINK_FIELD = "Link";

mysql_connect ($dbHost, $dbUserAndName, $dbPass) or die ("Cannot connect to host $dbHost with user $dbUserAndName and the password provided.");
mysql_select_db ($dbUserAndName) or die ("Database $dbUserAndName not found on host $dbHost");
?>