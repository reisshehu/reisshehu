<?php
    echo "Sot eshte " . date("d/m/Y") . "<br>";
    echo "Sot eshte " . date("Y.m.d") . "<br>";
    echo "Sot eshte " . date("Y-m-d") . "<br>";
    echo "Sot eshte " . date("1") . "<br>";
?>
<br>

&copy 2010-<?php echo date("Y");?>
<br>
<?php
    echo "Ora eshte" . date("h:i:sa");
    echo "<br>";
     echo "Ora eshte" . date("h:i:s");
?>
<br>
<?php
 echo date("Y-m-d H:i:s")
?>
<br>

<?php
    $date=mktime(23,04,50,06,12,1999);
    echo date("Y-m-d H:i:s" , $date);
?>