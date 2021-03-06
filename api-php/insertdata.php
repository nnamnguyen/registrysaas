<?php
    $name_lead = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $passwordlead = '1234';
    $phone = $_POST['phone'];
    $domain = $_POST['domain'];
    $dt = new DateTime('now');
    $id_lead = 'lea';

    $dt->setTimezone(new DateTimeZone('Asia/Ho_Chi_Minh'));
    // $currentDateTime = $dt->format('d-m-Y H:i:s');
    // $expiredDateTime = date('d-m-Y H:i:s', strtotime($currentDateTime. ' + 14 days'));
    $currentDateTime = $dt->format('Y-m-d H:i:s');
    $expiredDateTime = date('Y-m-d H:i:s', strtotime($currentDateTime. ' + 14 days'));
    //database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "infosytemdb";
    // Create connect
    $conn = new mysqli($servername, $username, $password, $db);
    $conn->set_charset("utf8");
    //Check connect
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //Set id = 1 when delete all row
    $countValue = $conn->query("SELECT COUNT(1) FROM leads");
    $row = $countValue->fetch_array();
    $totalRow = $row[0];
    if($totalRow == 0){
        $conn->query("Truncate table leads");
        $stt = 1;
    }//end set id = 1
    else{
        //get id index at last in database
        $idLatestIndex = "SELECT id FROM leads ORDER BY id DESC LIMIT 1;";
        $resultIdLatestIndex = $conn->query($idLatestIndex);
        if ($resultIdLatestIndex->num_rows > 0
        ) {
            while ($rowId = $resultIdLatestIndex->fetch_assoc()) {
                //create stt to create id lead
                $stt = (int)$rowId["id"] + 1;
            }
        }
    }
    //create id lead
    $id_lead .= $stt;
    //end create
    $sql = "INSERT INTO leads (id_lead, name, email, password, company, phone, start_date, end_date, domain ) VALUES ('$id_lead','$name_lead', '$email', '$passwordlead', '$company', '$phone', '$currentDateTime', '$expiredDateTime', '$domain')";
    if ($conn->query($sql) === true) {//tạo được data cho leads mới thì trả về id, không tạo được thì gửi error
        echo $id_lead;
        // echo getcwd();
    } else {
        // echo $conn->error;
        echo 'error';
    }
    $conn->close();
    //Tao Folder 
    mkdir('/opt/lampp/htdocs/registry/api-php/deployments/'.$id_lead,0777,true);
    //Tao wordpress
    $yamlContentWP = file_get_contents('deployments/exam/ex-wordpress-deployment.yaml');
    $yamlContentWP = preg_replace('/ex/',$id_lead,$yamlContentWP);
    file_put_contents('/opt/lampp/htdocs/registry/api-php/deployments/'.$id_lead.'/'.$id_lead.'-wordpress.yaml',$yamlContentWP);
    //Tao mysql
    $yamlContentMysql = file_get_contents('deployments/exam/ex-mysql-deployment.yaml');
    $yamlContentMysql = preg_replace('/ex/',$id_lead,$yamlContentMysql);
    file_put_contents('/opt/lampp/htdocs/registry/api-php/deployments/'.$id_lead.'/'.$id_lead.'-mysql.yaml',$yamlContentMysql);
    //Tao Kustomization
    $yamlContentkus = file_get_contents('deployments/exam/kustomization.yaml');
    $yamlContentkus = preg_replace('/ex-mysql/',$id_lead,$yamlContentkus);
    $yamlContentkus = preg_replace('/ex-wordpress/',$id_lead,$yamlContentkus);
    file_put_contents('/opt/lampp/htdocs/registry/api-php/deployments/'.$id_lead.'/kustomization.yaml',$yamlContentkus);