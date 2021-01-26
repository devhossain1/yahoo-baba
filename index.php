<?php

$marks = [
    "Krishana" =>[
        "physics" =>85,
        "math" =>78,
        "chemistry" =>79
    ],
    "Salman" =>[
        "physics" =>80,
        "math" =>68,
        "chemistry" =>70
    ],
    "Mohon" =>[
        "physics" =>75,
        "math" =>98,
        "chemistry" =>75
    ],
    
];

echo "<table border='2px' cellpadding='5px' cellspacing='0'>
<tr>
    <th>name</th>
    <th>physics</th>
    <th>maths</th>
    <th>chemistry</th>
    
</tr>";
foreach($marks as $key =>$v1){
    echo "<tr>
          <td>$key</td>";
         foreach($v1 as $v2){
             echo "<td> $v2 </td>"; 
         }
    echo "</tr>";
}
echo "</table>";

echo "<pre>";
print_r($marks);
echo "</pre>";

?>