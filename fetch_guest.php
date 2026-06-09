<?php

$file = "data/guests.txt";

echo "<table>";

echo "<tr>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Event</th>
<th>Status</th>
</tr>";

if(file_exists($file)){

    $guests = file($file);

    foreach($guests as $guest){

        $data = explode("|",$guest);

        echo "<tr>";

        echo "<td>".$data[0]."</td>";
        echo "<td>".$data[1]."</td>";
        echo "<td>".$data[2]."</td>";
        echo "<td>".$data[3]."</td>";
        echo "<td>".$data[4]."</td>";

        echo "</tr>";
    }
}

echo "</table>";

?>
