<?php 
	session_start();
	include("db.php");
	$i = '';
?>
<?php
	if (isset($_POST['pid'])) {
		$pid = $_POST['pid'];
		$quantity = $_POST['qty'];
		$wasFound = false;
		$i = 0;
		//if cart session variable is not set or cart array is empty
		if (!isset($_SESSION['cart_array']) || count($_SESSION['cart_array']) < 1) {
			//what run if cart is empty or not set
			$_SESSION['cart_array'] = array(1 => array('item_id' => $pid, 'quantity' => $quantity ));
		} 
		else {
		// RUN IF THE CART HAS AT LEAST ONE ITEM IN IT
		foreach ($_SESSION['cart_array'] as $each_item) { 
		      $i++;
		      // while (list($key, $value) = each($each_item)) {
				  if ($each_item['item_id'] == $pid) {
					  // That item is in cart already so let's adjust its quantity using array_splice()
					  array_splice($_SESSION['cart_array'], $i-1, 1, array(array('item_id' => $pid, 'quantity' => $each_item['quantity'] + $quantity)));
					  $wasFound = true;
				  } // close if condition
		      // } // close while loop
	       } // close foreach loop
		   if ($wasFound == false) {
			   array_push($_SESSION['cart_array'], array('item_id' => $pid, 'quantity' => $quantity));
		   }
		}
		header("location: cart");
		exit();
	}

?>
<?php 
	//       Section 3 (if user chooses to adjust item quantity)
	if (isset($_POST['item_to_adjust']) && $_POST['item_to_adjust'] != "") {
	    // execute some code
		$item_to_adjust = $_POST['item_to_adjust'];
		$quantity = $_POST['quantity'];
		$quantity = preg_replace('#[^0-9]#i', '', $quantity); // filter everything but numbers
		if ($quantity < 1) { $quantity = 1; }
		if ($quantity == "") { $quantity = 1; }
		$i = 0;
		foreach ($_SESSION["cart_array"] as $each_item) { 
			$i++;
			if ($each_item['item_id'] == $item_to_adjust) {
			  // That item is in cart already so let's adjust its quantity using array_splice()
			  array_splice($_SESSION["cart_array"], $i-1, 1, array(array("item_id" => $item_to_adjust, "quantity" => $quantity)));
			} // close if condition
		} // close foreach loop
	}
?>
<?php 
	//       Section 4 (if user wants to remove an item from cart)
	if (isset($_POST['index_to_remove']) && $_POST['index_to_remove'] != "") {
	    // Access the array and run code to remove that array index
	 	$key_to_remove = $_POST['index_to_remove'];
		if (count($_SESSION["cart_array"]) <= 1) {
			unset($_SESSION["cart_array"]);
		} else {
			unset($_SESSION["cart_array"]["$key_to_remove"]);
			sort($_SESSION["cart_array"]);
		}
	}
?> 
<?php
	// if useer choses to empty his/her shopping cart
	if (isset($_GET['cmd']) && $_GET['cmd'] == 'emptycart') {
		unset($_SESSION['cart_array']);
	}

?>

<?php
	//render the cart for the user to view
	$cartOutput = '';
	$cartTotal = 0;
	$cartTotalM = '';
	$product_qty_array = '';
	$product_id_array = '';
	$quantity_array = '';
	if (!isset($_SESSION['cart_array']) || count($_SESSION['cart_array']) < 1) {  
		$cartOutput.='<tr>';
		$cartOutput.= '
			<td colspan="5">
				<h2 align="center">Your order cart is empty!<br>

			 		<a href="menu" style="color: green;  font-size: 60%; text-decoration: none">Proceed to order ..
			 		</a>
			 	</h2>
		 	</td>
		';  
		$cartOutput.='</tr>';
	}
	else{
		$i=0;
		foreach ($_SESSION['cart_array'] as $each_item) {
			$item_id = $each_item['item_id'];
			$sql = $con ->query("SELECT * FROM items WHERE itemId = '$item_id' LIMIT 1");
			while ($row = mysqli_fetch_array($sql)) {
				$ItemName = $row['itemTitle'];
				$ItemId = $row['itemId'];
				$ItemPrice = $row['itemPrice'];
				$ItemImage = $row['itemImage'];
				// $product_qty_array .= "$ItemName ".$each_item['quantity']."/";
			}
			$form = $i*100;
			$totalItemPrice = $ItemPrice * $each_item['quantity'];
			$cartTotal = $totalItemPrice + $cartTotal;
			// Create the product array variable
			$product_id_array .= "".$each_item['item_id'].",";
			$quantity_array .= "".$each_item['quantity'].",";  
			$cartOutput.='<tr>';
			$cartOutput.='<td><img src="images/items/'.$ItemImage.'" width="50px"> '.$ItemName.'</td>';
			$cartOutput.='<td>
							<form method="post" id="'.$form.'">
								<input name="quantity" type="number" value="' . $each_item['quantity'] . '" style="height: 30px;width: 55px;"/>
								<input name="item_to_adjust" type="hidden" value="' . $item_id . '" />
								<input name="adjustBtn' . $item_id . '" hidden />
								<a onclick="return document.getElementById('.$form.').submit()" href="javascript:;"><i class="ion-ios-refresh h3 text-orange"></i></a>
							</form>
						  </td>
						';
			$cartOutput.='<td>Frw '.number_format($totalItemPrice).'</td>';
			$cartOutput.='<td>
							<form method="post" id="'.$i.'">
								<input name="index_to_remove" type="hidden" value="' . $i . '" />
								<a onclick="return document.getElementById('.$i.').submit()" href="javascript:;"><i class="ion-ios-trash h3 text-danger"></i></a>
							</form>
						  </td>
						';
			$i++;
		}
	}

?>