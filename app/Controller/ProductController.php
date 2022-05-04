<?php

namespace Harun\MvcDasar\Controller;

class ProductController{
    function categories(string $productId, string $categorieId){
        echo "PRODUCT {$productId} CATEGORIES {$categorieId}";
    }

}   