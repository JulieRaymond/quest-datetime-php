<?php
$presentTime = new DateTime('2015-10-21 04:29:00');
$destinationTime = new DateTime('2023-12-31 15:30:00');

$diff = $presentTime->diff($destinationTime);

$totalMinutes = $diff->days * 24 * 60 + $diff->h * 60 + $diff->i;
$carburantNecessaire = ceil($totalMinutes / 10000);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Convertisseur Spatio-Temporel</title>
</head>

<body>
    <main>
        <div class="actualDate">
            <h1>Date actuelle : <?php echo $presentTime->format('F j, Y A h:i A'); ?></h1>
        </div>
        <div class="destinationDate">
            <h1>Date de destination : <?php echo $destinationTime->format('F j, Y A h:i A'); ?></h1>
        </div>
        <div class="travelDuration">
            <h2>Durée du voyage : <?php echo $diff->format('%y années, %m mois, %d jours, %h heures, %i minutes'); ?></h2>
        </div>
        <div class="fuel">
            <h3>Quantité de carburant nécessaire : <?php echo $carburantNecessaire; ?> litres</h3>
        </div>
    </main>
</body>

</html>