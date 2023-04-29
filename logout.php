<?php


if(isset($_COOKIE['aminloggedin'])) { setcookie('aminloggedin', '', -1, '/'); }

    header("Location: home.php");



?>