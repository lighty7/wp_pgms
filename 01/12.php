<html>
<body>
<h1>Program-12: Simple program in PHP for Searching of data by different criteria </h1> 

<?php
$users = [
    ['id' => 1, 'name' => 'Sanjay', 'age'=>21, 'email' => 'Sanjay@gmail.com'],
    ['id' => 2, 'name' => 'Mansvi', 'age' => 20, 'email' => 'Mansvi@gmail.com'],
    ['id' => 3, 'name' => 'Manupriya', 'age' => 19, 'email' => 'Manupriya@gmail.com'],
    ['id' => 4, 'name' => 'Ambika', 'age' => 20, 'email' => 'Ambika@gmail.com'],
    ['id' => 5, 'name' => 'Harsha', 'age' => 21, 'email' => 'Harsha@yahoo.com']
];

function searchData($data, $criteria, $value) {
    $results = [];
    foreach ($data as $item) {
        if ($item[$criteria] == $value) {
            $results[] = $item;
        }
    }
    return $results;
}

$searchCriteria = 'name'; 
$searchValue = 'Ambika'; 
$searchResults = searchData($users, $searchCriteria, $searchValue);

echo "<h3>Search Results for $searchCriteria = $searchValue: </h3>";
if (count($searchResults) > 0) {
    foreach($searchResults as $result) {
        echo "ID: " . $result['id'] . ", Name: " . $result['name'] . ", Age: " . $result['age'] . ". Email: " . $result['email'] . "<br>";
    }
} else {
    echo "No Results found";
}
?>

</body>
</html>


