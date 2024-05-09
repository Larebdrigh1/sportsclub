<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:lareb.database.windows.net,1433; Database = sportclub", "lareb", "Hahahahaha55");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "lareb", "pwd" => "Hahahahaha55", "Database" => "sportclub", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:lareb.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);


print_r($conn);
?>


