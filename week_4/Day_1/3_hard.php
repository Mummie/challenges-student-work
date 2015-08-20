<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php

    /**
     * Copy your shopping cart code from the previous challenge.
     * This time we don't want to add "Item" objects to the shopping cart. Instead, create three new classes:
     * "Book", "DVD" and "VideoGame".
     *
     * Change your shopping cart's "addItem" method so it can accept a Book, DVD or VideoGame object.
     *
     * Now make it so that books are tax-free, DVDs have 5% tax and video games have 10% tax.
     * Make sure your shopping cart can still return the total cost of items and the correct tax amount
     * the customer would need to pay.
     *
     * Bonus points: Can you implement a "removeItem" method on your shopping cart class?
     */


    ///////////////////////////
    // Put your code here!
    ///////////////////////////
    class Book {
        public $name;
        public $price;
        
        public function __construct($name, $price){
            $this->name = $name;
            $this->price = $price;
        }
        function addTax() {
            return (0);
        }
        
    } 
    class VideoGame {
        public $name;
        public $price;
    
        
        public function __construct($name, $price){
            $this->name = $name;
            $this->price = $price;
        }
        function addTax() {
            return (.10);
        }
    } 
    class DVD {
        public $name;
        public $price;
    
        
        public function __construct($name, $price){
            $this->name = $name;
            $this->price = $price;
        }
        function addTax() {
            return (.05);
        }
        
    } 
    
    
    class ShoppingCart {
        public $items = array();
        protected $getCostBeforeTax;
        protected $total_after_tax;
        protected $tax;
        
        public function addItem($item){
            $this->items[] = $item;
        }
        
        function getCostBeforeTax(){
            foreach($this->items as $item){
                $this->total_before_tax += $item->price;
            }
            return $this->total_before_tax;
        }
        
        function getTaxAmount(){
            foreach($this->items as $item){
                $this->tax += ($item->price)*($item->addTax());
            }
            return $this->tax;
        }
        
        function getCostAfterTax(){
            $this->total_after_tax = ($this->total_before_tax)+($this->tax);
            return $this->total_after_tax;
        }
    }
    
    $cart = new ShoppingCart();
    $cart->addItem(new Book('Cheap Book', 2.99));
    $cart->addItem(new Book('Expensive Book', 24.99));
    $cart->addItem(new DVD('Movie', 12.99));
    $cart->addItem(new VideoGame('Video Game', 59.99));
    

    $beforeTax = number_format($cart->getCostBeforeTax(), 2);
    $taxAmount = number_format($cart->getTaxAmount(), 2);
    $afterTax = number_format($cart->getCostAfterTax(), 2);

    echo "<p>Total cost before tax: \$$beforeTax</p>";
    echo "<p>Tax amount: \$$taxAmount</p>";
    echo "<p>Total cost after tax: \$$afterTax</p>";

    ?>

</p>

</body>
</html>