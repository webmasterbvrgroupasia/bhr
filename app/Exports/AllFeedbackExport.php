<?php

namespace App\Exports;

use App\Models\Feedback;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AllFeedbackExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Feedback::all();
    }
    function headings(): array {

        return [

            '#',

            'First Name',

            'Last Name',

            'Email Address',

            'Phone Number',

            'Nationality',

            'Unit Stayed In',

            'Room',

            'Is this their first time?',
            
            'Reference',
            
            'Reservation Rating',

            'Cleanliness',

            'Housekeeping',

            'Staff Friendliness',

            'Staff Competence',

            'Service Quality',

            'Ambience',

            'Location',

            'General Review',

            'Quality and Price',

            'Unit Service',

            'Considered to use our service again',

            'Will They Recommend us to their friends or colleagues',

            'Employee who made their stay more pleasurable',

            'Review in Writings',

            'Subscribe to BVR Bulletin Insights',

            'Deleted Date',

            'Submission Date',

        ];

    }
}
