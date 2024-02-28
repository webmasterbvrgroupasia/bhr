<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'feedbacks';

    protected $fillable = [

        'first_name',

        'last_name',

        'email_address',

        'phone_number',

        'nationality',

        'unit',

        'room',

        'first_time',

        'reference',

        'reservation_rating',

        'cleanliness',

        'housekeeping',

        'staff_friendliness',

        'staff_competence',

        'service_quality',

        'ambience',

        'location',

        'general_review',

        'quality_and_price',

        'unit_service',

        'consideration',

        'recommendation',

        'employee_who_made_stay_more_pleasurable',

        'review_writings',

        'subscribe_to_newsletter',

    ];

    public $timestamps = true;

    protected $dates = [
        'deleted_at'
    ];
}
