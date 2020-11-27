<?php
echo "<ul>";
$dane = file_get_contents("http://10.0.11.3:8080");
$dane = json_decode($dane);
foreach($dane as $rekord) {
    echo "<li>" . "ID: " . $rekord->Id . "FIRST NAME: " . $rekord->FirstName . "LAST NAME: " . $rekord->LastName . "</li>";
}
echo "</ul>";
?>
