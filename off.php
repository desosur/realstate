<?php
ini_set('display_errors', 'On');
exec("mode com9: BAUD=9600 PARITY=N data=8 stop=1 xon=off");
$fp = fopen("COM9", "w");
 
 
        fwrite($fp, "A");
    
 
print "Apagando.";
fclose($fp);
?>&nbsp<a href="on.php">Encender</a>
<?php

?>