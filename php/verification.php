<?php
session_start();

function verifyLogin() {
    if ($_SESSION['login'] != true) {
        echo 'Not logged in!<br />';
        header("Location: login.html");
        die();
    }
}