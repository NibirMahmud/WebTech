<?php
require_once 'db_connect.php';

function getUserFirtName(){
    $conn = db_conn();
    $selectQuery = "SELECT customername FROM `tbl_customer` where username =  ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $_SESSION['username']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}