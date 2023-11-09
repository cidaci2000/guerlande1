<?php

require 'Product.php';
require 'Cart.php';

session_start();

$cart = new Cart;
$productsInCart = $cart->getCart();

var_dump($productsInCart);

if (isset($_GET['id'])) {
  $id = strip_tags($_GET['id']);
  $cart->remove($id);
  header('Location: mycart.php');
}

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

  <a href="index.php">COMPRAR MAIS</a>

  <ul>
    <?php if (count($productsInCart) <= 0) : ?>
      Nenhum produto no carrinho
    <?php endif; ?>

    <?php foreach ($productsInCart as $product) : ?>
      <li>
        <div>
            <div>
            <?php echo $product->getName(); ?>
            <input type="text" value="<?php echo $product->getQuantity() ?>">
            </div>
            <div>
            <p>Preço: R$</p> <?php echo number_format($product->getPrice(), 2, ',', '.') ?>
            <p>Subtotal: R$</p> <?php echo number_format($product->getPrice() * $product->getQuantity(), 2, ',', '.') ?>
            </div>
            <div>
            <a href="?id=<?php echo $product->getId(); ?>">remove</a>
            </div>
        </div>
      </li>
    <?php endforeach; ?>
    <li>Total: R$ <?php echo number_format($cart->getTotal(), 2, ',', '.'); ?></li>
  </ul>

</body>
<style>
body{
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
text-align: center;
margin-left: 20%;

}
ul{
    text-align: center;
    justify-items: center;
    max-width: 50%; 
}
li{
    list-style-type: none; 
    border: 1px solid #000;
    padding: 20px;

}
a{
    border: 1px solid #000;
    background-color: blue;  
    font-size: 20px;
    font-weight: 800;
    color: #000;
    margin-left: 0;
}
</style>
</html>