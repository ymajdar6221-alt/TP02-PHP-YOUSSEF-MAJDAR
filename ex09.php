
<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$somme = 0;
$valides = 0;
$meilleureNote = -1;
$meilleurEtudiant = "";

echo "<h2>Résultats des étudiants</h2>";

echo "<table border='1' cellpadding='8'>";
echo "<tr><th>Étudiant</th><th>Note</th><th>Résultat</th></tr>";

foreach ($notes as $nom => $note) {
    $resultat = ($note >= 10) ? "Validé" : "Non validé";

    echo "<tr>";
    echo "<td>" . htmlspecialchars($nom) . "</td>";
    echo "<td>$note</td>";
    echo "<td>$resultat</td>";
    echo "</tr>";

    $somme += $note;

    if ($note >= 10) {
        $valides++;
    }

    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $nom;
    }
}

echo "</table>";

$moyenne = $somme / count($notes);

echo "<p>Somme des notes : $somme</p>";
echo "<p>Moyenne de la classe : $moyenne</p>";
echo "<p>Nombre d'étudiants validés : $valides</p>";
echo "<p>Meilleur étudiant : " .
     htmlspecialchars($meilleurEtudiant) .
     " avec $meilleureNote/20</p>";
?>
