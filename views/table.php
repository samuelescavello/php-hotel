<?php
$template = "";
foreach ($hotels as $hotel){
    $template .= "<tr> <td>{$hotel['name']}</td> <td>{$hotel['description']}</td> <td>{$hotel['parking']}</td> <td>{$hotel['vote']}</td> <td>{$hotel['distance_to_center']}</td> </tr>";
}

?>

<table class="table table-striped">
<thead>
    <tr>
        <th scope="col">NAME</th>
        <th scope="col">DESCRIPTION</th>
        <th scope="col">PARKING</th>
        <th scope="col">VOTE</th>
        <th scope="col">DISTANCE</th>
    </tr>
</thead> 
<tbody>
    <?= $template ?>
</tbody>   
</table>
