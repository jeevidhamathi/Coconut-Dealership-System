<html>
<head>
<title>buyer details</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href='buyer.css' rel='stylesheet' type='text/css';
</head>
<body>

<div class="form-validation">
<h3><center>BUYER DETAILS</center></h3>
<form action="buyerinsert.php" method="post" >
<table>
<tr class="row">
<td class="label"><label for="id">BUYER-ID</td>
<td><input class="text" type="text" id="id" name="id" placeholder="Enter Your Id">
</td>
</tr>
<tr class="row">
<td class="label"><label for="name">BUYER-NAME</label></td>
<td><input class="text" type="text" id="name" name="name" pattern="[a-z A-Z]*" placeholder="Enter Your Name">
</td>
</tr>
<tr class="row">
<td class="label"><label for="email">BUYER-EMAILID</label></td>
<td><input class="text" type="text" id="email" name="email"  pattern="[a-z 0-9 ._%+-]+@[a-z 0-9 .-]+\.[a-z]{2,}$" placeholder="Enter Your MailId">
</td>
</tr>
<tr class="row">
<td class="label"><label for="address">BUYER-ADDRESS</label></td>
<td><input class="text" type="text" id="address" name="address" placeholder="Enter Your Address">
</td>
</tr>
<tr class="row">
<td class="label"><label for="mob">BUYER-MOBILENUMBER</label></td>
<td><input class="text" type="text" id="mobilenumber" name="mobilenumber" pattern="[0-9]*" placeholder="Enter Your MobileNumber">
</td>
</tr>
<tr class="row">
<td class="label"><label for="pro">BUYER WISH PRODUCT</label></td>
<td><input type="radio" id="product" name="product" value="COCONUT"/>
<label for="PRODUCT">COCONUT</label>
<br>
</td>
<td><input type="radio" id="product" name="product" value="TENDER_COCONUT"/>
<label for="PRODUCT">TENDER_COCONUT</label>
</td>
</tr>
<tr class="row">
<td class="label"><label for="pro">PRODUCT-QUANTITY</label></td>
<td><input class="text" type="text" id="quantity" name="quantity" placeholder="Quantity">
</td>
</tr>
<tr>
<td>
<center><input type="submit" value="SUBMIT" name="submit"></center>
</td>
</tr>
</div>
</table>
</form>
</div>
</body>
</html>