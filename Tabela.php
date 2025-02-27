<?php

$category = [
    ['id' => 10, "name" => 'Odzież'],
    ['id' => 12, "name" => 'Bluzy'],
    ['id' => 33, "name" => 'Nakrycia'],
    ['id' => 144, "name" => 'Czapki'],
    ['id' => 66, "name" => 'Husty']
];

echo "<table>";
echo "<tr>";
echo "<td>Id</td><td>Nazwa</td>";
echo "</tr>";
foreach($category as $item){
    echo "<tr>";
    echo "<td>".$item['id']."</td><td>".$item['name']."</td>";
    echo "</tr>";
}