<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinerModel extends Model
{
    use HasFactory;
    protected $table = 'joiner';
    protected $fillable = [
        'room_id','first_name','last_name','email'
    ];
}
