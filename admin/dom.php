<?php 
include("../includes/config.php");

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);


// Select all the rows in the markers table
$sql = "SELECT * FROM members WHERE 1 ";
$result = $conn->query($sql);

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each
if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					// Add to XML document node
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("id",$row['id']);
  $newnode->setAttribute("name",$row['name']);
  $newnode->setAttribute("address", $row['address']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['long']);
  $newnode->setAttribute("type", $row['blood_group']);
				}
}

echo $dom->saveXML();

?>