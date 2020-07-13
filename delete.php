<html>
<body>
<form method = "post" >
<table width = "400" border = "0" cellspacing = "1" cellpadding = "2">
<tr>
<td width = "100">ID</td>
<td><input name = "id" type = "text" id = "id"></td>
</tr>
<tr>
<td width = "100"> </td>
<td> </td>
</tr>
<tr>
<td>
<input type="radio" name="occupation" value="seller" checked="checked">SELLER<br>
<input type="radio" name="occupation" value="buyer" checked="checked">BUYER<br>
</tr>
</td>
<tr>
<td width = "100"> </td>
<td>
<input name = "delete" type = "submit" id = "delete" value = "Delete">
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['delete'])){
$link = mysqli_connect("localhost", "root", "", "business"); 
  
if($link === false){ 
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 
$occupation=$_POST['occupation'];
if($occupation == 'buyer'){
$id=$_POST['id'];
$sql = "DELETE FROM buyer WHERE id = $id"; 
if(mysqli_query($link, $sql)){ 
    echo "Record was deleted successfully."; 
} }
if($occupation == 'seller'){
$id=$_POST['id'];
$sql = "DELETE FROM seller WHERE id = $id"; 
if(mysqli_query($link, $sql)){ 
    echo "Record was deleted successfully."; 
} }
 mysqli_close($link); 
}
?> 
</body>
</html>
