<?php
abstract class Good extends AnyGood {
    use Discount;
    public $price;
    public function __construct()
    {
        $this->price = rand(0,100);
    }
}
interface sellable {
    public function sell($price);
}
class Car extends Good{
    public function __construct()
    {
        parent::__construct();
        $this->price = $this->price * 1000;
    }
    public function sell($price)
    {
        echo "SOLD WITH PRICE".$price;
    }
}
class Cat extends Good implements sellable {
    public function __construct()
    {
        parent::__construct();
        $this->price = $this->price * 10;
    }
    public function sell($price)
    {
        echo "sold";
    }
}
abstract class AnyGood {
    public $price;
}
trait Discount {
    public function makeDiscount()
    {
        $this->price = $this->price - ($this->price * 0.1);
    }
}
$a = rand(0,1);
$arr = ['Car', 'Cat'];
$good = new $arr[$a]();
echo $good->price;
$good->makeDiscount();
echo $good->price;
echo $good->sell(1000);