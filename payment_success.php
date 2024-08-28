    <?php
    session_start();
    include('connection.php');

    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        $cart_items = $_SESSION['cart'];


        $user_id = isset($_GET['userid']) ? $_GET['userid'] : 1; 
        $stmt_order = $conn->prepare("INSERT INTO `order` (user_id, transaction_id, total) VALUES (?, ?, ?)");


        $tx = isset($_GET['tx']) ? $_GET['tx'] : '';
        $amount = isset($_GET['amt']) ? $_GET['amt'] : '';

        
        $stmt_order->bind_param("ssd", $user_id, $tx, $amount);
        if ($stmt_order->execute()) {
            $order_id = $stmt_order->insert_id;

            
            $stmt_items = $conn->prepare("INSERT INTO order_items (order_id, product_id, product_name, price, quantity, total) VALUES (?, ?, ?, ?, ?, ?)");

            foreach ($cart_items as $item) {
                $total = $item['price'] * $item['quantity'];

                $stmt_items->bind_param("iisidi", $order_id, $item['id'], $item['name'], $item['price'], $item['quantity'], $total);
                $stmt_items->execute();
            }
            $stmt_items->close();
            $stmt_order->close();
            unset($_SESSION['cart']);
            header('location: index.php');
        } else {
            echo "Error creating order.";
        }
    } else {
        echo "No items in the cart to add.";
    }

    $conn->close();
    ?>
