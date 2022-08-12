<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Product;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{

    public function __contruct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model transaksi
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('product'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $transaksi = Transaksi::all();
        return view('transaksi.create', compact('produt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([

            'uuid' => 'required',
            'id_product' => 'reuired',
            'amount' => 'required',
            'id_user' => 'required',
            'tax' => 'required',
            'admin_fre' => 'required',
            'total' => 'required',
        ]);

        $transaksi = new Transaksi();
        $transaksi->uuid = $request->uuid;
        $transaksi->id_product = $request->id_product;
        $transaksi->amount = $request->amount;
        $transaksi->id_user = $request->id_user;
        $transaksi->tax = $request->tax;
        $transaksi->admin_fre = $request->admin_fre;
        $transaksi->total = $request->total;
        $transaksi->save();
        return redirect()->route('transaksi.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('transaksi'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $validated = $request->validate([
            'uuid' => 'required',
            'id_product' => 'required',
            'id_user' => 'rquired',
            'amount' => 'required',
            'tax' => 'required',
            'admin_fre' => 'required',
            'total' => 'required',
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->uuid = $request->uuid;
        $transaksi->id_product = $request->id_product;
        $transaksi->amount = $request->amount;
        $transaksi->id_user = $request->id_user;
        $transaksi->tax = $request->tax;
        $transaksi->admin_fre = $request->admin_fre;
        $transaksi->total = $request->total;
        $transaksi->save();

        return redirect()->route('transaksi.index')
            ->with('success', 'Data berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
