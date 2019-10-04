<?php
include("connection.php");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header('Content-Type: text/html; charset=UTF-8'); 

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