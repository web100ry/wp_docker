<?php

/**
 * Created by PhpStorm.
 * User: web100ry
 * Date: 23.05.17
 * Time: 18:23
 */
class Products
{
public $title = "Назва продукту";
public $descriptionProductShort = "Короткий опис товару";
public $descriptionProductFull = "Повний опис товару";
public $price = 0;

    /**
     * @param string $title
     */
function __construct ( $title, $ProductShort, $ProductFull, $price )
{

    $this->title = $title;
    $this->descriptionProductShort = $ProductShort;
    $this->descriptionProductFull = $ProductFull;
    $this->price= $price;
}

    /**
     * @return string
     */
    public function getFullNamePrice()
    {
        return $this->title." ".$this->price." грн.";
    }



    public function setTitle($title)
    {
        $this->title = $title;
    }

}