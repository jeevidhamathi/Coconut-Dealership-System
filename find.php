<html>
<head>
<title>	Find details</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href='find.css' rel='stylesheet' type='text/css';
</head>
<body>
<div class="form-validation">
<h3><center>Find Details</center></h3>
<form method='post'>
<table>
<tr class="row">
<td class="label"><label for="occupation">CHOOSE YOUR OCCUPATION</td><br>
<td>
<input type="radio" name="occupation" value="seller" checked="checked">
<label for="occupation">SELLER</label>
<input type="radio" name="occupation" value="buyer" checked="checked">
<label for="occupation">BUYER</label><br>
</td></tr>
<tr class="row">
<td class="label"><label for="quantity">ENTER PRODUCT QUANTITY</td>
<td><input type='text' name='quan'></td>
</tr>
<tr>
<td>
<center><input type='submit' name='find' value='find'></center>
</td>
</tr>
<tr>
<td>
<center><input type="button" onClick=window.open("array.php"); value="Sorted_Find"></center>
</td>
</tr>
</div>
</table>
</form>
<?php
if(isset($_POST['find'])){
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "business");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$occupation=$_POST['occupation'];
if($occupation == 'buyer'){
 $quan=$_POST['quan'];
// Attempt select query execution
$sql = "SELECT * FROM seller WHERE quantity=$quan ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		 echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>name</th>";
                echo "<th>mobilenumber</th>";
				echo "<th>product</th>";
				echo "<th>quantity</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['mobilenumber'] . "</td>";
                echo "<td>" . $row['product'] ."</td>";
                echo "<td>" . $row['quantity'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} }
else{
	 $quan=$_POST['quan'];
// Attempt select query execution
$sql = "SELECT * FROM buyer WHERE quantity=$quan";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>name</th>";
                echo "<th>mobilenumber</th>";
				echo "<th>product</th>";
                echo "<th>quantity</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['mobilenumber'] . "</td>";
				echo "<td>" . $row['product'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
   } }
// Close connection
mysqli_close($link);
}
?>
</body>
</html>