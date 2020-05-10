<?php
require_once '../../components/db.php';

$_SESSION = [];
if(isset($_COOKIE[session_name()])){
    setcookie(session_name(), '', time()-3600, '/');
}
session_destroy();
header('Location: ../../views/users/auth.php');