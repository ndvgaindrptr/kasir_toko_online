<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    protected $table ='penjualans';
    public $timestamps = true;
    protected $fillable = [
        'code_penjualan',
        'sku_penjualan',
        'total_qty',
        'total_harga',
        'nama_customer',
        'alamat',
        'no_tlp',
        'ekspedisi',
    ];
    protected $hidden;
}
