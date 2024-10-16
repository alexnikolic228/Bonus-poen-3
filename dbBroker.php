<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'kolokvijumi';

$conn = new mysqli($host,$user,$pass,$database);

if ($conn->connect_errno) {
    echo "Neuspesno povezivanje sa bazom" . $conn->connect_errno;
}

function getById($id) {
    global $conn;
    $sql = "SELECT * FROM prijave WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id); // i for integer
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        return $result->fetch_assoc(); // Return the selected row as an associative array
    }
    return null; // Return null if no record is found
}

?>