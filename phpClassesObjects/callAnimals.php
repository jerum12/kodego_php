<?php

include 'Animals.php';


$dog = new Animals('Whitey','Black');
// $dog->setName('Whitey');
// $dog->setColor('Black');

//call database function

$dog->setName('Whitey');
echo $dog->getName();


$dog->setColor('Black');
echo $dog->getColor();
$dog->showDetails();


unset($dog);

?>

<!Doctype html>
<html>

    <head>
        <script>
            function onloadBody(){
                console.log('load complete')
            }
        </script>
        <style>
            h1{
                color: red;
            }
        </style>
    </head>
    <body onload="onloadBody()">
        <h1>Hello Kodego</h1>
    </body>
</html>


?>