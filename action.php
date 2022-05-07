<?php  
	include 'cartback.php';
?>
<?php  
	if (isset($_POST['action']) && $_POST['action']=='Order') {
        $getClient = $con->query("SELECT * FROM clients WHERE clientPhone='$_POST[clientphone]'");
        if (mysqli_num_rows($getClient) > 0) {
        	$updateClient = $con -> query("UPDATE `clients` SET `clientNames`='$_POST[clientnames]', `clientLocation`='$_POST[shippingaddress]' WHERE `clientPhone` = '$_POST[clientphone]'");
        	$client = mysqli_fetch_array($getClient);
        	$clientId = $client['clientId'];
        	if ($updateClient) {
        		$clientdeal = true;
        	}
        	else {
        		$clientdeal = false;
        	}
        }
        else {
        	$clientId = time();
        	$insertClient = $con -> query("INSERT INTO `clients`(`clientId`, `clientNames`, `clientLocation`, `clientPhone`) VALUES ('$clientId','$_POST[clientnames]','$_POST[shippingaddress]','$_POST[clientphone]')");
        	if ($insertClient) {
        		$clientdeal = true;
        	}
        	else {
        		$clientdeal = false;
        	}
        }
        if ($clientdeal) {
	        $dueTime        = time();
	        $orderId    = time();
	        $orderToken     = sha1(microtime().''.rand(100,900).''.$clientId);
	        $insertOrder = $con -> query("INSERT INTO `orders`(`orderId`, `orderToken`, `clientId`, `totalPrice`, `paymentStatus`, `shippingAddress`, `orderStatus`, `paymentMethod`, `paymentAccount`, `createdDate`) VALUES ('$orderId','$orderToken','$clientId','$cartTotal','Pending','$_POST[shippingAddress]','Pending','$_POST[paymentMethod]','$_POST[mtnpaynumber]','$dueTime')");
	        if ($insertOrder) {
		        $i = 0; 
		        foreach ($_SESSION["cart_array"] as $each_item) 
		        { 
		            $itemId = $each_item['item_id'];
		            $getProduct = $con->query("SELECT * FROM items WHERE itemId='$itemId'");
		            while ($itemrow = mysqli_fetch_array($getProduct)) {
		                $orderDetailId  = time().''.rand(100,999);
		                $price          = $itemrow['itemPrice'];
		                $itemQuantity   = $each_item['quantity'];
		                // $maxqty         = $itemrow['itemQuantity'];
		                // if ($each_item['quantity']>$maxqty) {
		                //     $givenQuantity = $maxqty;
		                // }
		                // else {
		                //     $givenQuantity = $each_item['quantity'];
		                // }
		                // $newQuantity = $maxqty - $givenQuantity;
		                $insertOrderdetail = $con -> query("INSERT INTO `orders_details`(`orderDetailId`, `orderId`, `orderToken`, `productId`, `productQty`, `productPrice`) VALUES ('$orderDetailId','$orderId','$orderToken','$itemId','$itemQuantity','$price')");
		                if ($insertOrderdetail) {
		                }
		            }
		        }
		        echo "Check you phone to approve transaction";
	        }
	        else {
	        	echo "We have problem with database";
	        }
        }
        else {
        	echo "We have a problem, please try again";
        }
	}
?>