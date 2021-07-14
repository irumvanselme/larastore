<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ["title", "description", "status", "vendor", "price", "cost"];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
