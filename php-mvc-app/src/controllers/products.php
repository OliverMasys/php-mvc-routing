<?php

class Products
{
    public function index()
    {
       require "src/models/product.php";
       $model = new Product();
       $products = $model->getData();

       require "view/product-list.php";
    }

    public function show()
    {
        require "view/product-show.php";
    }
}
