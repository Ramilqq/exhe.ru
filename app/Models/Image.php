<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\File;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'image'
    ];

    public function modeltable(): MorphTo
    {
        return $this->morphTo();
    }

    protected static function boot() {
        parent::boot();
        static::deleting(function($model) {
            if(File::exists($model->image))
            {
                File::delete($model->image);
            }
        });
    }
}
