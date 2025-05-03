<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="assets/css/style.css">
    <title>Az idő</title>
</head>
<body>
    <nav> 
        <?php require("assets/inc/nav.inc.php");?>
    </nav>
    <?php
    $ido=time();

   $napok = [
    'Monday' => 'Hétfő',
    'Tuesday' => 'Kedd',
    'Wednesday' => 'Szerda',
    'Thursday' => 'Csütörtök',
    'Friday' => 'Péntek',
    'Saturday' => 'Szombat',
    'Sunday' => 'Vasárnap'
];

$angolNap = date("l", $ido);
echo"<p class='amainap'>$napok[$angolNap]</p>"; 


    ?>
 
</body>
</html>