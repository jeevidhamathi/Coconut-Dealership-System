<?php
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$Occupation = $_POST['occupation'];
if($Occupation =='buyer')
{
//  To redirect form on a particular page
header("Location:buyer.php");
}
else if($Occupation =='seller')
{
//  To redirect form on a particular page
header("Location:seller.php");
}
else {
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>