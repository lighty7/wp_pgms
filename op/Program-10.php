<?php
// Function to remove duplicates from a sorted list
function removeDuplicates($sortedList) {
    $length = count($sortedList);

    // Check if the list is empty or has only one element
    if ($length <= 1) {
        return $sortedList;
    }

    // Initialize result array with the first element
    $result = [$sortedList[0]];

    // Iterate through the sorted list and add non-duplicate elements to the result array
    for ($i = 1; $i < $length; $i++) {
        if ($sortedList[$i] != $sortedList[$i - 1]) {
            $result[] = $sortedList[$i];
        }
    }

    return $result;
}

// Example usage
$sortedList = [1, 2, 2, 3, 4, 4, 4, 5, 5, 6, 7, 7];
$uniqueList = removeDuplicates($sortedList);

// Display the original and unique lists
echo "Original Sorted List: " . implode(', ', $sortedList) . "<br>";
echo "List after Removing Duplicates: " . implode(', ', $uniqueList);
?>
