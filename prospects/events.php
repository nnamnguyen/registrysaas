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
    // get latest id lead to show then send next screen
    $latestRow = "SELECT id_lead FROM leads ORDER BY id DESC LIMIT 1";
    $resultId = $conn->query($latestRow);
    if ($resultId->num_rows > 0) {
        while ($row = $resultId->fetch_assoc()) {
            $idNewLead = $row["id_lead"];
        }
    }
    $sql = "SELECT name, email, company, phone, start_date, end_date, domain FROM leads WHERE id_lead='$idNewLead'";
    $result = $conn->query($sql);
    $name_lead = $result->num_rows;
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $name_lead = $row["name"];
            $company = $row["company"];
            $email = $row["email"];
            $phone = $row["phone"];
            $domain = $row["domain"];
            $start_date = $row["start_date"];
            $end_date = $row["end_date"];
        }
    }
    else {
        $name_lead = 'undefined';
        $company = 'undefined';
        $email = 'undefined';
        $phone = 'undefined';
        $domain = 'undefined';
        $start_date = 'undefined';
        $end_date = 'undefined';
        // echo "undefined";
    }
?>