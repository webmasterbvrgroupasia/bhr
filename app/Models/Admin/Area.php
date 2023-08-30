<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Area extends Model
{
    use HasFactory;

    protected $table = "areas";

    protected $fillable = [

        'location',

        'description',

        'image',
    ];

    protected $attributes = [

        'image' => '-'

    ];

    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, "area_id", "id");
    }
}
