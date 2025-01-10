<?php
include("config.php");
if (isset($_POST['edit']) && isset($_POST['id'])) {
    if (!empty($_POST['name']) && ($_POST['price']) != 'NULL') {
        $id = $_POST['id'];
        $name=trim($_POST['name']);
        $price=trim($_POST['price']);


        $sql = "UPDATE honey SET  name=?, price=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute( [$name,$price,$id]);
        echo "SUCCESSFULLY";
    } else{ echo " PLEASE INPUT ALL LABEL";
}}
?>