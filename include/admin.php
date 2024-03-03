<?php

session_start();
if(!isset($_SESSION['user_id'])){
    header( 'location: http://localhost/blog_page/login.php' );
    exit;

}
