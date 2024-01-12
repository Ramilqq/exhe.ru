<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tarif extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'text',
        'price',
    ];

    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where($field ?? 'id', $value)->firstOrFail();
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'tarif_users')->get();
    }

}
