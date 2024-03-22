<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voucher extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'vouchers';

    protected $fillable = [

        'code',
        
        'title',
        
        'inclusions',
        
        'valid_date_start',
        
        'valid_date_end',
    
    ];

    protected $dates = [
    
        'deleted_at'
    
    ];
}
