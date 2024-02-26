<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'surface',
        'rooms',
        'bedrooms',
        'floor',
        'price',
        'city',
        'address',
        'postal_code',
        'sold',
        'image'
    ];

    public function imageUrl(): string
    {
        return Storage::disk('public')->url($this->image);
    }

    public function options()
    {
        return $this->belongsToMany(Option::class);
    }
}
