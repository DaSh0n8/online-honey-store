<?php

// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = mysqli_connect("localhost", "arunicakeproj", "arunicakeproj", "arunicakeproj");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$customer_id =  $_REQUEST['customer_id'];
$agent_status = $_REQUEST['agent_status'];
$subtotal =  $_REQUEST['subtotal'];
$date = $_REQUEST['date'];
$coupon_applied = $_REQUEST['coupon_applied'];

// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO orders VALUES (default ,'$customer_id',
            '$agent_status','$subtotal','$date','$coupon_applied')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$customer_id\n $agent_status\n "
        . "$subtotal\n $date\n $coupon_applied");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

</body>

</html>
