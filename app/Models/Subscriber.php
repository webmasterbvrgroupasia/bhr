<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    protected $table = 'subscribers';

    public $timestamps = true;

    protected $fillable = [
        
        'first_name',

        'last_name',
        
        'phone_number',
        
        'email'
    
    ];
}
