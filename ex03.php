
<?php
define("TAUX_TVA", 20);
define("DEVISE", "MAD");

$prixHT = 60;
$quantite = 3;

$totalHT = $prixHT * $quantite;
$tva = $totalHT * TAUX_TVA / 100;
$totalTTC = $totalHT + $tva;

$totalTTC += 15;

echo "<h2>Facture</h2>";
echo "Prix unitaire HT : $prixHT " . DEVISE . "<br>";
echo "Quantité : $quantite<br>";
echo "Total HT : $totalHT " . DEVISE . "<br>";
echo "TVA : $tva " . DEVISE . "<br>";
echo "Total TTC : " . ($totalHT + $tva) . " " . DEVISE . "<br>";
echo "Total final avec livraison : $totalTTC " . DEVISE . "<br>";

if (defined("TAUX_TVA")) {
    echo "La constante TAUX_TVA existe.";
}
?>
