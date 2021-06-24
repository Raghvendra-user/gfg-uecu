<?php
$insert = false;
if (isset($_POST['name'])) {
    // Set connection variables
    // $server = 'mysql:host=sql204.epizy.com;dbname=epiz_28336656_projects';
    $server = "sql6.freemysqlhosting.net";
    $username = "sql6421251";
    $password = "44ZaFyYdIq";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if (!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['email'];
    $age = $_POST['message'];

    $sql = "INSERT INTO `sql6421251`.`messages` (`name`,  `email`, `message`) VALUES ('$name','$email', '$message'";
    // echo $sql;

    // Execute the query
    if ($con->query($sql) == true) {
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
