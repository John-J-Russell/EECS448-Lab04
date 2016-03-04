<?php

	$staplerQuantity=$_POST["staplerNum"];
	$staplesQuantity=$_POST["staplesNum"];
	$stapleRemoverQuantity=$_POST["stapleRemoverNum"];
	
	$shippingOption=$_POST["shipOp"];
	$email=$_POST["user"];
	$password=$_POST["pass"];
	
	echo "<link href=\"StoreStyle.css\" rel=\"stylesheet\" type=\"text/css\"/>";
	
	echo "Welcome, " . $email;
	echo "<br> Your password is: " . $password;
	
	echo "<body>";
	echo "<table id=\"output\"> <caption> Receipt </caption> <tr> <th> Item </th> <th> Quantity </th> <th>Price per Unit</th> <th>Subtotal</th> </tr>";
	echo "<tr> <td>Mini-Stapler</td> <td>" . $staplerQuantity . "</td> <td> $". 15.00 . "</td> <td>" . $staplerQuantity*15.00 . "</td> </tr>";
	echo "<tr> <td>Box of Staples</td> <td>" . $staplesQuantity . "</td> <td> $" . 5.00 . "</td> <td>" . $staplesQuantity*5.00 . "</td> </tr>";
	echo "<tr> <td>Staple Remover</td> <td>" . $stapleRemoverQuantity . "</td> <td> $" . 10.00 . "</td> <td>" . $stapleRemoverQuantity*10.00 . "</td> </tr>";
	echo "<tr rowspan=\"4\"> Total: $". ($staplerQuantity*15.00 + $staplesQuantity*5.00 + $stapleRemoverQuantity*10.00);
	echo "</table>";
	echo "</body>";
	
?>
