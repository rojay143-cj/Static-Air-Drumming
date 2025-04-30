<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_category extends Model
{
    use HasFactory;
    protected $table = 'tbl_category';

    protected $fillable = [
        'category_name',
        'user_id'
    ];
    protected $primaryKey = 'category_id';

}
