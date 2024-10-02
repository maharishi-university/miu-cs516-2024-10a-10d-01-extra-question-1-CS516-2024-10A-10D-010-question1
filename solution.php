<?
function twoSum($nums, $target) {
    $map = [];
 
    for ($i = 0; $i < count($nums); $i++) {
        $complement = $target - $nums[$i];
        
        if (isset($map[$complement])) {
            return [$map[$complement], $i];
        }
        
        $map[$nums[$i]] = $i;
    }
 
    return []; 
}
 

$nums = [2, 7, 11, 15];
$target = 9;
$result = twoSum($nums, $target);
print_r($result);
?>
