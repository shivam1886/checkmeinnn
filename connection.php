<?php
$servername = "localhost";
//$username = "check6mv_location";
//$password = "VATw{%b2A#z1";
$username = "root";
$password = "";

  $conn = "mysql:host=$servername;dbname=check6mv_locationdb";
  try {
    
    $db = new PDO($conn, $username, $password);
    
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    
    // $sth = $db->query("SELECT name,address,lat,lng,contact,sunday,monday,tuesday,wednesday,thrusday,friday,saturday,city FROM locations");
    // $locations = $sth->fetchAll();
    
    // echo json_encode( $locations );
    // echo "Connected Successfully";
    } catch (Exception $e) {
    echo $e->getMessage();
    }

?>
