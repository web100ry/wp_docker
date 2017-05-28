
<?php
include 'Products.php';

/**
 * Created by PhpStorm.
 * User: web100ry
 * Date: 23.05.17
 * Time: 17:58
 */
//$product1=new Products();
$product2=new Products("блабла", "тратата ", " опа па апап ", 23.3);
//$product2->setTitle("TEEEEST");

echo $product2->title,"<br>", $product2->descriptionProductFull,"<br>", $product2->descriptionProductShort,"<br>", $product2->price,
"<br>", $product2->getFullNamePrice() ;
