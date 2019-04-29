 <?php
$servername = "localhost";
$username = "root";
$password = "LhuW:kuJG4kE";

try {
    $conn = new PDO("mysql:host=$servername;dbname=inventory", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $sql = "INSERT INTO smokingset VALUES (6, 'Silicone Gas Mask - B/W', 4, 12.3)";




    //use exec() because no results are returned
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();

    echo "New record created successfully. Last inserted ID is : " . $last_id;
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$conn = null;

?> 
