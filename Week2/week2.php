<?php

$weekdagen = array(
    'ma' => 'maandag', 
    'di' => 'dinsdag',
    'wo' => 'woensdag',
    'do' => 'donderdag',
    'vr' => 'vrijdag',
    'za' => 'zaterdag',
    'zo' => 'zondag'
    );



foreach($weekdagen as $value){
    echo $value . "<br>"; 
};

echo "<br>";
echo "<br>";

foreach($weekdagen as $key => $value){
    switch ($key) {
        case 'za':
            echo str_replace($key, strtoupper($key), $key) . "</br>";
            break;
        case 'zo':
            echo str_replace($key, strtoupper($key), $key) . "</br>";
            break;
        default:
            echo str_replace($key, ucfirst($key), $key) . "</br>";
            break;
    }
}

echo "<br>";
echo "<br>";

$omgekeerd = array();
for ($x = count($weekdagen) - 1; $x >= 0 && $x < count($weekdagen); --$x) {
    array_push($omgekeerd, array_values($weekdagen)[$x]);
    
};
print_r($omgekeerd);

echo "<br>";
echo "<br>";

print_r(array_reverse($weekdagen));



