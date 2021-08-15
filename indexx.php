<?php
$con = mysqli_connect("localhost", "oky31", "Mashudi74!", "learn_docker");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} else {
    echo "connect";
    // Perform query
    if ($result = mysqli_query($con, "SELECT * FROM coba")) {
        echo "Returned rows are: " . mysqli_num_rows($result);
        // Free result set
        mysqli_free_result($result);
    }
}
