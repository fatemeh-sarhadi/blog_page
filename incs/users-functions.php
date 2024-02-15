<?php
function get_users(){
    
    global $conn;
    
    $usersStmt = $conn->query(
        "SELECT * FROM users"
    );

    $users = $usersStmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $users;

}