<?php 
include './include/header.php' ;
//include './include/admin.php';
include './incs/db.php';
?>


<?php

session_start();
if(isset($_SESSION['user_id'])){
    header( 'location: http://localhost/blog_page/Dashboard.php' );
    exit;

}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST["email"];
    $password = $_POST["password"];

    $select = $conn->query("SELECT * FROM `users` where email='$email' AND password='$password'");

    if( $select->rowCount() > 0){
        $user = $select->fetch(PDO::FETCH_OBJ);
        $_SESSION['user_id'] = $user->id;
        header( 'location: http://localhost/blog_page/Dashboard.php' );
        exit;

    }else{
        header( 'location: http://localhost/blog_page/login.php?status=loginfailed' );
        exit;
        
    }
}

?>

        <div class="background login bg-dark">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <form method="post" >
            <h3>Login Here</h3>

            <label for="username">نام کاربری</label>
            <input type="text" placeholder="Email or Phone" id="username" name="email">

            <label for="password">رمز ورود</label>
            <input type="password" placeholder="Password" id="password" name="password">
            <br>
            <button type="submit" value="send" class="">ورود</button>
        </form>

        <?php include './include/footer.php'; ?>

