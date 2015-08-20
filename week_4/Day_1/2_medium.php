<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php

    /**
     * Create a class called "ShoppingCart" and another class called "Item".
     * Each item should have a name and price.
     *
     * Add these methods to your shopping cart:
     *  - "addItem" to add an item to the cart.
     *  - "getCostBeforeTax" to return the total cost of the items contained within it.
     *  - "getTaxAmount" to return the amount of tax a customer would need to pay (assuming an 10% tax rate).
     *  - "getCostAfterTax" to return the total cost of the items contained within it including tax.
     */


    ///////////////////////////
    //  Put your code here!  //
    ///////////////////////////
    
    class ShoppingCart { 
        public function addItem() {
            $this->cart = $cart; 
        } 
        public function getCostBeforeTax() { 
            
            
        } 
        public function getTaxAmount() { 
            $tax = 0.10; 
            $this->getCostBeforeTax * $tax;
        } 
        public function getCostAfterTax() { 
            
        } 
    } 
    
    class Item { 
        public $name;
        public $price; 
    } 


    $cart = new ShoppingCart();
    $cart->addItem(new Item('Cheap Book', 2.99));
    $cart->addItem(new Item('Expensive Book', 24.99));
    $cart->addItem(new Item('Movie', 12.99));
    $cart->addItem(new Item('Video Game', 59.99));

    echo "<p>Total cost before tax: \${$cart->getCostBeforeTax()}</p>";
    echo "<p>Tax amount: \${$cart->getTaxAmount()}</p>";
    echo "<p>Total cost after tax: \${$cart->getCostAfterTax()}</p>";

    ?>