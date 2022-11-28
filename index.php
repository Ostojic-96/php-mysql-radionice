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
    ['id' => 1, 'ime' => 'Ivan', 'godine' => 26, 'bodovi' => 15],
    ['id' => 2, 'ime' => 'Marko', 'godine' => 16, 'bodovi' => 10],
    ['id' => 3, 'ime' => 'Luka', 'godine' => 18, 'bodovi' => 20]
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

    <h3>Korisnici stariji od 18 godina</h3>
    <?php foreach ($users as $user): ?>
        <?php if ($user['godine'] >= 18): ?>
            <ul class="border-simple">
                <li>Ime: <?= $user['ime'] ?></li>
                <li>Godine: <?= $user['godine'] ?></li>
            </ul>
        <?php endif; ?>
    <?php endforeach; ?>

    <h3>Rezultati ispita</h3>
    <p>Rezultati će biti dostupni 29.11.2022.</p>

    <?php
//        function orderUsers($results) {
//            usort($results, function ($a, $b) {
//                return $b['boodovi'] - $a['bodovi'];
//            });
//            return $results;
//        }
        $today = strtotime('2022-11-30');
        $availableDate = strtotime('2022-11-29');
        $shouldPrintResults = $today >= $availableDate;
        usort($users, function ($a, $b) {
            return $b['bodovi'] - $a['bodovi'];
        });

    if ($shouldPrintResults): ?>
            <?php foreach ($users as $rezultat): ?>
                <ul class="border-simple">
                    <li>Ime: <?= $rezultat['ime'] ?></li>
                    <li>Ime: <?= $rezultat['godine'] ?></li>
                    <li>Bodovi: <?= $rezultat['bodovi'] ?></li>
                </ul>
            <?php endforeach; ?>
        <?php endif; ?>

    <button id="click-me">Click me</button>
    <hr>
    <p><?php echo $textHelloWorldDoubleQuotes ?></p>

</section>
<script src="./index.js"></script>
</body>
</html>
