<?php

require 'Cart.php';
require 'Product.php';

session_start();

$products = [
  1 => ['id' => 1, 'name' => 'aplique', 'price' => 1000, 'quantity' => 1],
  2 => ['id' => 2, 'name' => 'unha', 'price' => 100, 'quantity' => 1],
  3 => ['id' => 3, 'name' => 'apliques longos', 'price' => 1500, 'quantity' => 1],
  4 => ['id' => 4, 'name' => 'cabelos de crianças', 'price' => 500, 'quantity' => 1],
];


if (isset($_GET['id'])) {
  $id = strip_tags($_GET['id']);
  $productInfo = $products[$id];
  $product = new Product;
  $product->setId($productInfo['id']);
  $product->setName($productInfo['name']);
  $product->setPrice($productInfo['price']);
  $product->setQuantity($productInfo['quantity']);

  $cart = new Cart;
  $cart->add($product);
}

var_dump($_SESSION['cart'] ?? []);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
    <a class="a1" href="../cart/mycart.php"><img class="carro" src="../imagem/carro.png" alt=""></a>
  
  <ul>
        <div class="card">
            <li><p>APLIQUE </p>
            <p>R$ 1000 </p>
            <a class="ancora" href="?id=1">COMPRAR</a>
            <img class="img" src="../imagem/apliques11.jpg" alt="">
            </div>
            <div class="card">
            </li>
            <li><p>UNHA </p>
            <p>R$ 100 </p>
            <a class="ancora" href="?id=2">COMPRAR</a>
            <img class="img" src="../imagem/apliques11.jpg" alt="">
            </div>
            <div class="card">
            </li>
            <li><p>APLIQUE LONGOS </p>
            <p>R$ 1500 </p>
            <a class="ancora" href="?id=3">COMPRAR</a>
            <img class="img" src="../imagem/apliques11.jpg" alt="">
            </div>
            <div class="card">
            </li>
            <li><p>CABELOS DE CRIANÇAS </p>
            <p>R$ 500 </p>
            <a class="ancora" href="?id=4">COMPRAR</a> 
            <img class="img" src="../imagem/apliques10.jpg" alt="">
            </li>
        </div>
  </ul>
 
   
</body>
<style>
body {
  font-family: sans-serif;
  background-image: linear-gradient(
  45deg,
  hsl(240deg 53% 67%) 0%,
  hsl(281deg 42% 62%) 4%,
  hsl(319deg 48% 61%) 9%,
  hsl(339deg 63% 63%) 13%,
  hsl(357deg 66% 65%) 17%,
  hsl(14deg 63% 60%) 22%,
  hsl(28deg 55% 53%) 26%,
  hsl(43deg 51% 46%) 30%,
  hsl(52deg 47% 43%) 35%,
  hsl(43deg 46% 43%) 39%,
  hsl(35deg 43% 42%) 43%,
  hsl(28deg 38% 40%) 48%,
  hsl(22deg 33% 38%) 52%,
  hsl(15deg 27% 35%) 57%,
  hsl(9deg 20% 31%) 61%,
  hsl(2deg 12% 27%) 65%,
  hsl(356deg 15% 27%) 70%,
  hsl(350deg 23% 30%) 74%,
  hsl(344deg 29% 33%) 78%,
  hsl(338deg 35% 35%) 83%,
  hsl(331deg 39% 37%) 87%,
  hsl(325deg 42% 39%) 91%,
  hsl(317deg 44% 41%) 96%,
  hsl(309deg 44% 43%) 100%
);
  background-repeat: no-repeat;
 background-size: cover;
}
.img {
    width: 180px;
    height: 180px;
    margin-top: 2px;
    padding: 5px
}
ul{
    padding: auto;
    display: flex;
    text-align: center;
    

}
.card{
    padding: 2px;
}
li{
    border: 1px solid #000;
    width: 200px;  
    list-style-type: none; 
}
.carro{
    width: 5%;
}
P {
    width: 85%;
  background-color: #ccc;
  padding: 10px;
  border: 1px solid #000;
  text-align: center;
  
  
}

.ancora {
  text-decoration: none;
  color: blue;
  
  background-color: #ccc;
  padding: 10px;
  border: 1px solid #000;
}


.products-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin-top: 20px;
}

.product-item {
  width: 25%;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  padding: 10px;
  text-align: center;
}

.product-item a {
  display: block;
  padding: 10px 20px;
  background-color: #eee;
  color: #000;
  border: 1px solid #ccc;
  text-decoration: none;
}

.product-item a:hover {
  background-color: #ddd;
}

</style>
</html>
