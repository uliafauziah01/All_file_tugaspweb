<!DOCTYPE html>
<html>
<head>
    <title>For Berkalang</title>
</head>
<body>
<pre>
<?php
$nilai = 5; 
$tinggi = intval($nilai);

for ($baris = 1; $baris <= $tinggi; $baris++) {
    
    for ($i = 1; $i <= $tinggi - $baris; $i++) {
        echo " ";
    }
    
    for ($j = 1; $j < 2 * $baris; $j++) {
        echo "*";
    }
    
    echo "\n";
}
?>
</pre>
</body>
</html>
