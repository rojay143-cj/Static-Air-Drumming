<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_file extends Model
{
    use HasFactory;

    protected $table = 'tbl_files';

    protected $fillable = [
        'user_id',
        'start_date',
        'end_date',
        'budget',
        'amount',
        'excess',
        'title',
        'status',
    ];
}
