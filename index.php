<?php 
    include_once __DIR__ . '/partials/function.php';

    $psw_length = intval($_GET['password-length']);
    $password = generatePassword($psw_length);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="https://upload.wikimedia.org/wikipedia/commons/3/31/Webysther_20160423_-_Elephpant.svg" />


    <title>Password Generator</title>

</head>
<body>
    <header>
        <h1>Password Generator</h1>
        <hr>
    </header>

    <main>
        <div class="form">
            <form action="index.php" action="GET">
                <label for="password-length">Inserisci la lunghezza della password: </label>
                <input type="number" name="password-length" id="password-length">
                <button type="submit">Crea</button>
            </form>
        </div>

        <div class="result">

            <?php if(strlen($password) > 0) {?>
            <?php 
                echo "<p> La password generata è: <strong> $password </strong></p>"
            ?>
            <?php } else {?>
            <?php 
                echo "<p> digita un numero da 1 a 20 per generare una password </p>"
            ?>
             <?php } ?>
        </div>

    </main>

</body>
</html>