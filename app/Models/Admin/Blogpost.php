<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    use HasFactory;

    protected $table = 'blogpost';

    protected $fillable = 
    [
        'title',

        'slug',
        
        'content',
        
        'image',

        'status'
    ];

    public $timestamp = true;
}
