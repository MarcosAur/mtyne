<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortenUrl extends Model
{
    protected $table = 'urls';
    use HasFactory;

    protected $fillable = [
        'original_url',
        'shortened_path',
        'active'
    ];

    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where('shortened_path', $value)
                    ->orWhere('id', $value)->firstOrFail();
    }
}
