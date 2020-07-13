<html>
<head>
<title>Find details</title>
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
</div>
</table>
</form>
<?php
if(isset($_POST['find']))
{
$con=mysqli_connect("localhost","root","","business");
if (mysqli_connect_errno()) 
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$occupation=$_POST['occupation'];
if($occupation == 'seller')
{
$quan=$_POST['quan'];
$sql = "SELECT quantity from buyer ";
$result = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$num[]=$row['quantity'];

}

function find_Pairs($nums, $pair_sum) 
{
  $nums_pairs = "";
  for ($i = 0; $i <= count($nums); $i++) {
     for ($j = $i + 1; $j < count($nums); $j++) {
        if ($nums[$i] + $nums[$j] == (int)$pair_sum) {
			
           $nums_pairs .= $nums[$i]."," .$nums[$j].",";
		   $a=$nums[$i];
		   $b=$nums[$j];
        }
     }
  }
 return $nums_pairs;
}
$nums =$num;
echo find_Pairs($nums, $quan)."\n";
}
else
{
$quan=$_POST['quan'];
$sql = "SELECT quantity from seller ";
$result = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$num[]=$row['quantity'];
	print_r($num)." ";
}

function find_Pairs($nums, $pair_sum) 
{
  $nums_pairs = "";
  for ($i = 0; $i <= count($nums); $i++) {
     for ($j = $i + 1; $j < count($nums); $j++) {
        if ($nums[$i] + $nums[$j] == (int)$pair_sum) {
			
           $nums_pairs .= $nums[$i]."," .$nums[$j].",";
		   $a=$nums[$i];
		   $b=$nums[$j];
        }
     }
  }
 return $nums_pairs;
}
$nums =$num;
echo find_Pairs($nums, $quan)."\n";
}

mysqli_close($con);

}
?>
</body>
</html>