<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model
{
    use HasFactory;

    protected $table = "properties";

    protected $fillable = [

        'name',

        'area_id',

        'slug',

        'pool_images',

        'restaurant_images',

        'room_images',

        'header_images',

        'images',

        'description',

        'pool',

        'bar',

        'sauna',

        'garden',

        'non_smoking_room',

        'family_room',

        'hot_tub',

        'jacuzzi',

        'air_conditioning',

        'property_status',

        'balcony',

        'tv',

        'electric_kettle',

        'clothes_rack',

        'hair_dryer',

        'private_entrance',

        'safety_box',

        'booking_link',

        'desk',

        'socket',

        'private_bathroom',

        'toilet_paper',

        'shower',

        'bathtub',

        'slipper',

        'toileteries',

        'minibar',

        'refrigerator',

        'tea_coffee_maker',

        'smoke_alarm',

        'fire_extinguisher',

    ];

    protected $casts = [

        'images' => 'array',

    ];

    protected $attributes = [

        'images' => '-',

        'header_images' => '-',

        'restaurant_images' => '-',

        'pool_images' => '-',

        'room_images'=>'-',

        'air_conditioner'=>'0'

    ];

    public $timestamps = true;

    public function room_type() : HasMany
    {

        return $this->hasMany(RoomType::class);

    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Area::class, "area_id", "id");
    }
}
