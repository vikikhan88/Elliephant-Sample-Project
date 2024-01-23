<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $productData = [
            ['name' => 'Basic Tee 1', 'price' => 30.00, 'feature_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'gallery_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'shipping_cost' => 10.00, 'product_status' => 1],
            ['name' => 'Basic Tee 2', 'price' => 31.00, 'feature_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'gallery_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'shipping_cost' => 10.00, 'product_status' => 1],
            ['name' => 'Basic Tee 3', 'price' => 32.00, 'feature_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'gallery_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'shipping_cost' => 10.00, 'product_status' => 1],
            ['name' => 'Basic Tee 4', 'price' => 33.00, 'feature_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'gallery_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'shipping_cost' => 10.00, 'product_status' => 1],
            ['name' => 'Basic Tee 5', 'price' => 34.00, 'feature_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'gallery_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'shipping_cost' => 10.00, 'product_status' => 1],
            ['name' => 'Basic Tee 6', 'price' => 35.00, 'feature_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'gallery_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'shipping_cost' => 10.00, 'product_status' => 1],
            ['name' => 'Basic Tee 7', 'price' => 36.00, 'feature_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'gallery_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'shipping_cost' => 10.00, 'product_status' => 1],
            ['name' => 'Basic Tee 8', 'price' => 37.00, 'feature_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'gallery_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'shipping_cost' => 10.00, 'product_status' => 1],
            ['name' => 'Basic Tee 9', 'price' => 38.00, 'feature_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'gallery_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'shipping_cost' => 10.00, 'product_status' => 1],
            ['name' => 'Basic Tee 0', 'price' => 39.00, 'feature_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'gallery_image' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg', 'shipping_cost' => 10.00, 'product_status' => 1]
        ];
        Products::insert($productData);
    }
}
