<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemoRequest extends Model
{
    protected $fillable = [
        'name',
        'establishment',
        'phone',
        'email',
        'message',
    ];
}
