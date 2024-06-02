<!DOCTYPE html>
<html lang="lt">
<head>
<meta charset="UTF-8">
<title>3x+1 objektai</title>
<link rel="stylesheet" href="styles.css">
</head>
 <body>
<div class="container">
<h1>3x+1 objektai</h1>
<form action="3xobj.php" method="get">
<label>Įveskite norimą pradinį skaičių (0 < x <= 1000000):</label><br>
<input type="number" name="number"><br>

<label>Arba įveskite intervalą (0 < x1, x2 <= 1000000):</label><br>
Pradžia: <input type="number" name="start"><br>
Pabaiga: <input type="number" name="end"><br>
  <label>Aritmetinės progresijos pradinis skaičius (a):</label><br>
<input type="number" name="a"><br>
<label>Progresijos skirtumas (d):</label><br>
<input type="number" name="d"><br>
<label>Narių skaičius (n):</label><br>
<input type="number" name="n"><br>

<input type="submit" value="Vykdyti"><br>
</form>
  <div class="result">
<?php
include 'Seka.php';

$calculator = new Seka();
  if (isset($_GET["number"]) && !empty($_GET["number"])) {
$x = $_GET["number"];
$result = $calculator->iterationCounter($x);
echo "<p>Skaičiui $x iteracijų skaičius: " . $result['iterations'] . "</p>";
echo "<p>Sekos reikšmės: " . implode(", ", $result['sequence']) . "</p>";
}
if (isset($_GET["start"]) && isset($_GET["end"]) && !empty($_GET["start"]) && 
empty($_GET["end"])) {
$start = $_GET["start"];
$end = $_GET["end"];
$results = $calculator->intervalCounter($start, $end);
foreach ($results as $number => $result) {
echo "<p>Skaičiui $number iteracijų skaičius: " . $result['iterations'] . "</p>";
echo "<p>Sekos reikšmės: " . implode(", ", $result['sequence']) . "</p>";
}
}
  if (isset($_GET["a"]) && isset($_GET["d"]) && isset($_GET["n"]) && !empty($_GET["a"]) && 
empty($_GET["d"]) && !empty($_GET["n"])) {
$a = $_GET["a"];
$d = $_GET["d"];
$n = $_GET["n"];
$progression = $calculator->arithmeticProgression($a, $d, $n);
echo "<p>Aritmetinė progresija: " . implode(", ", $progression) . "</p>";
}
?>
</div>
</div>
</body>
</html>
