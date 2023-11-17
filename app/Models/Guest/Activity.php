<?php

namespace App\Models\Guest;

use App\Models\Admin\ActivityCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activities';

    public $timestamps = true;

    public function category(): BelongsTo
    {
       
        return $this->belongsTo(ActivityCategory::class, 'category_id');
    
    }
}
