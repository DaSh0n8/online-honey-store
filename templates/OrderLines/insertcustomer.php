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

// Taking all 9 values from the form data(input)
$first_name =  $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$phone_number =  $_REQUEST['phone_number'];
$email_address = $_REQUEST['email_address'];
$street_address = $_REQUEST['street_address'];
$suburb =  $_REQUEST['suburb'];
$post_code = $_REQUEST['post_code'];
$state = $_REQUEST['state'];
$marketing_emails = $_REQUEST['marketing_emails'];

// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO customers VALUES (default ,'$first_name',
            '$last_name','$phone_number','$email_address','$street_address',
                              '$suburb', '$post_code','$state','$marketing_emails')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$first_name\n $last_name\n "
        . "$phone_number\n $email_address\n $street_address\n$suburb\n$post_code\n$state\n$marketing_emails");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

</body>

</html>
