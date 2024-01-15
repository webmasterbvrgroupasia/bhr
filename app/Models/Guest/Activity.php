<?php

namespace App\Models\Guest;

use App\Models\Admin\ActivityCategory;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activities';

    public $timestamps = true;

    public function category(): BelongsTo
    {
       
        return $this->belongsTo(ActivityCategory::class, 'category_id');
    
    }

    /**
     * Get the user associated with the Activity
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function location(): HasOne
    {
        return $this->hasOne(Location::class, 'id', 'area_id');
    }
}
