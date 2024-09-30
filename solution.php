<?
function twoSum($nums, $target) {
    $map = [];



    for ($i = 0; $i < count($nums); $i++) {
        $complement = $target - $nums[$i];
        
        if (isset($map[$complement])) {
            return [$map[$complement], $i];
        }<?
function twoSum($nums, $target) {
    $map = []; // Key: number, Value: index

    for ($i = 0; $i < count($nums); $i++) {
        $complement = $target - $nums[$i];
        
        if (isset($map[$complement])) {
            return [$map[$complement], $i];
        }
        
        $map[$nums[$i]] = $i;
    }

    return []; // Return an empty array if no solution is found
}

// Example usage
$nums = [2, 7, 11, 15];
$target = 9;
$result = twoSum($nums, $target);
print_r($result); // Output: [0, 1]
?>

        
        $map[$nums[$i]] = $i;
    }



    return []; 
}




$nums = [2, 7, 11, 15];
$target = 9;
$result = twoSum($nums, $target);
print_r($result);
?>
