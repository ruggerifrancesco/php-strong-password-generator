<?php
    include __DIR__ . '/utilities/functions.php';

    // Isset Mehod is used to check if the passwordLength parameter is set.
    $passwordLength = isset($_GET['passwordLength']) ? intval($_GET['passwordLength']) : "";
    $generatedPassword = "";

    if (!empty($passwordLength)) {
        $generatedPassword = generatePassword($passwordLength);
        if (empty($generatedPassword)) {
            $generatedPassword = "Errore nella creazione della password. Riprova!";
        }
    } else {
        $generatedPassword = "Nessun parametro valido inserito";
    }

    if (isset($_GET['clear']) && $_GET['clear'] === 'true') {
        $generatedPassword = "Nessun parametro valido inserito";
    }
?>

<!DOCTYPE html>
<html lang="en, it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>

    <main>
        <div class="alert alert-info" role="alert">
            <p><?php echo $generatedPassword; ?></p>
        </div>

        <section>
            <form method="GET" action="./index.php">
                <label for="passwordLength">Lunghezza Password:</label>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">max: 50</span>
                    <input type="number" class="form-control" name="passwordLength" id="passwordLength" min="4" max="50">
                </div>
                <div class="buttons-form">
                    <button type="submit" class="btn btn-primary">Generate Password</button>
                    <button type="submit" class="btn btn-secondary" name="clear" value="true">Clear</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>