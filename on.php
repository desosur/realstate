<?php
ini_set('display_errors', 'On');
exec("mode com9: BAUD=9600 PARITY=N data=8 stop=1 xon=off");
$fp = fopen("COM9", "w");
 
 
        fwrite($fp, "E");
    
 
print "Encendiendo.";
fclose($fp);
?>&nbsp<a href="off.php">Apagar</a>
<?php

?>