<?php
for ($z = 1; $z <= 10; $z++) {
    $hasil = 5 * $z;
    
  
    if (strpos($hasil, '0') !== false) {
        continue;
    }

    echo "$z x 5 = $hasil<br>";
}
?>