<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
</head>
<body>
<?php

$nb=$_POST['nb'];
$json = file_get_contents("json/lcd.json");
$json = json_decode($json,true);
$nbarr=array();

echo "Le chiffre à afficher est ".$nb;

while(intdiv($nb,10) != $nb){
    $r = $nb % 10 ;
    array_unshift($nbarr, $r);
    $nb=intdiv($nb,10);
}

echo "<table>";
foreach($nbarr as $n){
    foreach($json as $R=>$D){
        echo "<td>"; 
            foreach($D as $key=>$Value){
                if($R==$n-1 && ($key=="couche1" || $key=="couche2" || $key=="couche3")){
                    echo "<br>$Value";
                }
             }
        echo "</td>";
    }
}
echo "</table>";

     
?>
</body>
</html>