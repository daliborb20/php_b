<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <table style="border:0px; padding: 3px">
    <tr>
      <td style="background: #cccccc; text-align:center">Distance</td>
      <td style="background: #cccccc; text-align:center">Cost</td>
    </tr>
<?php
$udaljensot = 50;

while ($udaljensot <= 200){
  echo "<tr>
    <td style=\"text-align: right;\">".$udaljensot."</td>
    <td style=\"text-align: right;\">".($udaljensot /10)."</td>
    </tr>\n";
$udaljensot +=50;

}

?>
 </table>
</body>
</html>

