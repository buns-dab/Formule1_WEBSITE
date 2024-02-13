<?php
$html = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page HTML Basique</title>
</head>
<body>
    <h1>Bienvenue sur ma page HTML basique</h1>
    <p>Ceci est un paragraphe de texte.</p>
    <p>Voici une liste non ordonnée :</p>
    <ul>
        <li>Élément 1</li>
        <li>Élément 2</li>
        <li>Élément 3</li>
    </ul>
    <p>Voici une liste ordonnée :</p>
    <ol>
        <li>Élément A</li>
        <li>Élément B</li>
        <li>Élément C</li>
    </ol>
</body>
</html>

HTML;
echo $html;
