<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ActivityCategory extends Model
{
    use HasFactory;

    protected $table = 'activity_categories';

    protected $fillable = [
        
        'name',

        'keywords',

        'images'
    
    ];

    public $timestamps = true;

    /**
     * Get all of the comments for the ActivityCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activities(): HasMany
    
    {
    
        return $this->hasMany(Activity::class, 'category_id');
    
    }

    

}
