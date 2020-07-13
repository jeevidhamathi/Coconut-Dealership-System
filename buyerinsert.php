<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
if(isset($_POST['submit'])){

$link = mysqli_connect("localhost", "root", "", "business");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security.
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$mobilenumber = mysqli_real_escape_string($link, $_REQUEST['mobilenumber']);
$product = mysqli_real_escape_string($link, $_REQUEST['product']);

$quantity = $_POST['quantity'];
echo $quantity;
$sql = "INSERT INTO buyer (id,name,email,address,mobilenumber,product,quantity) VALUES ('$id','$name','$email','$address','$mobilenumber','$product','$quantity')";
// Attempt insert query execution

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}
?>