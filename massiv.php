<?php
$massiv = [1,12, 5, 8, 20, 3, 15, 7, 9, 4,100];

$maxIndex = 0;
$minIndex = 0;

for ($i = 1; $i < count($massiv); $i++) {
    if ($massiv[$i] > $massiv[$maxIndex]) {
        $maxIndex = $i;
    }
    if ($massiv[$i] < $massiv[$minIndex]) {
        $minIndex = $i;
    }
}

$temp = $massiv[$maxIndex];
$massiv[$maxIndex] = $massiv[$minIndex];
$massiv[$minIndex] = $temp;

echo "Natija: ";
foreach ($massiv as $son) {
    echo $son . " ";
}
?>
