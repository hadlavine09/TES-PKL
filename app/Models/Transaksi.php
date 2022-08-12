<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory; 
    public $fillable = ['id','uuid','id_product', 'id_user', 'amount', 'tax', 'admin_fre','total',];
    public $timestamps = true;

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }
    // membuat relasi one to one di model
    public function user()
    {
        // data dari model 'Wali' bisa dimiliki
        // oleh model 'Siswa' melalui 'id_siswa'
        return $this->belongsTo(User::class, 'id_user');
    }

}
