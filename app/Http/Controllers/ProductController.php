<?php

namespace App\Http\Controllers;

use App\Models\Product ;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.add-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $data = $request->all();
            $file = $data['image'] ?? null;
            $createdProduct = Product::create($data);
            $fileName = md5($file->getClientOriginalName());
            $fileExtension = $file->getClientOriginalExtension();
            if(!!$file){
                $createdProduct->addMedia($file)->usingFileName($fileName.'.'.$fileExtension)->toMediaCollection('slider-image');
            }
            toastify()->success('Product created.');
            return back();
        } catch (\Throwable $th) {
            toastify()->error('Some error occured.');
            return back()->withInput();
        }
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}
