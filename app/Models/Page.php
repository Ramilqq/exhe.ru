<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\File;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'longtitle',
        'description',
        'keyword',
        'url',
        'top_menu',
        'bottom_menu',
        'publich',
    ];

    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where($field ?? 'id', $value)->firstOrFail();
    }

    public function contents(): MorphMany
    {
        return $this->morphMany(Content::class, 'modeltable');
    }

    protected static function boot() {
        parent::boot();
        static::deleting(function($model){
            foreach($model->contents()->get() as $content)
            {
                $content->delete();
            }
        });
    }
}
