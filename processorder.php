<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bobovi auto delovi</title>
</head>
<body>
<?php
echo " <p>Narudzbina obradjena u </p>"."<br>";
echo $datum = date("H:i, jS F Y")."<br>";


$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$saprkqty = $_POST['saprkqty'];
$adresa = $_POST['adresa'];

$total_kolicina = 0;
$total_kolicina = $tireqty + $oilqty + $saprkqty;
echo "Kolicina narucenih proizvoda: ". $total_kolicina;

echo "<p>Vasa porudzbina sastoji se od:</p>";
echo htmlspecialchars($tireqty).' komada guma<br>';
echo htmlspecialchars($oilqty).' litara ulja<br>';
echo htmlspecialchars($saprkqty).' komada svecica<br>';


define("GUMACENA", 100);
define("ULJECENA", 20);
define("SVECICECENA", 15);

$ukupan_iznos = 
  $tireqty * GUMACENA +
  $oilqty * ULJECENA +
  $saprkqty * SVECICECENA;
echo "<p>TOTAL: ".number_format($ukupan_iznos, 2)." RSD </p>";

$stopa_poreza = 0.2;

$iznos_sa_pdv = $ukupan_iznos*(1+$stopa_poreza);
echo "<p>Ukljucujuci i PDV :".number_format($iznos_sa_pdv,2)." RSD</p>";
echo "<br>";
echo "<p>Adresa za narucivanje je: $adresa ";


$fp = @fopen("./porudzbina.txt", 'ab');
if(!$fp){
   echo "<p><strong> Your order could not be processed at this time
     .Please try again later</strong>";
   exit;
}
$podaci_za_upis = $datum.'\t'.$tireqty.'komada guma \t'.$oilqty.'litara ulja \t'.$saprkqty.' komada svecica \t\RSD'.$ukupan_iznos.'\t'.$adresa.'\n';
fwrite($fp, $podaci_za_upis, strlen($podaci_za_upis));



?>
</body>
</html>
