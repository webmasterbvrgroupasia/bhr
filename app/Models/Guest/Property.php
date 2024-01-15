<?php

namespace App\Models\Guest;

use App\Models\Admin\RoomType;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Property extends Model
{
    use HasFactory;

    /**
     * Get the user associated with the Property
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function location(): HasOne
    {
        return $this->hasOne(Location::class, 'id', 'area_id');
    }

    public function room_type() : HasMany
    {
        return $this->hasMany(RoomType::class);

    }
}
