<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// DATABASE CONNECTION SERVER DIRECTLY
// $servername = "localhost";
// $username = "losreyeslapazgob_admin";
// $password = "adminPHPlosreyes";
// $bd = "losreyeslapazgob_municipioReyes";


// DATABASE CONNECTION LOCAL SERVER MAC
$servername = "localhost";
$username = "root";
$password = "root";
$bd = "municipioReyes";

// Create connection
$conn = new mysqli($servername, $username, $password, $bd);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM noticiasMun";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $outp = "";
    while($row = $result->fetch_assoc()) {
        if ($outp != "") {$outp .= ",";}
        $outp .= '{"idNoticia":"'  . $row["idNoticia"] . '",';
        $outp .= '"tituloNoticia":"'   . utf8_encode($row["tituloNoticia"])        . '",';
        $outp .= '"cuerpoNoticia":"'   . utf8_encode($row["cuerpoNoticia"])       . '",';
        $outp .= '"fechaNoticia":"'   . $row["fechaNoticia"]        . '",';
        $outp .= '"imgNoticia":"'. $row["imgNoticia"]     . '"}';
    }
    $outp ='{"records":['.$outp.']}';
} else {
    echo "0 results";
}
$conn->close();
echo($outp);
?>