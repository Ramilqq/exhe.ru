<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

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
        'modeltable_id',
        'modeltable_type',
    ];

    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where($field ?? 'id', $value)->firstOrFail();
    }

    public function modeltable(): MorphTo
    {
        return $this->morphTo();
    }
}
