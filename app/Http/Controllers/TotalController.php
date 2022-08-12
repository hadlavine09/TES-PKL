<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class TotalController extends Controller
{
    public function index()
    {
        $user = User::all();
        $total = $user->Count();

        $total_product = DB::table('products')
            ->sum('quantity');

        // $total_obat = $obat->Count();

        return view('layouts.components.beranda', compact('total', 'total_product'));
    }

}
