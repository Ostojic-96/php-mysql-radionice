<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <title>Web Development For Beginners</title>
</head>
<body>
<?php
// Ispis teksta
$stringOne = 'Hello';
$stringTwo = 'World';
$textHelloWorldSingleQuotes = $stringOne . ' ' . $stringTwo;
$textHelloWorldDoubleQuotes = "$stringOne $stringTwo";
$textHelloWorld = "želim ispisati karakter $ pa sam obmotao varijablu u '{}' {$textHelloWorldDoubleQuotes}";

// Arrays
$skills = [
    'HTML',
    'CSS',
    'Javascript'
];

// Associative arrays
$users = [
    ['id' => 1, 'ime' => 'Ivan', 'godine' => 26],
    ['id' => 2, 'ime' => 'Marko', 'godine' => 25],
];

?>
<section>
    <h1>Web Development</h1>
    <h3>Ispis koristeći HTML:</h3>
    <ul class="bg-blue">
        <li>HTML</li>
        <li>CSS</li>
        <li>JavaScript</li>
    </ul>

    <h3>Ispis koristeći PHP:</h3>
    <ul class="bg-red">
        <?php
        foreach ($skills as $skill) {
            echo "<li>$skill</li>";
        }
        ?>
    </ul>

    <h3>Associative arrays</h3>
    <?php foreach ($users as $user): ?>
        <ul class="border-simple">
        <li>Ime: <?= $user['ime'] ?></li>
        <li>Godine: <?= $user['godine'] ?></li>
    </ul>
    <?php endforeach; ?>

    <button id="click-me">Click me</button>
    <hr>
    <p><?php echo $textHelloWorldDoubleQuotes ?></p>

</section>
<script src="./index.js"></script>
</body>
</html>
