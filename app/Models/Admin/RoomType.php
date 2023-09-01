<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    protected $table = 'room_type';

    protected $fillable = [

        'name',

        'room_area',

        'property_id',

        'maximum_adult',

        'maximum_child',

        'images',

        'price_per_night'

    ];

    public $timestamps = true;

    public function property()

    {

        return $this->belongsTo(Property::class);

    }
}
