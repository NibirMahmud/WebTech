<?php 

require_once 'db_connect.php';


function checkLogin($data){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `users` where username = ? and password = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['username'],
            $data['password']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($stmt-> rowCount() >0) {
        return true;
    }
    else
    {
        return false;
    }
}


function getStatus($data){
    $conn = db_conn();
    $selectQuery = "SELECT status FROM `users` where username = ? and password = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['username'],
            $data['password']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

