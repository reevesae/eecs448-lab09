<?php
    echo "<link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\">";
    echo "<h1>Order Receipt</h1>";
    


    $hand = $_POST['handNum'];
    $mow = $_POST['mowNum'];
    $mike = $_POST['mikeNum'];
    $shipping = $_POST['ship'];
    $pass = $_POST['password'];
    $user = $_POST['email'];
    $handPrice = number_format(($hand * 70), 2);
    $mowPrice = number_format(($mow * 260), 2);
    $mikePrice = number_format(($mike * 150), 2);
    $shipPrice = 0;

    echo "<h3>Welcome $user!</h3>";
    echo "<div>Your current password is: $pass</div>";
    echo "<h3>Your items: </h3>";
    echo "<div>Push Lawn Mower - Quantity: $hand, Item total: \$$handPrice</div>";
    echo "<div>Gas Lawn Mower - Quantity: $mow, Item total: \$$mowPrice</div>";
    echo "<div>Mike's Lawn Mower - Quantity: $mike, Item total: \$$mikePrice</div>";
    if($shipping == "f") {echo "<h4>Shipping selected: FREE SHIPPING</h4>";}
    if($shipping == "o") {echo "<h4>Shipping selected: OVERNIGHT SHIPPING - \$50.00</h4>"; $shipPrice = 50;}
    if($shipping == "t") {echo "<h4>Shipping selected: THREE DAY SHIPPING - \$5.00</h4>"; $shipPrice = 5;}
    $total = $handPrice + $mowPrice + $mikePrice + $shipPrice;
    $total = number_format($total, 2);
    echo "<h2>ORDER TOTAL: \$$total</h2>";
?>