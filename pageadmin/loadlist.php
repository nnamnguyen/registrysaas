<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "infosytemdb";
// Create connect
$conn = new mysqli($servername, $username, $password, $db);
$conn->set_charset("utf8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//create list customer from database
$arrLead = array();
$rowLead = 0; //tăng nhờ fetch->row
$sql = "SELECT id,id_lead,name,end_date FROM leads";
$result = $conn->query($sql);
while ($row = $result->fetch_row()) {
    for ($j = 0; $j < 4; $j++) {
        // 0: id(STT), 1: id_lead, 2: name
        $arrEachLead[$j] = $row[$j];
    }
    $arrLead[$rowLead] = $arrEachLead;
    $rowLead++;
}
//count customer from database row
$countrowsql = "SELECT count(*) FROM leads";
$resultCountRow = $conn->query($countrowsql);
if ($resultCountRow->num_rows > 0) {
    while ($row = $resultCountRow->fetch_array()) {
        $countRow = $row["0"];
    }
}