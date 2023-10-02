<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

<?php
  class Product {
    public readonly int $id;
    public readonly string $name;
    public readonly float $price;

    public function __construct(
        int $id,
        string $name,
        float $price
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
}

$product = new Product(1, 'Laptop', 999.99);
echo $product->name; // Output: Laptop


///name property 

class kid {
    public readonly string $name;

    public function __construct(string $name){
        $this->name = $name;
    }
}

$kid = new Kid('Tom');
echo $kid->name;


// A cake recipe that i don't want to change it should be same.

class Cake {
    public readonly string $recipe;

    public function __construct(string $recipe){
        $this->recipe = $recipe;
    }
}

$cake = new Cake('Chocolate Cake Recipe');

echo $cake->recipe;


// TreasureChest

class TreasureChest {
    public readonly string $content;
    public function __construct(string $content){
       $this->content = $content;
    }
}

$chest = new TreasureChest('Gold Coins');

echo $chest->content;





$user = new User();

$user->setUsername('joe');

 echo $user->username;




class User {
    private readonly string $username;
    private readonly UserProfile $profile;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function setProfile(UserProfile $profile)
    {
        $this->profile = $profile;
    }

    public function profile(): UserProfile

    {
        return $this->profile;
    }
}

$user = new User('joe');
$user->setProfile(new UserProfile('Joe Doe','(408)-555-6666'));





?>

<!-- 
class User 
{
    public $username;
}

$user = new User();

var_dump($username);



class User {
    public readonly $username;
} -->





</body>
</html>