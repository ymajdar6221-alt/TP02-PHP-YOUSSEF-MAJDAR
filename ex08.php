
<?php
echo "<h2>Nombres pairs de 0 à 20</h2>";

$i = 0;

while ($i <= 20) {
    if ($i == 10) {
        echo "<strong>$i</strong><br>";
    } else {
        echo "$i<br>";
    }

    $i += 2;
}

echo "<h2>Comparaison while et do-while</h2>";

$compteur = 5;

while ($compteur < 5) {
    echo "while : $compteur<br>";
    $compteur++;
}

echo "La boucle while a fait 0 exécution.<br>";

$compteur = 5;

do {
    echo "do-while : $compteur<br>";
    $compteur++;
} while ($compteur < 5);

echo "<h2>Continue et break</h2>";

for ($i = 1; $i <= 20; $i++) {
    if ($i % 3 == 0) {
        continue;
    }

    if ($i > 15) {
        break;
    }

    echo "$i ";
}
?>
