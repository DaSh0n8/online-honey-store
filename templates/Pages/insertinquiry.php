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
$first_name =  $_REQUEST['firstname'];
$last_name = $_REQUEST['lastname'];
$phone_number =  $_REQUEST['phonenumber'];
$email_address = $_REQUEST['emailaddress'];
$subject = $_REQUEST['subject'];

// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO inquiries VALUES (default ,'$first_name',
            '$last_name','$phone_number','$email_address','$subject')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$first_name\n $last_name\n "
        . "$phone_number\n $email_address\n $subject");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

</body>

</html>
