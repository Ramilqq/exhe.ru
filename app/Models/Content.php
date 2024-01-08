<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sort',
        'image',
        'action',
        'html',
        'text',
    ];

    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where($field ?? 'id', $value)->firstOrFail();
    }

    public function modeltable(): MorphTo
    {
        return $this->morphTo();
    }

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'modeltable');
    }

    protected static function boot() {
        parent::boot();
        static::deleting(function($model){
            foreach($model->images()->get() as $image)
            {
                $image->delete();
            }
        });
    }
}
