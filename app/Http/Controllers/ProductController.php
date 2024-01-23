<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Products;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData = [];
        $viewData['products']  = Products::all();
        return view('products.productsList',$viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData = [];
        return view('products.productsAdd',$viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $viewData = [];
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        //
        $viewData = [];
        $product  = Products::where("id", "=" , $id)->first();
        $product->gallery_image = json_decode($product->gallery_image);
        $viewData['product']= $product;
        return view('products.productDetails',$viewData);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        //
        $viewData = [];
        $product  = Products::where("id", "=" , $id)->first();

        return view('products.productEdit',$viewData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
    }



    public function generatePdf($id)
    {
        $product = Products::findOrFail($id);

        $pdf = PDF::loadView('products.pdf', compact('product'));

        return $pdf->download('product.pdf');
    }
}
