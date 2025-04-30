<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_image extends Model
{
    use HasFactory;

    protected $table = "tbl_image";

    protected $fillable = [
        "img_name",
        "img_url",
    ];
}
