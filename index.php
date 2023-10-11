<?php
require_once 'connect.php';

$pdo = new PDO(DSN, USER, PASS);

$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll(PDO::FETCH_ASSOC);

//$query = "INSERT INTO friend (firstname, lastname) VALUES ('Chandler', 'Bing')";
//statement = $pdo->exec($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($friends as $friend): ?>
            <li><?php echo $friend['firstname'] . ' ' . $friend['lastname'] ?></li>
            <?php endforeach ?>
    </ul>

    <form action="create.php" method="post">
        <div>
            <label for="firstname">nom</label>
            <input type="texte" name="firstname" id="firstname" required>
        </div>
        <div>
            <label for="lastname">prénom</label>
            <input type="texte" name="lastname" id="lastname" ></input>
        </div>

        <div class="buttonsLine">
            <button type="submit">Créer un ami <img src="images/mail.png"></button>
        </div>
    </form>
</body>
</html>