class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
function runningSum($nums) {
    
	$sum = 0;
	$result = [];
	for($i = 0; $i < count($nums); $i++) {
		$sum += $nums[$i];
		$result[] = $sum;
	}

	return $result;

}
}