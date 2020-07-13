<html>
<head>
<title>seller details</title>
<link href="seller.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="form-validation">
<h3><center>SELLER DETAILS</center></h3>
<form action="sellerinsert.php" method="post" >
<table>
<tr class="row">
<td class="label"><label for="id">SELLER-ID</td>
<td><input class="text" type="text" id="id" name="id" placeholder="Enter Your Id">
</td>
</tr>
<tr class="row">
<td class="label"><label for="name">SELLER-NAME</label></td>
<td><input class="text" type="text" id="name" name="name" pattern="[a-z A-Z]*"  placeholder="Enter Your Name">
</td>
</tr>
<tr class="row">
<td class="label"><label for="email">SELLER-EMAILID</label></td>
<td><input class="text" type="text" id="email" name="email"  pattern="[a-z 0-9 ._%+-]+@[a-z 0-9 .-]+\.[a-z]{2,}$" placeholder="Enter Your MailId">
</td>
</tr>
<tr class="row">
<td class="label"><label for="address">SELLER-ADDRESS</label></td>
<td><input class="text" type="text" id="address" name="address"  placeholder="Enter Your Address">
</td>
</tr>
<tr class="row">
<td class="label"><label for="mob">SELLER-MOBILENUMBER</label></td>
<td><input class="text" type="text" id="mobilenumber" name="mobilenumber"  pattern="[0-9]*"  maxlength="10" placeholder="Enter Your MobileNumber">
</td>
</tr>
<tr class="row">
<td class="label"><label for="pro">SELLER WISH PRODUCT</label></td>
<td><input type="radio"  name="product" value="coconut"/>
<label for="PRODUCT">COCONUT</label>
</td>
<br>
<td><input type="radio"  name="product" value="tendercoconut"/>
<label for="PRODUCT">TENDER_COCONUT</label>
<br>
</td>
</tr>
<tr class="row">
<td class="label"><label for="quantity">PRODUCT-QUANTITY</label></td>
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