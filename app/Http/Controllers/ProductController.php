<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Http\Request\StoreproductRequest;
use App\Http\Request\UpdateproductRequest;
use App\Http\Requests\StoreproductRequest as RequestsStoreproductRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Stora33333333ge;

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
    public function addModal()
    {
        return view('admin.modal.addModal',[
            'title' => 'Tambah Data Product',
            'sku'   => 'BRG'.rand(10000, 99999),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestsStoreproductRequest $request)
    {
        $data = new product;
        $data->sku          = $request->sku;
        $data->nama_product = $request->nama;
        $data->type         = $request->type;
        $data->kategory     = $request->kategory;
        $data->harga        = $request->harga;
        $data->quantity     = $request->quantity;
        $data->discount     = 10/100;
        $data->is_active    = 1;       
       
        if($request->hasFile('foto')){
            $photo = $request->file('foto');
            $filename = date('Ymd').'_'.$photo->getClientOriginalName();
            $photo->move(public_path('storage/product'),$filename);
            $data->foto = $filename;
        }
        $data->save();
        Alert::toast('Data berhasil disimpan', 'success');
        return redirect()->route('product');

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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
