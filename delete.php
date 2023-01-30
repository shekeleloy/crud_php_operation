<?php 
include '../CRUDOPERATION/conn/conn.php';

if (isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM sample WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        // echo "Deleted Successfully";
        header('location: index.php');
    } else {
        die("Connection failed: " . $conn->connect_error);
    }
}
?>
