<?php
$mysqli = new mysqli("localhost", "root", "", "Mydb");
  
if($mysqli === false){
    die("ERROR: Could not connect. "
            . $mysqli->connect_error);
}
  
$sql = "UPDATE data SET Age='28' WHERE id=201";
if($mysqli->query($sql) === true){
    echo "Records was updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " 
                                        . $mysqli->error;
}
$mysqli->close();
?>
