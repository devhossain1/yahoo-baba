<?php

$emp = [
    [1,"krisna","Manager",50000],
    [2,"salman","salesman",20000],
    [3,"mohon","computer operator",21000],
    [4,"amir","Driver",5000]
];


echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
echo "<tr>
        <th>ID.</th>
        <th>name</th>
        <th>resignation</th>
        <th>salarry</th>
    </tr>";
foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";


?>