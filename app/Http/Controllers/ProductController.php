<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Products;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData = [];
        $viewData['products']  = Products::all();
        return view('products.productsList', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData = [];
        return view('products.productAdd', $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $viewData = [];
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required',
            'shipping_cost' => 'required',
            'product_status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/products/create')
                ->withErrors($validator)
                ->withInput();
        }

        $result = Products::insert(
            [
                "name" => $request->input('name'),
                "description" => $request->input('description'),
                "price" => $request->input('price'),
                "shipping_cost" => $request->input('shipping_cost'),
                "product_status" => $request->input('product_status'),
            ]
        );

        return redirect()->route('products.index')->withSuccess('New Product is Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        //
        $viewData = [];
        $product  = Products::where("id", "=", $id)->first();
        $product->gallery_image = json_decode($product->gallery_image);
        $viewData['product'] = $product;
        return view('products.productDetails', $viewData);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        //
        $viewData = [];
        $product  = Products::where("id", "=", $id)->first();
        $product->gallery_image = json_decode($product->gallery_image);
        $viewData['product'] = $product;

        return view('products.productEdit', $viewData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required',
            'shipping_cost' => 'required',
            'product_status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/products/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $result = Products::whereId($id)->update(
            [
                "name" => $request->input('name'),
                "description" => $request->input('description'),
                "price" => $request->input('price'),
                "shipping_cost" => $request->input('shipping_cost'),
                "product_status" => $request->input('product_status'),
            ]
        );
        return redirect('/products/' . $id . '/edit')->withSuccess('IT WORKS!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        //
        Products::find($id)->delete();

        return redirect()->route('products.index')->withSuccess('Product is removed!');
    }



    public function generatePdf($id)
    {
        $product = Products::findOrFail($id);
        $product->gallery_image = json_decode($product->gallery_image);
        $viewData['product'] = $product;

        $pdf = PDF::loadView('products.pdf', compact('product'))->setPaper('a4', 'portrait');

        return $pdf->download('product.pdf');
    }
}
