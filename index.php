<?php
// Submit API endpoint - Transport for Toronto, CANADA 
$transDataJSONString = file_get_contents('https://myttc.ca/finch_station.json');
$transDataObject = json_decode($transDataJSONString);
$transData = $transDataObject->stop_times[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET API PHP Assignment</title>
</head>
<body>
<h1>Transport for Toronto API</h1>
<h2>Fich Station Stop</h2>
<dl>
    <dt>Routes</dt>
        <dd>
        <?php echo $transData->routes->name; ?>
        <?php echo $transData->routes->route_group_id; ?>
        <?php echo $transData->routes->uri; ?>
        </dd>
        
    <?php foreach($transData->stop_times as $time) ?>
    <dt>Departure Time</dt>
        <dd><?php echo $time->departure_time; ?></dd>
    <dt>Departure Time Stamp</dt>
        <dd><?php echo $time->departure_timestamp; ?></dd>
    <dt>Service ID</dt>
        <dd><?php echo $time->service_id; ?></dd>
    <dt>Shape</dt>
        <dd><?php echo $time->shape; ?></dd>
</dl>
</body>
</html>