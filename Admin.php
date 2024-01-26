<?php

class Admin extends User {
    // method to upload a product
    public function addProduct($productName, $productImageURL) {
        // upload logic goes here
        echo "Product '{$productName}' uploaded with image '{$productImageURL}'.";
    }
}