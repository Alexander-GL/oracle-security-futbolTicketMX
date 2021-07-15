<?php
// Create connection to Oracle
$conn = oci_connect('FUTBOLTICKETMX', '271509', 'localhost/xe');

if(!$conn){
//echo 'connection error';
    $m = oci_error();
    echo $m['message'], "\n";
    exit;
}
else{
 // echo "Se ha realizado la conexión a Oracle con éxito!";
}

// Close the Oracle connection
    //oci_close($conn);
?>

