<?php

namespace App\Services;

use App\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductService
{
    /**
     * @var $productRepository
     */
    protected $productRepository;

    /**
     * ProductService constructor.
     * 
     * @param ProductRepository $productRepository;
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function getAllProducts()
    {
        return $this->productRepository->all();
    }
    public function getOneProduct($id)
    {
        return $this->productRepository->find($id);
    }
}
