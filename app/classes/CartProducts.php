<?php

namespace app\classes;

use app\database\models\Read;
use app\interfaces\CartInterface;

class CartProducts
{
    public function products(CartInterface $cartInterface) 
    {
        $productsInCart = $cartInterface->cart();
        $productsInDatabase = require '../app/helpers/products.php';

        //! PDO ! fazendo a listagem dos produtos com o banco de dados

        // $productsInDatabase = (new Read)->all('products');

        // foreach($productsInCart as $productId => $quantity) {
        //     $product = [...array_filter($productsInDatabase, fn($product) =>  (int)$product->id === $productId)];

        //     $products[] = [
        //         'id' => $productId,
        //         'product' => $product[0]->name,
        //         'price' => $product[0]->price,
        //         'qty' => $quantity,
        //         'subtotal' => $quantity * $product[0]->price
        //     ];
        //     $total *= $quantity + $product[0]->price;

        // }

        //! PDO !
        
        $products = [];
        $total = 0;

        foreach($productsInCart as $productId => $quantity) {
            $product = $productsInDatabase[$productId];
            $products[] = [
                'id' => $productId,
                'product' => $product['name'],
                'price' => $product['price'],
                'qty' => $quantity,
                'subtotal' => $quantity * $product['price']
            ];
            $total += $quantity * $product['price'];
        }

        return [
            'products' => $products,
            'total' => $total
        ];
    }
}
