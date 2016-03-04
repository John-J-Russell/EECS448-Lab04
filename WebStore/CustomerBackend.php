<?php

	$staplerQuantity=$_POST["staplerNum"];
	$staplesQuantity=$_POST["staplesNum"];
	$stapleRemoverQuantity=$_POST["stapleRemoverNum"];
	
	$shippingOption=$_POST["shipOp"];
	$email=$_POST["user"];
	$password=$_POST["pass"];
	
	$shippingOptionText="a";
	
	if($shippingOption==0)
	{
		$shippingOptionText="Free 7-day";
	}
	else if ($shippingOption==5)
	{
		$shippingOptionText="$5.00 3-day";
	}
	else
	{
		$shippingOptionText="$50.00 Overnight";
	}
	
	echo "<link href=\"StoreStyle.css\" rel=\"stylesheet\" type=\"text/css\"/>";
	
	echo "Welcome, " . $email;
	echo "<br> Your password is: " . $password;
	
	echo "<body>";

	echo "<table id=\"output\"> <caption> Receipt </caption> 
		<tr> 
			<th> Item </th> 
			<th> Quantity </th> 
			<th>Price per Unit</th> 
			<th>Subtotal</th> 
		</tr>";

	echo 	"<tr> 
			<td>Mini-Stapler</td> 
			<td class=\"derecho\">" . $staplerQuantity . "</td> 
			<td class=\"derecho\"> $". 15.00 . "</td> 
			<td class=\"derecha\"> $" . $staplerQuantity*15.00 . ".00</td> 
		</tr>";

	echo 	"<tr> <td>Box of Staples</td> 
			<td class=\"derecho\">" . $staplesQuantity . "</td> 
			<td class=\"derecho\"> $" . 5.00 . "</td> 
			<td class=\"derecha\"> $" . $staplesQuantity*5.00 . ".00</td> 
		</tr>";

	echo 	"<tr> 
			<td>Staple Remover</td> 
			<td class=\"derecho\">" . $stapleRemoverQuantity . "</td> 
			<td class=\"derecho\"> $" . 10.00 . "</td> 
			<td class=\"derecha\"> $" . $stapleRemoverQuantity*10.00 . ".00</td> 
		</tr>";

	echo 	"<tr> 
			<td colspan=\"2\"> Shipping Option: </td> 
			<td class=\"derecho\"> " . $shippingOptionText . "</td> 
			<td class=\"derecha\"> $" . $shippingOption . ".00 </td> 
		</tr>";

	echo 	"<tr> 
			<td colspan=\"4\" class=\"derecha\"> Total: $". ($staplerQuantity*15.00 + $staplesQuantity*5.00 + $stapleRemoverQuantity*10.00 + $shippingOption) . ".00</td> 
		</tr>";

	echo "</table>";
	echo "</body>";
	
?>
