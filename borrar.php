<?php

    include("db.php");

    if (isset($_GET["id"])) {
        $id = $_GET['id'];
        $query = "DELETE FROM facturas WHERE id = $id";
        mysqli_query($conn, $query);
        


        header("location: index.php");
    }



?>