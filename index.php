<?php
    include __DIR__ . '/utilities/functions.php';
    
    $passwordLength = isset($_GET['passwordLength']) ? intval($_GET['passwordLength']) : "";
    $generatedPassword = "";
    
    if (!empty($passwordLength)) {
        $generatedPassword = generatePassword($passwordLength);
        if (empty($generatedPassword)) {
            $generatedPassword = "Failed to generate password. Please try again.";
        }
    } else {
        $generatedPassword = "Select a length to generate a password.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <form method="GET" action="./index.php">
        <label for="passwordLength">Password Length:</label>
        <input type="number" name="passwordLength" id="passwordLength" min="1" max="100" value="10">
        <button type="submit">Generate Password</button>
    </form>

    <p><?php echo $generatedPassword; ?></p>
</body>
</html>