<?php

$emp = [
    [1,"krisna","Manager",50000],
    [2,"salman","salesman",20000],
    [3,"mohon","computer operator",21000],
    [4,"amir","Driver",5000]
];

$emp =[
    [
        "id" =>1,
        "name" =>"krisna",
        "designation" =>"manager",
        "salary" =>50000
    ],
     [
        "id" =>2,
        "name" =>"Salman",
        "designation" =>"Salesman",
        "salary" =>40000
    ],
     [
        "id" =>3,
        "name" =>"mohon",
        "designation" => "computer operator",
        "salary" =>35000
    ],
     [
        "id" =>4,
        "name" =>"amir",
        "designation" =>"Driver",
        "salary" =>5000
    ],
    [
        "id" =>5,
        "name" =>"johnsnow",
        "designation" =>"Driver",
        "salary" =>52000
    ],
    
];

echo "<table border='2px' cellpadding='5px' cellspacing='0'>
<tr>
    <th> id </th>
    <th>name</th>
    <th>designation</th>
    <th>salary</th>

</tr>";
foreach($emp as list("id" =>$id,"name" =>$name,"designation" =>$designation,"salary" =>$salary)){
    echo "<tr><td>$id</td><td> $name</td> <td>$designation</td> <td>$salary</td> </tr>";
}
echo "</table>";

?>