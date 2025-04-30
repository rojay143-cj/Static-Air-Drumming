<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_receipt extends Model
{
    use HasFactory;

    protected $table ="tbl_receipt";
    protected $fillable = [
        "file_id",
        "receipt_date",
        "or",
        "total",
        "receipt_date",
        "category_id",
        "img_id",
    ];
}
