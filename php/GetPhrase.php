<?php
header("Access-Control-Allow-Origin: *"); // Change * to the specific origin if necessary
header("Access-Control-Allow-Methods: POST");

include 'connectToMySQL.php';
$language = $_POST['language']; // Change 'variableName' to your variable name
$sql = "SELECT * FROM sentences WHERE language = '$language'"; // Change 'your_table' and 'column_name' accordingly
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo "No results found.";
}
mysqli_close($conn);
?>
