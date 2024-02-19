<?php
function get_users(){
    
    global $conn;
    
    $stmt = $conn->query(
        "SELECT * FROM users"
    );

    $users = $stmt->fetchAll(PDO::FETCH_OBJ);
    
    return $users;

}