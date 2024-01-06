<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'titile',
        'sort',
        'image',
        'action',
        'html',
        'text',
        'content_id',
        'content_type',
    ];
}
