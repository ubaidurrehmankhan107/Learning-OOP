<?php
class Product {
    public readonly int $id;
    public readonly string $name;
    public readonly float $price;

    public function__construct(
        int $id,
        string $name,
        float $price

    ){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
}

$product = new Product(1, 'Laptop', 999.99);

echo $product->name;

?>