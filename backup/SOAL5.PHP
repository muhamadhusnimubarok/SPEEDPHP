<?php
$bilangan1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bilangan2 = [77, 99, 55, 81, 45, 90, 91, 98];

$bilsama = array_intersect($bilangan1, $bilangan2);
$biltidaksama = array_merge(array_diff($bilangan1, $bilangan2), array_diff($bilangan2, $bilangan1));

echo "<b>Bilangan yang ada di kedua variabel :<br></b>" . implode(', ', $bilsama) . "<hr>";
echo "<b>Bilangan yang tidak ada di kedua variabel :<br></b>" . implode(', ', $biltidaksama) . "<br>";
?>
