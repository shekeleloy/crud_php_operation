<?php 
include '../CRUDOPERATION/conn/conn.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO sample (name, email, password) 
    VALUES ('$name', '$email', '$password')"; 

    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "Data insert successfully";
        header('location: index.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Email" name="email">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

        </form>
    </div>
</body>

</html>

<!-- <button type="submit" class="btn btn-primary">Primary</button>
<button type="submit" class="btn btn-primary">Primary</button>  -->