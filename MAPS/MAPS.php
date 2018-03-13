<?php

require("Maps.php");

$dom = new DOMDocument("1.0");
$node = $dom->createElement("map");
$parnode = $dom->appendChild($node);

// Opens connection to a MySQL server

$connection=mysql_connect ('localhost', $username, $password);
if (!$connection) {  die('Not connected : ' . mysql_error());}



$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}


$query = "SELECT * FROM map WHERE 1";
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");


while ($row = @mysql_fetch_assoc($result)){
  $node = $dom->createElement("map");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("id",$row['id']);
  $newnode->setAttribute("name",$row['name']);
  $newnode->setAttribute("address", $row['address']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("ing", $row['ing']);
  $newnode->setAttribute("type", $row['type']);
}


echo $dom->saveXML();

?>
