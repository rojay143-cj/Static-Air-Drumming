<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_message extends Model
{
    use HasFactory;

    protected $table = 'tbl_message';

    protected $fillable = [
        'user_id',
        'file_id',
        'msg_content',
    ];
}
