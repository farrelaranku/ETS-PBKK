<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input= $request->validate([
            'type'=> 'required',
            'cond'=> 'required',
            'keterangan'=> 'required',
            'kecacatan'=> 'required',
            'stock'=> 'required|gt:0',
            // 'image' => 'required|mimes:png,jpg,jpeg'

        ]);


        // DB::table('carts')->insert([
        //         'type'=>$request->input('type'),
        //         'cond'=>$request->input('cond'),
        //         'keterangan'=>$request->input('keterangan'),
        //         'kecacatan'=>$request->input('kecacatan'),
        //         'stock'=>$request->input('stock'),
        //         'image'=>$request->input('image'),
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ]);


      Cart::create($input);
        //
        return redirect('/cart');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $request->validate([
            'id' => 'required|integer', // ID 
        ]);

        $cart = Cart::find($request->input('id'));

        if (!$cart) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.'); 
        }

        if ($request->filled('cond')) {
            $cart->cond = $request->input('cond');
        }


        if ($request->filled('keterangan')) {
            $cart->keterangan = $request->input('keterangan');
        }

        if ($request->filled('kecacatan')) {
            $cart->kecacatan = $request->input('kecacatan');
        }

        if ($request->filled('stock')) {
            $cart->type = $request->input('stock');
        }

        $cart->save(); 

        return redirect()->back()->with('success', 'Data berhasil diperbarui.'); 
  
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        
        $request->validate([
            'id' => 'required|integer', // ID 
        ]);

        $cart = Cart::find($request->input('id'));

        $cart->delete();
        //
        //
     
        return redirect()->back()->with('success', 'Data berhasil diperbarui.'); // Redirect kembali ke halaman sebelumnya dengan pesan sukses
  
        //
    }
}
