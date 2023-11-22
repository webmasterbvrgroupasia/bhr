<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',

        'area_id',

        'slug',

        'images',

        'description',

        'inclusions',

        'category_id',

        'price',

        'booking_link',

        'status'
    ];

    protected $attributes = [

        'images' => '-',

        'price' => '0',

    ];

    protected $casts = [

        'images' => 'array'

    ];

    /**
     * Get the category that owns the Activity
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {

        return $this->belongsTo(ActivityCategory::class, 'category_id');

    }

    /**
     * Get the user that owns the Activity
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class, 'area_id');
    }

}
